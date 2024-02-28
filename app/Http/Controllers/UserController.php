<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\Kajur;
use App\Models\Sekjur;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;

class UserController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        $role = Role::all();
        return view('admin.addUser', ['title' => 'Tambah User', 'role' => $role]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'role_id' => 'required',
        ]);

        if($validator->fails())
        {
            return back()->withErrors($validator);
        }

        $validated = $validator->validate();

        User::create($validated);

        $latest = User::latest()->first();

        if($latest->role_id === 1) {
            Mahasiswa::create([
                'user_id' => $latest->id,
                'statusTA' => 'Belum mengajukan'
            ]);

            return back()->with([
                'success' => 'Mahasiswa berhasil ditambahkan'
            ]);
        } else if($latest->role_id === 2) {
            Dosen::create([
                'user_id' => $latest->id
            ]);

            return back()->with([
                'success' => 'Dosen berhasil ditambahkan'
            ]);
        } else  if($latest->role_id === 3) {
            Kajur::create([
                'user_id' => $latest->id
            ]);

            return back()->with([
                'success' => 'Kajur berhasil ditambahkan'
            ]);
        } else if($latest->role_id === 4) {
            Sekjur::create([
                'user_id' => $latest->id
            ]);

            return back()->with([
                'success' => 'Sekjur berhasil ditambahkan'
            ]);
        } else {
            Admin::create([
                'user_id' => $latest->id
            ]);

            return back()->with([
                'success' => 'Admin berhasil ditambahkan'
            ]);
        }
    }

    public function update(Request $request, User $user)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'email' => 'email',
            'avatar' => [
                'nullable',
                File::types(['jpg', 'jpeg', 'png'])
            ]
        ]);

        if($validator->fails())
        {
            return back()->withErrors($validator);
        }

        $validated = $validator->validate();

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }

    public function settings(User $user)
    {
        if(auth()->user()->role_id === 1)
        {
            return view('user.settings', ['title' => 'User Settings', 'extends' => 'layouts.main']);
        } else if(auth()->user()->role_id === 2) {
            return view('user.settings', ['title' => 'User Settings', 'extends' => 'layouts.dosen']);
        } else if(auth()->user()->role_id === 3) {
            return view('user.settings', ['title' => 'User Settings', 'extends' => 'layouts.kajur']);
        } else if(auth()->user()->role_id === 4) {
            return view('user.settings', ['title' => 'User Settings', 'extends' => 'layouts.sekjur']);
        } else if(auth()->user()->role_id === 5) {
            return view('user.settings', ['title' => 'User Settings', 'extends' => 'layouts.admin']);
        }
    }

    public function updateAvatar(Request $request, User $user)
    {
        $validator = Validator::make($request->all(), [
            'avatar' => [
                'nullable',
                File::types(['jpg', 'jpeg', 'png'])
            ]
        ]);

        if($validator->fails())
        {
            return back()->withErrors($validator);
        }

        $validated = $validator->validate();

        if($request->file('avatar'))
        {
            $validated['avatar'] = $request->file('avatar')->store('image');
        }

        User::where('id', $user->id)->update($validated);

        return back()->with([
            'success' => 'Avatar berhasil diubah'
        ]);
    }
}
