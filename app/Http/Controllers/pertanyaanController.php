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
            return view ('pertanyaan/index');
        }else{
            return view ('pertanyaan/form');
        }

    }
}
