<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;

class TaskBoard extends Component
{
    public $tasks;
    public $newTaskTitle;

    public function mount()
    {
        $this->tasks = Task::all(); // Asegúrate de que esta línea esté correcta

    }

    public function addTask()
    {
        $this->validate([
            'newTaskTitle' => 'required|string|max:255',
        ]);

        $this->tasks->push([
            'id' => $this->tasks->max('id') + 1, 
            'title' => $this->newTaskTitle, 
            'status' => 'pending',
        ]);

        $this->newTaskTitle = ''; // Limpiar el input después de agregar la tarea
    }

    public function updateTaskStatus($taskId, $newStatus)
    {
        $this->tasks = $this->tasks->map(function ($task) use ($taskId, $newStatus) {
            if ($task['id'] == $taskId) {
                $task['status'] = $newStatus;
            }
            return $task;
        });
    }

    public function render()
    {
        return view('livewire.task-board', [
            'tasks' => Task::all(), // Esto devuelve una colección de objetos
        ]);
    }
}
