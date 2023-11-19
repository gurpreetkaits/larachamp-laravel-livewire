<?php

namespace App\Livewire\Admin;

use App\Models\Tag;
use Livewire\Component;

class TagComponent extends Component
{
    public string $title = '';
    public string $slug = '';

    public function save(){
        dd($this->title,$this->slug);
    }
    public function render()
    {
        $tags = Tag::paginate(10);
        return view('livewire.admin.tag.index',compact('tags'));
    }
}
