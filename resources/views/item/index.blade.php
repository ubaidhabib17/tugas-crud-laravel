@extends('adminlte.master')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Description</th>
        <th>Stock</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($items as $key => $item)
      <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->description }}</td>
        <td>{{ $item->stock }}</td>
        <td>{{ $item->price }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
