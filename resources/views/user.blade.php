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
                    You are logged in!
                    <h3>{{ auth()->user()->name }}</h3>
                    <hr>
                    <h4>{{ auth()->user()->email }}</h4>
                    <hr>
                    <h4>{{ auth()->user()->phone }}</h4>
                    <hr>
                    <h3>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                    @csrf
                                    <button type="submit" class="btn btn-secondary">Logout</button>
                                </form>
                                
                            </a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection
