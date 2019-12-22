<h1>Edit Task</h1>
<form method="post" action="{{url('/task')}}{{'/'.$task->id }}">
    @method('PATCH')
    <div class="form-group">
        @csrf
        <input type="text" name="task" value="{{$task->task}}" class="form-control">
        <input type="submit" name="submit" value="UPDATE TASK" class="btn btn-success">
    </div>
</form>
@if ($errors->any)
<div class="text-danger">
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
</div>
@endif
