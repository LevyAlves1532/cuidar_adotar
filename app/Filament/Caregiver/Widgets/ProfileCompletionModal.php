<?php

namespace App\Filament\Caregiver\Widgets;

use App\Enums\ResponsibleType;
use App\Models\User;
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Contracts\HasSchemas;
use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;

class ProfileCompletionModal extends Widget implements HasActions, HasSchemas
{
    use InteractsWithActions;
    use InteractsWithSchemas;

    protected static bool $isDiscovered = false;

    protected string $view = 'filament.caregiver.widgets.profile-completion-modal';

    public function mount(): void
    {
        if ($this->isProfileIncomplete()) {
            $this->mountAction('completeProfile');
        }
    }

    public static function canView(): bool
    {
        return Auth::check();
    }

    public function completeProfileAction(): Action
    {
        return Action::make('completeProfile')
            ->label('Finalizar cadastro')
            ->modalHeading('Complete seu cadastro')
            ->modalDescription('Preencha seus dados para começar a atuar como cuidador.')
            ->modalSubmitActionLabel('Salvar cadastro')
            ->modalCancelAction(false)
            ->modalCloseButton(false)
            ->closeModalByClickingAway(false)
            ->fillForm(fn (): array => $this->getProfileData())
            ->schema([
                Select::make('responsible_type')
                    ->label('Tipo de responsável')
                    ->options(collect(ResponsibleType::cases())->mapWithKeys(
                        fn (ResponsibleType $type): array => [$type->value => $type->label()],
                    )->all())
                    ->required(),
                TextInput::make('city')
                    ->label('Cidade')
                    ->maxLength(255)
                    ->required(),
                TextInput::make('phone')
                    ->label('Telefone')
                    ->tel()
                    ->maxLength(30)
                    ->mask('(99) 9 9999-9999')
                    ->required(),
                Textarea::make('description')
                    ->label('Descrição')
                    ->rows(5)
                    ->maxLength(1000)
                    ->required(),
            ])
            ->action(function (array $data): void {
                /** @var User $user */
                $user = Auth::user();
                $user->update($data);
            });
    }

    private function isProfileIncomplete(): bool
    {
        /** @var User|null $user */
        $user = Auth::user();

        return $user === null || blank($user->responsible_type) || blank($user->city) || blank($user->phone) || blank($user->description);
    }

    /**
     * @return array<string, mixed>
     */
    private function getProfileData(): array
    {
        /** @var User $user */
        $user = Auth::user();

        return [
            'responsible_type' => $user->responsible_type?->value,
            'city' => $user->city,
            'phone' => $user->phone,
            'description' => $user->description,
        ];
    }
}
