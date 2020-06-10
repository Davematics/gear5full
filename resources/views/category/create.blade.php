@extends('layouts.app')

@section('content')

<div class="main-panel">
<div class="content-wrapper">
<div class="page-header">
        {{-- <h5>Ads</h5> --}}
        <h1 class="mb-0">Create Category</h1>
        </div>
<div class="col-12 grid-margin stretch-card">
<div class="card">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
<div class="card-body">
{{-- <h1 class="card-title">Create Ads</h1>
<p class="card-description">Basic form elements</p> --}}

        <form action="{{ route('categories.store') }}"  enctype="multipart/form-data" method="post" class="" id="create3"  class="forms-sample" > 
                @csrf
               
<div class="form-group">
<label for="exampleInputName1">Category Name</label>
<input type="text" class="form-control" id="exampleInputName1" placeholder="category name" name="category_name" />
</div>

<div class="form-group">
        <label for="exampleInputName1">Parent Category</label>
        <input type="text" class="form-control" id="exampleInputName1" placeholder="Parent Category" name="parent_category " />
        </div>

<div class="form-group">
    <label for="exampleInputName1">Type </label>
    <select name="type" id="" class="form-control" required>
        <option value="">Select</option>
        <option value="Goods">Goods</option>
        <option value="Services">Services</option>
        
    </select>
    </div>
    

<div class="form-group">
<label for="exampleTextarea1">Description</label>
<textarea
    class="form-control"
    id="exampleTextarea1"
    rows="4"
    name="description"
></textarea>
</div>


<button type="submit" id="createbtn" class="btn btn-gradient-primary btn-block mr-2 btn-primary"> Submit </button>
{{-- <button class="btn btn-light">Cancel</button> --}}
</form>
</div>
</div>
</div>
</div>

@endsection  
