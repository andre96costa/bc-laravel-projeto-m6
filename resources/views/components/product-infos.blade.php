<div class="flex flex-col w-full lg:1/2 lg:px-12 px-0 mt-8 lg:mt-0">
    <h2 class="text-title-5 font-bold">Produc name</h2>
    <span class="text-xs font-thin mt-1 text-gray-500">No.123456</span>

    <div class="flex flex-row items-center justify-between w-full mt-2">
        <div class="flex flex-row items-start ">
            <x-icon class="text-yellow-400" name="star" size="large"></x-icon>
            <x-icon class="text-yellow-400" name="star" size="large"></x-icon>
            <x-icon class="text-yellow-400" name="star" size="large"></x-icon>
            <x-icon class="text-yellow-400" name="star" size="large"></x-icon>
            <x-icon class="text-yellow-400" name="star" size="large"></x-icon>
        </div>
        <span class="text-xs font-thin text-success-600">In Stock</span>
    </div>

    <div class="flex flex-row items-start my-4 space-x-2">
        @foreach (["S", "M", "L", "XL"] as $size)
            <x-form.button
                type="button"
                :text="$size"
                :variation="$loop->first ? 'primary' : 'outline'"
                size="small"
            > </x-form.button>
        @endforeach
    </div>

    <span class="text-sm font-bold">Color:</span>
    <div class="flex flex-row flex-shrink-0 items-start mt-2 space-x-2">
        <div class="cursor-pointer rounded-full bg-red-500 h-4 w-4"></div>
        <div class="cursor-pointer rounded-full bg-red-400 h-4 w-4"></div>
        <div class="cursor-pointer rounded-full bg-red-300 h-4 w-4"></div>
        <div class="cursor-pointer rounded-full bg-blue-500 h-4 w-4"></div>
        <div class="cursor-pointer rounded-full bg-blue-600 h-4 w-4"></div>
        <div class="cursor-pointer rounded-full bg-blue-700 h-4 w-4"></div>
    </div>
    <span class="text-sm font-bold mt-5">Description:</span>
    <div class="flex flex-col items-start mt-2 space-y-1">
        @foreach([1,2,3,4,5,6,7,8] as $item)
            <div class="flex flex-row justify-between w-full">
                <span class="text-xs font-thin text-gray-400">Detail {{ $item }}</span>
                <span class="text-xs font-thintext-gray-400">Info</span>
            </div>
        @endforeach
    </div>
</div>