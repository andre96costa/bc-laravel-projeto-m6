<div class="flex flex-col w-full lg::w-1/2 px-0 lg:mt-0 lg:px-12" x-data="{ count: 1 }">
    <div class="p-4 flex flex-col border border-gray-200 rounded w-full">
        <div class="flex flex-row items-start space-x-4">
            <span class="text-title-5 font-bold">$20</span>
            <span class="text-sm font-thin line-through">$30</span>
        </div>

        <div class="flex flex-row items-center space-x-4 mt-4">
            <x-form.button
                @click="count > 1 ? count-- : count = 1"
                type="button"
                variation="outline"
                size="large"
                icon="remove"
                icon-position="left"
            > </x-form.button>

            <span class="text-title-5 font-bold">1</span>

            <x-form.button
                @click="count = count + 1"
                type="button"
                variation="outline"
                size="large"
                icon="add"
                icon-position="left"
            > </x-form.button>
        </div>

        <x-form.button
            class="mt-4"
            type="button"
            variation="primary"
            size="small"
            icon="shopping_cart"
            icon-position="left"
            text="Add to cart"
        > </x-form.button>

        <x-form.button
            class="mt-2"
            type="button"
            variation="outline"
            size="small"
            text="Buy now"
        > </x-form.button>

        <div class="flex flex-col items-start mt-2 space-y-1">
            @foreach([1,2,3] as $item)
                <div class="flex flex-row justify-between w-full">
                    <span class="text-xs font-thin text-gray-400">Detail {{ $item }}</span>
                    <span class="text-xs font-thintext-gray-400">Info</span>
                </div>
            @endforeach
        </div>
    </div>

    <div class="flex flex-row items-center bg-blue-300 mt-4 px-6 py-4 rounded-md space-x-2">
        <x-icon
            name="local_shipping" class="text-blue-500" size="large"
        > </x-icon>
        <span class="text-xs font-bold">Free shipping</span>
    </div>
    <div class="flex flex-row items-center bg-blue-300 mt-4 px-6 py-4 rounded-md space-x-2">
        <x-icon
            name="local_shipping" class="text-blue-500" size="large"
        > </x-icon>
        <span class="text-xs font-bold">Free shipping</span>
    </div>
</div>