<?php

use Livewire\Volt\Component;

new class extends Component {
    #[Validate('required|string|max:255')]
    public string $message = '';


    public function store(): void
    {
        $validated = $this->validate();

        auth()->user()->chirps()->create($validated);

        $this->message = '';
    }
}; ?>

<div>
    <form wire:submit="store" class="grid gap-4">
        <input type="text" name="title" id="title" placeholder="{{ __('Enter your title here') }}"
            class="form-control">
        <input type="datetime-local" name="date" id="date"
            class="form-control">
        <textarea wire:model="message" placeholder="{{ __('What\'s on your mind?') }}"
            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-10 rounded-md shadow-sm"></textarea>

        <div>
            <input type="file" name="image" id="image" class="form-control form-control-lg border border-2">
        </div>

        <x-input-error :messages="$errors->get('message')" class="mt-2" />
        <x-primary-button class="mt-4">{{ __('Chirp') }}</x-primary-button>
    </form>
</div>
