
<h1>
The list of Tasks
</h1>
<br/>
<div>
    {{-- @if(count($tasks)) --}}
    @forelse ($tasks as $task)
         <div>
            <a href="{{ route('tasks.show', ['id'=>$task->id]) }}">{{ $task->title }}</a> </div>
    <br/>
    @empty
        <div>There are no tasks!</div>
    @endforelse

    {{-- @else
        <div>No tasks </div>
    @endif --}}
</div>
