<?php

namespace App\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public bool $showModal = false;

    public function openModal()
    {
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
