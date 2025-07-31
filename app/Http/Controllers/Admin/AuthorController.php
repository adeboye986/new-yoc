<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = User::where('role', 'user')->get();
        return view('admin.author.index', compact('authors'));
    }

    public function create()
    {
        return view('admin.author.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required|string',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'author',
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.author.index')->with('success', 'User created!');
    }

    
        public function edit($id)
        {
            $author = User::findOrFail($id);
            return view('admin.author.edit', compact('author'));
        }

        public function update(Request $request, $id)
        {
            $author = User::findOrFail($id);

            $request->validate([
                'name'  => 'required|string|max:255',
                'email' => 'required|email|unique:users,email,'.$id,
                'password' => 'nullable|string|min:8|confirmed',
            ]);

            $author->name = $request->name;
            $author->email = $request->email;

            if ($request->filled('password')) {
                $author->password = Hash::make($request->password);
            }

            $author->save();

            return redirect()->route('admin.author.index')->with('success', 'User updated successfully.');
        }

    public function destroy($id)
    {
        $author = User::findOrFail($id);
        $author->delete();

        return redirect()->route('admin.author.index')->with('success', 'User deleted successfully.');
    }
}
