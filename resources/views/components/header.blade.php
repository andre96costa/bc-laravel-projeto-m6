<div class="px-12 flex flex-row items-center justify-between py-4 w-full border-b border-solid border-gray-300">
    <div class="">
        <img class="w-24" src="{{ Vite::asset("resources/images/$logo") }}" alt="Logo" />
    </div>

    <div class="hidden md:flex flex-row items-center space-x-0.5">
        <x-form.input 
            type="text"
            name="search"
            placeholder="Search"
            size="small"
            icon="search"
            iconPosition="right"
        />
        <x-form.button
            type="button"
            variation="primary"
            size="small"
            icon="search"
            iconPosition="left"
        > </x-form.button>
    </div>

    <div class="flex flex-row items-center space-x-0.5">
        <x-form.button
            class="flex md:hidden"
            type="button"
            variation="primary"
            size="small"
            icon="search"
            iconPosition="left"
        > </x-form.button>

        <x-form.button
            type="button"
            variation="primary"
            size="small"
            icon="person"
            iconPosition="left"
            text="Log In"
        > </x-form.button>
        <x-form.button
            type="button"
            variation="outline"
            size="small"
            icon="shopping_cart"
            iconPosition="left"
        > </x-form.button>
    </div>
</div>