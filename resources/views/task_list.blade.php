<h1>My Tasks</h1>
<form method="post" action="{{url('/task')}}">
    <div class="form-group input-group">
        @csrf
        <input type="text" name="task" value="{{ old('task')}}" class="form-control ">
        <div class="input-group-btn">
            <input type="submit" name="submit" value="Add" class="btn btn-success">
        </div>
    </div>
</form>
@if ($errors->any)
<div class="text-danger">
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
</div>
@endif
<table class="table table-hover">
    <thead>
        <th>Tasks</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
        <tr>
            <td class={{ $task->status ? 'done' : '' }} >
                <form method="POST" action="{{url('/task')}}{{'/'.$task->id }}">
                    @method('PATCH')
                    @csrf
                    <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->status ? 'checked' : '' }} >
                    {{ $task->task }}
                </form>
            </td>
            <td>
                <a href="{{url('/task'.'/'.$task->id.'/edit')}}" class="btn btn-link"><i class="fa fa-pencil"></i></a>
                <form method="post" action="{{url('/task')}}{{'/'.$task->id }}" class="inline" >
                    @method('DELETE')
                    @csrf
                    <button name="submit" class="btn btn-link">
                        <i class="fa fa-trash" ></i>
                </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
