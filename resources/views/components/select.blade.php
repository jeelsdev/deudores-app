<div class="w-full">
    <label for="{{ $id }}" class="text-sm font-medium text-stone-600">{{ $label }}</label>
    <select id="{{ $id }}" name="{{ $name }}" {{ $attributes->merge(['class'=>'mt-2 block w-full rounded-md border border-gray-100 bg-gray-100 px-2 py-2 shadow-sm outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50']) }}>
        {{ $slot }}
    </select>
</div>
