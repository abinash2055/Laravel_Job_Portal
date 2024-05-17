

<!-- resources/views/components/form-error.blade.php -->

@props(['name'])

@error($name)
    <p class="text-sm text-red-500 font-semibold italic mt-3">{{ $message }}</p>
@enderror
