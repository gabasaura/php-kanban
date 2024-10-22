<div class="row">
    <!-- Formulario para agregar tarea -->
    <div class="col-12 mb-3">
        <input type="text" wire:model="newTaskTitle" class="form-control" placeholder="Add new task">
        <button wire:click="addTask" class="btn btn-bd-primary mt-2">Add Task</button>
        <!-- Mostrar errores si el título de la tarea no es válido -->
        @error('newTaskTitle') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <!-- Columna de tareas pendientes -->
    <div class="col-md-4">
        <h3 class="text-center">Pending</h3>
        <div class="card bg-light">
            <div class="card-body">
                @foreach($tasks->where('status', 'pending') as $task)
                    <div class="card mb-2">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <span>{{ $task->title }}</span>
                            <button wire:click="updateTaskStatus({{ $task->id }}, 'in-progress')" class="btn-bd-primary">Start</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Columna de tareas en progreso -->
    <div class="col-md-4">
        <h3 class="text-center">In Progress</h3>
        <div class="card bg-light">
            <div class="card-body">
                @foreach($tasks->where('status', 'in-progress') as $task)
                    <div class="card mb-2">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <span>{{ $task->title }}</span>
                            <button wire:click="updateTaskStatus({{ $task->id }}, 'completed')" class="btn btn-sm btn-outline-success">Complete</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Columna de tareas completadas -->
    <div class="col-md-4">
        <h3 class="text-center">Completed</h3>
        <div class="card bg-light">
            <div class="card-body">
                @foreach($tasks->where('status', 'completed') as $task)
                    <div class="card mb-2">
                        <div class="card-body">
                            <span>{{ $task->title }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
