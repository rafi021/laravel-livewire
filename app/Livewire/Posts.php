<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class Posts extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.posts', [
            'posts' => Post::latest()->paginate(10)
        ]);
    }
    // Livewire event listener for the 'delete-post' event
    #[On("reloadPosts")]
    public function reloadPosts()
    {
        $this->render();
    }
}
