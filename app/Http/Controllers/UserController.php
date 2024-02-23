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

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role = Role::all();
        return view('admin.addUser', ['title' => 'Tambah User', 'role' => $role]);
    }

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
