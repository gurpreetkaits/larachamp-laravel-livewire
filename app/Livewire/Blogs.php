<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Blogs extends Component
{
    use WithPagination;
    public $posts;
    public $categories;
    public function mount(){
        $this->posts = Post::query()->where('post_status', 'publish')->orderBy('ID', 'desc')->get();
    }
    public function render()
    {
        return view('livewire.blogs');
    }
}   
