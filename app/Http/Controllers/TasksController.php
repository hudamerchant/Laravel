<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $this->data['view']     = 'task_list';
        $this->data['tasks']    = Task::all();

        return view('layout' , $this->data );
    }
    public function store(Request $request)
    {
        $validated = request()->validate([
            'task' => [ 'required' , 'min:3' ]
        ]);
        Task::create($validated);
        return redirect(url('/task'));
    }
    public function edit(Task $task)
    {
        $this->data['view'] = 'edit_task';
        $this->data['task'] = $task;
        return view('layout' , $this->data );

    }
    public function update(Task $task)
    {
        if(request()->has('task'))
        {
            $validated = request()->validate([
                'task' => [ 'required' , 'min:3' ]
            ]);
            $task->update($validated);
        }
        elseif(request()->has('completed'))
        {
            $task->status = 1;
            $task->save();
        }

        return redirect(url('/task'));
    }
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect(url('/task'));
    }
}
