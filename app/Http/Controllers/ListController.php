<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\task;

class ListController extends Controller{

    //1. Index for showing
    //2. Store to save
    //3. Edit to call a form to edit
    //4. Update to save the changes 
    //5. Destroy to delete a task

    public function index(){
        $tasks = Task::all();
        return view('task', ['tasks'=> $tasks]);
    }

    public function store(Request $request){
        $request->validate([
            'name'=> 'required|min:5'
        ]);

        $task = new Task();
        $task->name = $request->name;
        $task->save();
        return redirect('list')->with('success','Task successfully created');
    }
 
    public function edit($id){
        $task = Task::find($id);
        return view('edit', ['task'=> $task]);
    }   

    public function update(Request $request, $id){
        $task = Task::find($id);
        $task->name = $request->name;
        $task->save();
        return redirect('list')->with('success','Task updated successfully');
    }

    public function destroy($id){
        $task = Task::find($id);
        $task->delete();
        return redirect('list')->with('success','Task deleted successfully');
    }   

}