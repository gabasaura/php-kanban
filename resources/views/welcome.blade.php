<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanban Board</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body>
    <div class="container mt-5">
        <h1>Kanban Task Board</h1>
        <livewire:task-board />
    </div>
    @livewireScripts
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
