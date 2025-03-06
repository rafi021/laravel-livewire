<?php

namespace App\Livewire;

use App\Models\Post;
use Flux\Flux;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class Posts extends Component
{
    use WithPagination;
    public $postId;

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

    public function edit($id)
    {
        $this->dispatch('editPost', $id);
    }
    public function delete($id)
    {
        Flux::modal('delete-post')->show();
        $this->postId = $id;
    }
    public function deletePost()
    {
        Post::find($this->postId)->delete();
        Flux::modal('delete-post')->close();
        $this->reloadPosts();
    }
}
