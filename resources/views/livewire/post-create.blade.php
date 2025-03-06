<div>
    <flux:modal.trigger name="create-post">
        <flux:button>Create Post</flux:button>
    </flux:modal.trigger>

    <flux:modal name="create-post" class="md:w-200">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Create Post</flux:heading>
                <flux:subheading>Make changes to your post details. let's add details here.</flux:subheading>
            </div>

            <flux:input wire:model='title' label="Title" placeholder="Your title" />

            <flux:textarea wire:model='content' label="Content" placeholder="Your content" />

            <div class="flex">
                <flux:spacer />

                <flux:button type="submit" variant="primary" wire:click='submit'>Save</flux:button>
            </div>
        </div>
    </flux:modal>
</div>
