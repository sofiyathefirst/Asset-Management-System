<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
        return view('user.index')
        ->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $user = User::create([
            'name' => $request->addName,
            'email' => $request->addEmail,
            'password' => bcrypt('12345678'),
        ]);
        return redirect('/user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        // $user = User::where('name', $request->name)->first();
        // return view('user.show')
        // ->with('users', $user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return ['name' => $user->name, 'email' => $user->email];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user = User::find($request->editId);
        $user->update([
            'name' => $request->editName,
            'email' => $request->editEmail,
        ]);
        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $user = User::find($request->deleteId);
        $user->delete();
        return redirect('/user');
    }
}
