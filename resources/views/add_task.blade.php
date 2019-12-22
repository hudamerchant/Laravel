<form method="post" action="{{url('/task')}}">
    @csrf
    <input type="text" name="task" value="{{ old('tasks')}}">
    @if ($errors->any)
        <div>
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
    @endif
    <input type="submit" name="submit" value="Add">
</form>
