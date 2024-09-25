<x-layout >
    <x-slot:heading>
        Página de Inicio
    </x-slot:heading>
    <h1 class="py-6"><strong>Lista de tareas:</strong></h1>
    <div class="space-y-4">
        @foreach ( $tasks as $task )
            <div class="flex justify-between items-center px-4 py-6 border border-black rounded-lg w-200">
                <a href="/tasks/{{$task['id']}}">
                    <div class="font-bold text-blue-500 text-sm">{{$task->user->first_name}} - {{$task->user->last_name}}</div>
                    <div>
                        <strong>{{$task['titulo']}}</strong>
                    </div>
                </a>
            </div>
        @endforeach
            <div>{{$tasks->links()}}</div>
    </div>

</x-layout>
