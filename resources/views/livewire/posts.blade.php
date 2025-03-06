<div>
    <livewire:post-create />
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
                            <button
                                class="px-3 py-2 text-xs font-medium text-white bg-blue-500 rounded hover:bg-blue-700">Edit
                            </button>
                            <button
                                class="px-3 py-2 text-xs font-medium text-white bg-red-500 rounded hover:bg-red-700">Delete
                            </button>
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
