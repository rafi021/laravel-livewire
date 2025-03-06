<?php

namespace App\Livewire;

use App\Models\Post;
use Flux\Flux;
use Livewire\Component;
use Livewire\Attributes\On;

class PostEdit extends Component
{
    public $title, $content, $postId;
    public function render()
    {
        return view('livewire.post-edit');
    }

    #[On("editPost")]
    public function editPost($id)
    {
        $post = Post::find($id);
        $this->title = $post->title;
        $this->content = $post->content;
        $this->postId = $post->id;
        Flux::modal('edit-post')->show();
    }

    public function updatePost()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $post = Post::find($this->postId);
        $post->update([
            'title' => $this->title,
            'content' => $this->content
        ]);
        Flux::modal('edit-post')->close();
        $this->dispatch('reloadPosts');
    }
}
