<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jawabanModel;

class jawabanController extends Controller
{
    public function index(){
        $jawaban = jawabanModel::get_all();
        // dd($items);
        return view ('jawaban.index', compact('jawaban'));
    }

    public function create(){
        return view ('jawaban.form');
    }

    public function store(Request $request){
        $data = $request->all();
        unset($data["_token"]);
        $jawaban = jawabanModel::save($data);
        // dd($item);
        if($jawaban){
            return
            redirect('/jawaban');
        }
}
}
