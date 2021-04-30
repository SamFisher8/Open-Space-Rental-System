@extends('layouts.app')
@section('content')
<div class="container">
    @foreach ($space as $item )
    <div class="card p-4">
        <h4>
            {{$item->name}}
        </h4>
        <p>
            {{$item->address}}
        </p>
    </div>
        
    @endforeach
</div>
  @endsection