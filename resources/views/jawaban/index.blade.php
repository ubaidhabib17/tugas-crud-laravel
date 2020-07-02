@extends('adminlte.master')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Isi</th>
        <th>Tanggal Dibuat</th>
        <th>Tanggal Diperbaharui</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($jawaban as $key => $jawaban)
      <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $jawaban->isi }}</td>
        <td>{{ $jawaban->tanggal_dibuat }}</td>
        <td>{{ $jawaban->tanggal_diperbaharui }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
