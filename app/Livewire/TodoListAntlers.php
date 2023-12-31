<?php

namespace App\Livewire;

use Livewire\Component;

class TodoListAntlers extends Component
{
    public $title = 'Antlers';
    public $todos = [
        'Todo 1',
        'Todo 2',
        'Todo 3',
    ];
    public $todo = 'New Todo';

    public function mount($passed = null)
    {
//        dump([self::class, $passed, gettype($passed)]);
    }

    public function render()
    {
        return view('livewire.todo-list-antlers');
    }

    public function add()
    {
        $this->todos[] = $this->todo;
        $this->todo = 'After submit by Livewire';
    }

    public function placeholder()
    {
        return <<<'HTML'
        <div>
           We are waiting for the Livewire component to load.
        </div>
        HTML;
    }
}
