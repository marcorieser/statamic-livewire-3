<?php

namespace App\Livewire;

use Livewire\Component;

class TodoListBlade extends Component
{
    public $title = 'Blade';
    public $todos = [
        'Todo 1',
        'Todo 2',
        'Todo 3',
    ];
    public $todo = 'New Todo';

    public function mount($passed = null)
    {
        dump([self::class, $passed, gettype($passed)]);
    }

    public function render()
    {
        return view('livewire.todo-list-blade');
    }

    public function add()
    {
        $this->todos[] = $this->todo;
        $this->todo = 'After submit by Livewire';
    }
}
