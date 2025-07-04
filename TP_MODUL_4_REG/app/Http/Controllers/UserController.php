<?php

// HINT : Tambahkan method index, create, store, edit, update dan destroy pada UserController

namespace App\Http\Controllers;

// 1. Import model User
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // 2. tampilkan daftar semua pengguna dari tabel users menggunakan compact
    public function index() {
        // isi disini
        $users = User::all();
        return view('users.index', compact('users'));
    }

    // 3. tampilkan form untuk menambah pengguna baru
    public function create() {
        // isi disini
        return view('users.create');
    }

    // 4. simpan pengguna baru ke dalam tabel users
    public function store(Request $request) {
        $request->validate([
            // isi disini
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'required|string|max:20',
        ]);

        User::create($request->all());
        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    // 5. tampilkan form untuk mengedit pengguna yang sudah ada
    public function edit($id) {
        // isi disini
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    // 6. simpan perubahan pengguna ke dalam tabel users
    public function update(Request $request, $id) {
        $user = User::findOrFail($id);
        $request->validate([
            // isi disini
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'required|string|max:20',
        ]);

        $user->update($request->all());
        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    // 7. hapus pengguna dari tabel users
    public function destroy($id) {
        // isi disini
        User::destroy($id);
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
