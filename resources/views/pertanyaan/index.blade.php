@extends('adminlte.master')

@section('content')
    <div class="ml-3 mt-3">
        <a href="/pertanyaan/create" class="btn btn-primary" style="margin-bottom: 30px">Buat Pertanyaan</a>
        <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Tanggal Dibuat</th>
                <th>Tanggal Diperbaharui</th>
                <th>Actions</th>
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
                <td>
                    <a href="/pertanyaan/{{$pertanyaan->id}}" class="btn btn-sm btn-info"><i class="fa fa-info"></i></a>
                    <a href="/pertanyaan/{{$pertanyaan->id}}/edit" class="btn btn-sm btn-warning"><i class="fa fa-wrench"></i></a>
                    <form action="/pertanyaan/{{$pertanyaan->id}}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
                <td>

                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection
