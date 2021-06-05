<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buat;

class CreateController extends Controller
{
    public function create(Request $request) {
        $validation = $request->validate([
            'nama'=>'required',
            'alamat'=>'required',
            'nohp'=>'required',
        ]);
        buat::create($validation);
        return redirect('home');
    }

    public function edit($id){
    $ids = buat::where('id', $id)->get();
    return view('ubah', compact('ids'));
    }

    public function update(Request $request) {

        $validation = $request->validate([
            'id'=>'nullable',
            'nama'=>'required',
            'alamat'=>'required',
            'nohp'=>'required',
        ]);
        buat::find($request -> id)->update($validation);
        return redirect('home');
    }

    public function delete(Request $request) {
        buat::find($request -> id)->delete();
        return redirect('home');
    }

    public function liatt() {
        return view('liat');
    }

    public function liat_edit() {
        $a = $_GET['cari'];
        $s = buat::where('nama', 'LIKE', '%'.$a.'%')->get();
        return view('liat_edit', compact("s"));
    }


}
