<?php

namespace App\Livewire;

use Livewire\Component;
use Auth;
use App\Models\Todo as TodoItem;
use App\Livewire\Forms\TodoForm;

class Todo extends Component
{
    public TodoForm $form;

    public function add()
    {
        $this->form->store();
    }

    public function delete($id)
    {
       TodoItem::findOrFail($id)->delete();
    }

    public function render()
    {
        return view('livewire.todo', [
            'todos' => Auth::user()->todos
        ]);
    }
}
