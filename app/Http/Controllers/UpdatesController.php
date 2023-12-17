<?php

namespace App\Http\Controllers;

use App\Models\Updates as Update;
use Illuminate\Http\Request;

class UpdatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $updates = Update::all();
        return view('admin.updates.index',compact('updates'));
    }
    public function create()
    {
        return view('admin.updates.create');
    }

    public function store()
    {
        $data = $this->validate(request(), [
            
            'title' => 'required',
            'details' => 'required',
            'cover' => 'required|image',
            'summary' => 'required|max:200'
        ]);
        if (request()->hasFile('cover')) {
            $extension = request()->file('cover')->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            request()->file('cover')->storeAs('public/updates', $filename);
        }
        Update::create([
            'title' => $data['title'],
            'details' => $data['details'],
            'summary' => $data['summary'],
            'cover' => $filename,
        ]);
        return $this->index();
    }

    public function show(Update $update)
    {
        
    }

    public function edit($id)
    {
        $update = Update::findOrFail($id);
        return view('admin.updates.edit',compact('update'));
    }

 
    public function update($id)
    {
        $data = $this->validate(request(), [
            
            'title' => 'required',
            'details' => 'required',
            'summary' => 'required|max:200'
        ]);
        if (request()->hasFile('cover')) {
            $extension = request()->file('cover')->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            request()->file('cover')->storeAs('public/updates', $filename);
        }
        else{
            $filename = (Update::where('id',$id)->first())->cover;
        }
        Update::where('id',$id)->update([
            'title' => $data['title'],
            'details' => $data['details'],
            'summary' => $data['summary'],
            'cover' => $filename,
        ]);
        return redirect(route('updates.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Update  $update
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Update::destroy($id);
        return redirect(route('updates.index'));
    }
}
