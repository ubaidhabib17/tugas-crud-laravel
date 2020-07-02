@extends('adminlte.master')

@section('content')
<div class="ml-3">
    <form action="/pertanyaan" method="POST">
        @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" placeholder="Enter Judul" name="judul">
        </div>
        <div class="form-group">
            <label for="isi">Isi</label>
            <input type="text" class="form-control" id="isi" placeholder="Enter Isi" name="isi">
        </div>
        <div class="form-group">
            <label for="tanggal_dibuat">Tanggal Dibuat</label>
            <input type="date" class="form-control" id="tanggal_dibuat" placeholder="Enter Tanggal Dibuat" name="tanggal_dibuat">
        </div>
        <div class="form-group">
            <label for="tanggal_diperbaharui">Tanggal Diperbaharui</label>
            <input type="date" class="form-control" id="tanggal_diperbaharui" placeholder="Enter Tanggal Diperbaharui" name="tanggal_diperbaharui">
        </div>

        <button type="submit" class="btn btn-primary">Post</button>
    </form>
</div>

@endsection
