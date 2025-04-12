<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class FormPengguna extends Component
{
    public $name, $email, $password, $role = "user";
    public $showForm = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
        'role' => 'required|in:admin,user',
    ];

    public function simpan()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => $this->role,
        ]);

        session()->flash('message', 'User berhasil ditambahkan.');

        $this->reset(['name', 'email', 'password']);

        $this->dispatch('userUpdated'); // optional trigger event to refresh table
    }

    public function render()
    {
        return view('livewire.form-pengguna');
    }

    public function toggleForm()
{
    $this->showForm = !$this->showForm;
}
}

