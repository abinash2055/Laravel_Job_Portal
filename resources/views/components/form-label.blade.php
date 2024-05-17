

<!-- resources/views/components/form-label.blade.php -->
<label for="{{ $for }}" {{ $attributes->merge(['class' => 'block text-sm font-medium leading-6 text-gray-900']) }}>
    {{ $slot }}
</label>
