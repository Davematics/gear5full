@extends('layouts.master')

@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
  <form method="post"  class="form-horizontal m-t-20" action="{{ route('idcardback') }}" id="back" enctype="multipart/form-data">  
            @csrf
                    You are logged in!
                    <h3>{{ auth()->user()->name }}</h3>
                    <hr>
                    <h4>{{ auth()->user()->email }}</h4>
                    <hr>
                    <h4>{{ auth()->user()->phone }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection
