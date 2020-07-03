@extends('adminlte.master')

@section('content')
    <div class="ml-3 mt-3">
        <table class="table">
            <h3>Detail</h3><br>
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Tanggal Dibuat</th>
                    <th>Tanggal Diperbaharui</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$pertanyaan->judul}}</td>
                    <td>{{$pertanyaan->isi}}</td>
                    <td>{{$pertanyaan->tanggal_dibuat}}</td>
                    <td>{{$pertanyaan->tanggal_diperbaharui}}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
