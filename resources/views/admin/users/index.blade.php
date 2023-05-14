@extends('layouts.app')

@section('content')
<div class="container"  style="margin-top:100px;margin-bottom:100px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User') }}</div>

                <div class="card-body">
                   @foreach($users as $user)
                         {{ $user->name }} - {{ $user->email }}
                         
                   @endforeach

                   @can("manage-users")
                         Admin
                   @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
