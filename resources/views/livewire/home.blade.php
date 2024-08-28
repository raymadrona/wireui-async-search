<div class="container max-2xl h-screen mx-auto flex mt-6">
    <x-select
        label="Search a User"
        placeholder="Select some user"
        :async-data="route('api.users')"
        option-label="name"
        option-value="id"
        wire:model="userId"
    />
</div>
