<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
     public function create() {
        return view("components.admin.buatBarang");
    }

     public function insert() {
        return redirect()->to(route(''));
    }

     public function edit() {
        return view("components.admin.editBarang");
    }

     public function update() {
        return redirect()->to(route(''));
    }

    public function delete() {
        return redirect()->to(route(''));
    }

    
}
