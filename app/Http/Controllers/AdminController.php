<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index() {
        $admins = User::all();
        return view ('admins.index', compact('admins'));
    }

    public function delete($id) {
        $admins = User::find($id);
        $admins->delete();
        return redirect()->route('adm')->with('message', 'Admin Berhasil Dihapus');
    }
}
