<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $items = Testimonial::all();
        return view('admin.testimonials.index',compact('items'));
    }
    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store()
    {
        $data = $this->validate(request(), [
            'name' => 'required',
            'email'=>'required',
            'contact'=>'required',
            'company' => 'required',
            'position'=>'required',
            'avatar' => 'required|image',
            'statement' => 'required|max:400',
        ]);
        if (request()->hasFile('avatar')) {
            $extension = request()->file('avatar')->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            request()->file('avatar')->storeAs('public/testimonial', $filename);
        }
        Testimonial::create([
            'name' => $data['name'],
            'phone' => $data['contact'],
            'email' => $data['email'],
            'company' => $data['company'],
            'position' => $data['position'],
            'statement'=>$data['statement'],
            'path' => $filename,
        ]);
        return redirect()->route('testimonials.index')->with('message','Tesimonial successifully created');
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $item = Testimonial::findOrFail($id);
        return view('admin.testimonials.edit',compact('item'));
    }

 
    public function update($id)
    {
        $data = $this->validate(request(), [
            'name' => 'required',
            'email'=>'required',
            'contact'=>'required',
            'company' => 'required',
            'position'=>'required',
            'avatar' => 'required|image',
            'statement' => 'required|max:200',
        ]);
        if (request()->hasFile('cover')) {
            $extension = request()->file('cover')->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            request()->file('cover')->storeAs('public/testimonial', $filename);
        }
        else{
            $filename = (Testimonial::where('id',$id)->first())->cover;
        }
        Testimonial::where('id',$id)->update([
            'name' => $data['name'],
            'phone' => $data['contact'],
            'email' => $data['email'],
            'company' => $data['company'],
            'position' => $data['position'],
            'statement'=>$data['statement'],
            'path' => $filename,
        ]);
        return redirect(route('testimonials.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Update  $update
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Testimonial::destroy($id);
        return redirect(route('testimonials.index'));
    }
}
    

