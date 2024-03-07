<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    // Listar todos los usuarios
    public function index()
    {
        $usuarios = User::all();
        return view('usuarios.index', compact('usuarios'));
    }

    // Mostrar formulario para crear un nuevo usuario
    public function create()
    {
        return view('usuarios.create');
    }

    // Almacenar un nuevo usuario en la base de datos
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado exitosamente.');
    }

    // Mostrar un usuario específico
    public function show(User $user)
    {
        return view('usuarios.show', compact('user'));
    }

    // Mostrar formulario para editar un usuario
    public function edit(User $user)
    {
        return view('usuarios.edit', compact('user'));
    }

    // Actualizar un usuario específico
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
        ]);

        if (!empty($validatedData['password'])) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        } else {
            unset($validatedData['password']);
        }

        $user->update($validatedData);

        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado exitosamente.');
    }

    // Eliminar un usuario
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado exitosamente.');
    }
}
