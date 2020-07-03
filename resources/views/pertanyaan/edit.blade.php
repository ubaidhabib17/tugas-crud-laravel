@extends('adminlte.master')

@section('content')
<div class="ml-3">
    <h3>Update Pertanyaan</h3>
    <form action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" placeholder="Enter Judul" name="judul" value="{{$pertanyaan->judul}}">
        </div>
        <div class="form-group">
            <label for="isi">Isi</label>
            <input type="text" class="form-control" id="isi" placeholder="Enter Isi" name="isi" value="{{$pertanyaan->isi}}">
        </div>
        <div class="form-group">
            <label for="tanggal_dibuat">Tanggal Dibuat</label>
            <input type="date" class="form-control" id="tanggal_dibuat" placeholder="Enter Tanggal Dibuat" name="tanggal_dibuat" value="{{$pertanyaan->tanggal_dibuat}}">
        </div>
        <div class="form-group">
            <label for="tanggal_diperbaharui">Tanggal Diperbaharui</label>
            <input type="date" class="form-control" id="tanggal_diperbaharui" placeholder="Enter Tanggal Diperbaharui" name="tanggal_diperbaharui" value="{{$pertanyaan->tanggal_diperbaharui}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

@endsection
