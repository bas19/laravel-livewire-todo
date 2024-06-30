<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Todo;
use Auth;

class TodoForm extends Form
{
    #[Validate('required|min:3')]
    public $name = '';

    public function store()
    {
        $this->validate();
        Auth::user()->todos()->create($this->all());
    }
}
