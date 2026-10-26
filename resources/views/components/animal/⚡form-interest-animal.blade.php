<?php

use Livewire\Component;
use App\Models\Animal;
use App\Models\Interest;
use Illuminate\Support\Facades\Validator;

new class extends Component
{
    public Animal $animal;

    public string $name = '';

    public string $email = '';

    public string $phone = '';

    public string $motivation = '';

    public bool $submitted = false;

    public function mount(Animal $animal): void
    {
        $this->animal = $animal;
    }

    public function submit(): void
    {
        $phone = preg_replace('/\D+/', '', $this->phone) ?? '';

        $validated = Validator::make([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $phone,
            'motivation' => $this->motivation,
        ], [
            'name' => ['required', 'string', 'min:3', 'max:254'],
            'email' => ['required', 'string', 'email'],
            'phone' => ['required', 'string', 'regex:/^\d+$/'],
            'motivation' => ['required', 'string', 'min:6', 'max:3000'],
        ], [
            'name.required' => 'Informe seu nome completo.',
            'name.string' => 'O nome completo deve ser um texto.',
            'name.min' => 'O nome completo deve ter pelo menos 3 caracteres.',
            'name.max' => 'O nome completo deve ter menos de 255 caracteres.',
            'email.required' => 'Informe seu e-mail.',
            'email.string' => 'O e-mail deve ser um texto.',
            'email.email' => 'Informe um e-mail válido.',
            'phone.required' => 'Informe seu telefone.',
            'phone.string' => 'O telefone deve ser um texto.',
            'phone.regex' => 'O telefone deve conter apenas números.',
            'motivation.required' => 'Informe sua motivação para a adoção.',
            'motivation.string' => 'A motivação deve ser um texto.',
            'motivation.min' => 'A motivação deve ter pelo menos 6 caracteres.',
            'motivation.max' => 'A motivação deve ter no máximo 3000 caracteres.',
        ])->validate();

        Interest::create([
            'animal_id' => $this->animal->id,
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $phone,
            'message' => $validated['motivation'],
        ]);

        $this->reset('name', 'email', 'phone', 'motivation');
        $this->resetValidation();
        $this->submitted = true;
    }
};
?>

<form wire:submit="submit" data-adoption-interest-form class="space-y-5 p-5 sm:p-6">
    <div class="flex items-center gap-2 text-sm font-bold text-[#261714]">
        <span class="flex h-6 w-6 items-center justify-center rounded-full bg-[#f7ddd5] text-xs text-[#b63817]">1</span>
        Seus dados de contato
    </div>

    @component('components.input', [
        'id' => 'adoption-interest-name',
        'name' => 'name',
        'label' => 'Nome completo',
        'placeholder' => 'Como podemos chamar você?',
        'wireModel' => 'name',
        'required' => true,
    ])
    @endcomponent
    @error('name') <p class="-mt-3 text-xs text-red-600">{{ $message }}</p> @enderror

    <div class="grid gap-4 sm:grid-cols-2">
        @component('components.input', [
            'id' => 'adoption-interest-email',
            'name' => 'email',
            'type' => 'email',
            'label' => 'E-mail',
            'placeholder' => 'voce@exemplo.com',
            'wireModel' => 'email',
            'required' => true,
        ])
        @endcomponent
        @error('email') <p class="-mt-3 text-xs text-red-600">{{ $message }}</p> @enderror
        @component('components.input', [
            'id' => 'adoption-interest-whatsapp',
            'name' => 'phone',
            'type' => 'tel',
            'label' => 'Número do WhatsApp',
            'placeholder' => '(11) 99999-9999',
            'wireModel' => 'phone',
            'required' => true,
        ])
        @endcomponent
        @error('phone') <p class="-mt-3 text-xs text-red-600 sm:col-span-2">{{ $message }}</p> @enderror
    </div>

    <div>
        <label for="adoption-interest-motivation" class="mb-2 block text-xs font-semibold text-[#704f45]">Motivação para a adoção</label>
        <textarea wire:model="motivation" id="adoption-interest-motivation" name="motivation" rows="4" required placeholder="Conte um pouco sobre por que você quer adotar {{ $animal->name }}..." class="w-full resize-y rounded-xl border border-[#f0ddd5] bg-[#fffaf7] px-4 py-3 text-sm text-[#3d2a24] outline-none transition placeholder:text-[#bda399] focus:border-[#b63817] focus:ring-4 focus:ring-[#b63817]/10"></textarea>
        @error('motivation') <p class="text-xs text-red-600">{{ $message }}</p> @enderror
    </div>

    <div data-adoption-interest-feedback class="{{ $submitted ? '' : 'hidden' }} rounded-xl bg-[#e5f2e3] p-3 text-sm font-medium text-[#356442]" role="status">
        {{ $submitted ? 'Obrigado! Sua manifestação foi registrada e o responsável entrará em contato em breve.' : '' }}
    </div>

    <div class="flex flex-col-reverse gap-3 pt-1 sm:flex-row sm:justify-end">
        <button type="button" data-adoption-interest-close class="cursor-pointer rounded-full px-5 py-2.5 text-sm font-semibold text-[#704f45] transition hover:bg-[#f8ebe6] focus:outline-none focus:ring-2 focus:ring-[#b63817]">Cancelar</button>
        @component('components.button', [
            'label' => 'Enviar manifestação',
            'tag' => 'button',
            'type' => 'submit',
            'color' => 'terracotta',
            'spacing' => 'none',
            'customClass' => 'w-full sm:w-auto',
        ])
        @endcomponent
    </div>
</form>
