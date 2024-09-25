<x-layout >
    <x-slot:heading>
        Tarea
    </x-slot:heading>
    <h2 class="font-bold text-lg">{{$task['titulo']}}</h2>
    <p>
        {{$task['descripcion']}}
    </p>
    @if($task['estado']==='Pendiente')
        <div class="text-red-500 text-sm">Estado: {{$task['estado']}}</div>
    @elseif($task['estado']==='Finalizada')
        <div class="text-green-500 text-sm">Estado: {{$task['estado']}}</div>
    @else
        <div class="text-orange-500 text-sm">Estado: {{$task['estado']}}</div>
    @endif
    <br>
    <div>
        <b>Tags:</b>
        <ul>
            @foreach($task->tags as $tag)
                <li>- {{$tag->name}}</li>
            @endforeach
        </ul>
    </div>

    <p class="mt-6">
        <x-buttons href="/tasks/{{$task->id}}/edit">Editar Tarea</x-buttons>
    </p>

</x-layout>
