

<!-- resources/views/components/form-input.blade.php -->
<input 
    name="{{ $name }}" 
    id="{{ $id }}" 
    {{ $attributes->merge(['class' => 'block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6']) }}
>
