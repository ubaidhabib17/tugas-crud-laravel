<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pertanyaanModel;

class pertanyaanController extends Controller
{
    public function index(){
        $pertanyaan = pertanyaanModel::get_all();
        // dd($items);
        return view ('pertanyaan.index', compact('pertanyaan'));
    }

    public function create(){
        return view ('pertanyaan.form');
    }

    public function store(Request $request){
        $data = $request->all();
        unset($data["_token"]);
        $pertanyaan = pertanyaanModel::save($data);
        // dd($item);
        if($pertanyaan){
            return
            redirect('/pertanyaan');
        }

    }

    public function show($id){
        $pertanyaan = pertanyaanModel::find_by_id($id);

        return view('pertanyaan.show', compact('pertanyaan'));
    }

    public function edit($id){
        $pertanyaan = pertanyaanModel::find_by_id($id);

        return view('pertanyaan.edit', compact('pertanyaan'));
    }

    public function update($id, Request $request){
        $pertanyaan = pertanyaanModel::update($id, $request->all());

        return redirect('/pertanyaan');
    }

    public function destroy($id){
        $pertanyaan = pertanyaanModel::destroy($id);

        return redirect('/pertanyaan');
    }
}
