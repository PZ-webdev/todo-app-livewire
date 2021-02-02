<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;
use Livewire\WithPagination;

class Todos extends Component
{
    use WithPagination;

    public $title = '';

        
    /**
     * The Livewire function.
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.todos',[
            'todos' => Todo::latest()->where('user_id', Auth()->id())->paginate(5)
        ]);
    }
    
      
    /**
     * Add Todo 
     *
     * @return void
     */
    public function addTodo()
    {
        $this->validate([
            'title' => 'required'
        ]);

        Todo::create([
            'user_id' => Auth()->id(),
            'title' => $this->title,
            'completed' => false,
            $this->title = '',
        ]);

    }
    
    /**
     * Deletde Todo from id
     *
     * @param  mixed $id
     * @return void
     */
    public function deleteTodo($id)
    {
        Todo::find($id)->delete();
    }

    
    /**
     * Toggle Todo
     *
     * @param  mixed $id
     * @return void
     */
    public function toggleTodo($id)
    {
        $todo = Todo::find($id);

        $todo->completed = !$todo->completed;
        $todo->save();
    }


}
