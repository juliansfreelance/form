@props(['disabled' => false])

@if ($disabled)
    <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'text-gray-500 bg-gray-100 border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm']) !!}>
@else
    <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm']) !!}>
@endif