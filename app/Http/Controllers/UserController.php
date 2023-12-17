<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        // dd(request());
        if (request()->hasFile('avatar')) {
            $extension = request()->file('avatar')->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            request()->file('avatar')->storeAs('public/profile', $filename);
        }
        else{
            $filename = (User::findorFail($id))->avatar;
        }
        User::where('id', $id)->update([
            'name' => request()->name,
            'email' => request()->email,
            'contact' => request()->contact,
            'facebook' => request()->facebook,
            'linkedin' => request()->linkedin,
            'avatar'=>$filename,
            'twitter' => request()->twitter,
            'instagram' => request()->instagram
        ]);
        return redirect()->back()->with('message', 'Profile updated successiful.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
    public function updatePass($id)
    {
        $p = request()->password;
        $np = request()->newpassword;
        $cp = request()->renewpassword;
        $user = User::find($id);
        if (Hash::check($p, $user->password)) {
            if ($cp == $np) {
                if (Hash::check($np, $user->password)) {
                    return redirect()->back()->with('error', 'New passwords can not be the same as old password.');
                } else {
                    // return $user;
                    User::where('id', $id)->update([
                        'password' => Hash::make($np)
                    ]);

                    Mail::send('pass', ['user' => $user], function ($message) {
                        $message->to(Auth()->user()->email, Auth()->user()->name)->subject('Password Reset Alert');
                    });
                    
                    return redirect()->back()->with('message', 'Password changed successiful.');
                }
            } else {
                return redirect()->back()->with('error', 'New passwords does not match');
            }
        } else {
            return redirect()->back()->with('error', 'Old password do not match');
        }
    }
}
