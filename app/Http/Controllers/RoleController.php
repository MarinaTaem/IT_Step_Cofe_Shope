<?php
// app/Http/Controllers/RoleController.php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    // List all roles (useful for populating dropdowns or API)
    public function index()
    {
        return Role::select('id', 'name')->get();
    }

    // Show create role form
    public function create()
    {
        return view('roles.create');
    }

    // Store new role
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:45|unique:roles',
        ]);

        Role::create($validated);

        return redirect()->route('roles.index')->with('success', 'Role created successfully.');
    }

    // Display a specific role
    public function show(Role $role)
    {
        return view('roles.show', compact('role'));
    }

    // Show edit form
    public function edit(Role $role)
    {
        return view('roles.edit', compact('role'));
    }

    // Update a role
    public function update(Request $request, Role $role)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:45|unique:roles,name,' . $role->id,
        ]);

        $role->update($validated);

        return redirect()->route('roles.index')->with('success', 'Role updated successfully.');
    }

    // Delete a role if not used by accounts
    public function destroy(Role $role)
    {
        if ($role->accounts()->count() > 0) {
            return redirect()->route('roles.index')->with('error', 'Cannot delete role with associated accounts.');
        }

        $role->delete();

        return redirect()->route('roles.index')->with('success', 'Role deleted successfully.');
    }
}
