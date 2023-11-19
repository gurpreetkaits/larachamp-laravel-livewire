<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use App\Models\Tag;
use Livewire\Component;

class CreatePost extends Component
{
    public $title, $slug, $fileInput;
    public array $postTags;
    public string $content;
    public array $postCategories;
    public function save()
    {
        dd($this->title, $this->content);
    }
    public function render()
    {
        $categories = Category::query()->get();
        $tags = Tag::query()->get();
        return view('livewire.admin.create-post', compact('tags', 'categories'));
    }
}
