<?php

namespace App\Livewire;

use App\Models\Post;
use Flux\Flux;
use Illuminate\Http\Request;
use Livewire\Component;

class PostCreate extends Component
{
    public $title, $content;


    public function render()
    {
        return view('livewire.post-create');
    }

    public function submit()
    {
        $this->validate([
            'title' => 'required|string|max:250',
            'content' => 'required|string',
        ]);

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
            'user_id' => auth()->id(),
        ]);
        $this->resetForm();
        Flux::modal('create-post')->close();
        $this->dispatch('reloadPosts');
    }
    public function resetForm()
    {
        $this->title = '';
        $this->content = '';
    }
}
