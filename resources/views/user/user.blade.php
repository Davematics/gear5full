@extends('layouts.master')

@section('content')
<br><br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                    {{-- @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif --}}

                    <form method="post"  class="form-horizontal m-t-20" action="{{ route('UpdatePersonaLDetails') }}" id="back" enctype="multipart/form-data">  
                        @csrf
                        @method('PUT')     
                    <input type="text" name="name" class="form-control" value="{{ auth()->user()->name }}">
                    <hr>
                    <input type="email" name="email" class="form-control" id="" value="{{ auth()->user()->email }}" disabled>
                    <hr>
                    <input type="text" name="phone" class="form-control" value="{{ auth()->user()->phone }}">
                    <hr>
                    
                        <textarea name="address" class="form-control" id="" >{{ auth()->user()->address }}</textarea>
                
                    <hr>
                    <select name="state" id="" class="form-control">
                        <option value="">select state</option>
                        <option value="abia">abia</option>
                    </select>
                    <hr>
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                </div>
            </div>
            </div>

    </div>
        </div>
    </div>
</div>
</form>
<br><br>
@endsection
