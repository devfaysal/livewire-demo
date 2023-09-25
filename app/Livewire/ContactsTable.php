<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class ContactsTable extends Component
{
    use WithPagination; 

    public $perPage = 10;

    public function updatedPerPage()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.contacts-table',[
            'contacts' => Contact::paginate($this->perPage),
        ]);
    }
}
