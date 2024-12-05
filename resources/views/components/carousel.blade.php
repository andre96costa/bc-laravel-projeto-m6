<div class="flex flex-col w-full">
    <div class="p-2 overflow-hidden border border-solid border-gray-300 rounded-md mt-4">
        <img class="w-full object-scale-down" src="{{ Vite::asset("resources/images/$images[0]") }}" alt="Foto1">
    </div>

    <div class="relative flex flex-row items-center justify-center space-x-2 mt-4">
        <x-icon
            name="chevron_left"
            size="large"
            class="cursor-pointer absolute left-0"
        > </x-icon>
        @foreach ($images as $image)
            <img class="w-12 h-12 object-cover object-center rounded-md bg-gray-300 cursor-pointer hover:bg-gray-400" src="{{ Vite::asset("resources/images/$image") }}">
        @endforeach
        <x-icon
            name="chevron_right"
            size="large"
            class="cursor-pointer absolute right-0"
        > </x-icon>
    </div>
</div>