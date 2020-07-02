@extends('adminlte.master')

@section('content')
<div class="ml-3">
    <form action="/items" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" placeholder="Enter Description" name="description">
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" class="form-control" id="stock" placeholder="Enter Stock" name="stock">
        </div>
        <div class="form-group">
            <label for="description">Price</label>
            <input type="number" class="form-control" id="price" placeholder="Enter Price" name="price">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
