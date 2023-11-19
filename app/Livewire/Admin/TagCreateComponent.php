<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class TagCreateComponent extends Component
{
    public $title;
    public $slug;

    // public function mo`
    public function render()
    {
        return view('livewire.admin.tag.create');
        // return view('livewire.admin.tag-create-component');
    }
    public function save(){
        dd($this->title);
    }
}
