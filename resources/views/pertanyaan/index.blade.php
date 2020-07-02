@extends('adminlte.master')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Tanggal Dibuat</th>
        <th>Tanggal Diperbaharui</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($pertanyaan as $key => $pertanyaan)
      <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $pertanyaan->judul }}</td>
        <td>{{ $pertanyaan->isi }}</td>
        <td>{{ $pertanyaan->tanggal_dibuat }}</td>
        <td>{{ $pertanyaan->tanggal_diperbaharui }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
