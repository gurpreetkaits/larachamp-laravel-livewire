<?php

namespace App\Livewire;

use Livewire\Component;

class AboutUs extends Component
{
    public function index()
    {
        return $this->render();
    }
    public function render()
    {
        return view('livewire.about-us');
    }
}
