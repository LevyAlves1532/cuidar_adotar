<?php

namespace App\Filament\Caregiver\Resources\Animals\RelationManagers;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ImagesRelationManager extends RelationManager
{
    protected static string $relationship = 'images';

    protected static ?string $modelLabel = 'Imagem';

    protected static ?string $title = 'Gerenciar Imagem do Animal';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('path')
                    ->label('Fotos')
                    ->image()
                    ->multiple()
                    ->disk('public')
                    ->directory('animals')
                    ->visibility('public')
                    ->fetchFileInformation(false)
                    ->required()
                    ->maxFiles(10)
                    ->maxSize(5120)
                    ->columnSpan(2),
                Toggle::make('is_primary')
                    ->label('Imagem principal')
                    ->default(false)
                    ->visibleOn('edit'),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('path')
            ->columns([
                ImageColumn::make('path')
                    ->label('Foto')
                    ->disk('public')
                    ->visibility('public')
                    ->imageSize(80)
                    ->square(),
                TextColumn::make('file_name')
                    ->label('Arquivo')
                    ->state(fn (Model $record): string => basename($record->path))
                    ->searchable(['path'])
                    ->toggleable(),
                ToggleColumn::make('is_primary')
                    ->label('Principal')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Adicionada em')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TernaryFilter::make('is_primary')
                    ->label('Imagem principal')
                    ->placeholder('Todas as imagens')
                    ->trueLabel('Somente principal')
                    ->falseLabel('Somente secundárias'),
            ])
            ->defaultSort('created_at', 'desc')
            ->headerActions([
                CreateAction::make()
                    ->using(function (array $data): Model {
                        $paths = $data['path'];

                        unset($data['path']);

                        $images = collect($paths)
                            ->values()
                            ->map(fn (string $path, int $index): array => [
                                'path' => $path,
                                'is_primary' => $index === 0,
                            ])
                            ->all();

                        return $this->getRelationship()->createMany($images)->first();
                    }),
            ])
            ->recordActions([
                DeleteAction::make()
                    ->modalHeading('Excluir imagem do animal')
                    ->hiddenLabel()
                    ->after(fn ($record) => Storage::disk('public')->delete($record->path)),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                        ->after(function ($records) {
                            foreach ($records as $record) {
                                Storage::disk('public')->delete($record->path);
                            }
                        }),
                ]),
            ]);
    }
}
