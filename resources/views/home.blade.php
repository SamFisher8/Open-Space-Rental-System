@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (Auth::user()->user_Type=='0')
                    <a href="{{route('create.post')}}" type="button" class="btn btn-lg btn-outline-success btn-block">Create Post</a>
                @else
                <a href="{{route('browse.list')}}" type="button" class="btn btn-lg btn-outline-success btn-block">Browse List</a>
                    
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
