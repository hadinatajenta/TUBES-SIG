<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin/setting', compact('user'));
    }
   
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'bio' => 'required',
            'birth_date' => 'required',
            'email'=>'required'
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->bio = $request->bio;
        $user->birth_date = $request->birth_date;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('setting', ['id' => $id])->with('success', 'Profile updated!');

    }

}
