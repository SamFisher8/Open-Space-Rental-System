@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>Rent a Space</h4>
        </div>
        <div class="card-body p-4">
        <form action="{{route('store.post')}}" method="post">
            @csrf
            <label for="Name">Name</label>
            <input type="text" class="form-control mb-2" name="name" placeholder="Enter space name">

            <label for="address">Address</label>
            <input type="text" class="form-control mb-2" name="address" placeholder="Enter Address">

            <label for="price">Price (৳)</label>
            <input type="number" min="1" step="0.10" max="9999999" class="form-control mb-2" name="price" placeholder="Enter Rent Price">

            <label for="size">Size (Sqft)</label>
            <input type="text" min="1" max="999999" class="form-control mb-2" name="size" placeholder="Enter size">

            <label for="image">Upload Image</label>
            <input type="file" accept="image/x-png,image/gif,image/jpeg" class="form-control mb-2" name="image">
            <div class="card-footer">
                <button class="btn btn-lg btn-outline-success float-right" type="submit">Rent Space</button>
            </div>
           
        </form>
    </div>
    </div>
</div>
  @endsection