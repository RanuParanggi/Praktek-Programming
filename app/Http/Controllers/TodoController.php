<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Carbon\Carbon;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::orderBy('created_at', 'desc')->get();
        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
    
        $todo = new Todo();
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->completed_at = null;
        $todo->save();
    
        return redirect()->route('todos.index')->with('success', 'ToDo berhasil dibuat.');
    }
    

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::findOrFail($id);
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->save();
    
        return redirect()->route('todos.index')->with('success', 'ToDo berhasil diperbarui.');
    }
    

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todos.index')->with('success', 'ToDo dihapus.');
    }

    public function toggle(Todo $todo)
    {
        $todo->completed_at = $todo->isCompleted() ? null : Carbon::now();
        $todo->save();
        return redirect()->back();
    }

    public function complete(Todo $todo)
{
    $todo->update(['completed_at' => now()]);
    return redirect()->route('todos.index')->with('success', 'ToDo selesai!');
}

}
