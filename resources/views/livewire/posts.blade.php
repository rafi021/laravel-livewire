<div>
    <livewire:post-create />
    <livewire:post-edit />

    <flux:modal name="delete-post" class="min-w-[22rem]">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Delete post?</flux:heading>

                <flux:subheading>
                    <p>You're about to delete this post.</p>
                    <p>This action cannot be reversed.</p>
                </flux:subheading>
            </div>

            <div class="flex gap-2">
                <flux:spacer />

                <flux:modal.close>
                    <flux:button variant="ghost">Cancel</flux:button>
                </flux:modal.close>
                <flux:button type="submit" variant="danger" wire:click='deletePost'>Delete Post</flux:button>
            </div>
        </div>
    </flux:modal>

    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Title</th>
                    <th scope="col" class="px-6 py-3">Content</th>
                    <th scope="col" class="px-6 py-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr class="odd:bg-white even:bg-gray-50 dark:odd:bg-gray-800 dark:even:bg-gray-700">
                        <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $post->id }}</td>
                        <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $post->title }}</td>
                        <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $post->content }}</td>
                        <td class="px-6 py-2 inline-flex space-x-2">
                            <flux:button variant="primary" size="sm" wire:click="edit({{ $post->id }})">Edit
                            </flux:button>
                            <flux:button variant="danger" size="sm" wire:click="delete({{ $post->id }})">Delete
                            </flux:button>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        {{ $posts->links() }}
    </div>

</div>
