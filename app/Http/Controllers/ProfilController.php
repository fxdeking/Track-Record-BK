<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;
use App\Models\User;

class ProfilController extends Controller
{
    public function profil() {
        return view ('profil.index');
    }

    public function updatenama(Request $request, $id) {
        $this->validate($request,[
            'nama'=>'required|min:3|max:35'
        ], ['nama.required'=>'Isi nama terlebih dahulu',
            'nama.min'=>'Minimal 3 karakter',
            'nama.max'=>'Maksimal 35 karakter']);

            User::find($id)->update([
                'name'=>$request->get('nama')
            ]);
    
            return redirect()->route('profil')->with('message', 'Nama Berhasil Diubah');
    }

    public function updateemail(Request $request, $id) {
        $this->validate($request,[
            'email'=>'required|min:3|max:50'
        ], ['email.required'=>'Isi email terlebih dahulu',
            'email.min'=>'Minimal 3 karakter',
            'email.max'=>'Maksimal 50 karakter']);

            User::find($id)->update([
                'email'=>$request->get('email')
            ]);
    
            return redirect()->route('profil')->with('message', 'Email Berhasil Diubah');
    }

    public function updatetelepon(Request $request, $id) {
        $this->validate($request,[
            'telepon'=>'required|min:3|max:20'
        ], ['telepon.required'=>'Isi telepon terlebih dahulu',
            'telepon.min'=>'Minimal 3 karakter',
            'telepon.max'=>'Maksimal 20 karakter']);

            User::find($id)->update([
                'telepon'=>$request->get('telepon')
            ]);
    
            return redirect()->route('profil')->with('message', 'Telepon Berhasil Diubah');
    }

    public function updatefoto(Request $request, $id) {
        $this->validate($request,[
            'foto'=>'mimes:png,jpeg,jpg'
        ]);

        $user = User::find($id);
        $name = $user->foto;
        if($request->hasFile('foto')){
            $foto = $request->file('foto');
            $name = time().'.'.$foto->getClientOriginalExtension();
            $destinationPath = public_path('/foto');
            $foto->move($destinationPath, $name);
        }

        $user->foto = $name;
        $user->save();
    
        return redirect()->route('profil')->with('message', 'Foto Profil Berhasil Diubah');
    }

    public function updatepassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ], ['new_confirm_password.same'=>'Kata sandi konfirmasi harus persis dengan kata sandi baru']);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
        return redirect()->route('profil')->with('message', 'Password Berhasil Diubah');
    }
}
