@extends('layouts.app')

@section('content')

<div class="main-panel">
<div class="content-wrapper">
<div class="page-header">
        {{-- <h5>Ads</h5> --}}
        <h1 class="mb-0">Add Product</h1>
        </div>
<div class="col-12 grid-margin stretch-card">
<div class="card">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
<div class="card-body">
{{-- <h1 class="card-title">Create Ads</h1>
<p class="card-description">Basic form elements</p> --}}

        <form action="{{ route('ads.store') }}"  enctype="multipart/form-data" method="post" class="" id="create"  class="forms-sample" > 
                @csrf
    <div class="form-group">
            <label for="exampleInputName1">Type</label>
            <select name="type" id="" class="form-control" required>
                <option value="">Select Ads type</option>
                <option value="Goods">Goods</option>
                <option value="Services">Services</option>
            </select>
            </div>
<div class="form-group">
<label for="exampleInputName1">Title</label>
<input type="text" class="form-control" id="exampleInputName1" placeholder="Title" name="title" />
</div>
<div class="form-group">
<label for="exampleInputEmail3">Amount (₦ )</label>
<input type="text" class="form-control" id="exampleInputEmail3" placeholder="Amount eg:1400" name="amount" />
</div>


<div class="form-group">
    <label for="exampleInputName1">Goods Condition</label>
    <select name="condition" id="" class="form-control" required>
        <option value="">Select</option>
        <option value="Brand New">Brand New</option>
        <option value="London Used">London Used</option>
        <option value="Republished">Republished</option>
        <option value="Used">Used</option>
    </select>
    </div>
   
    
    
   
     
     
     
    <div class="form-group">
            <label for="exampleInputName1">Brand</label>
            <select name="brand" id="" class="form-control" required>
                    <option value="">Select</option>
                    <option value=" Gucci "> Gucci </option>
                    <option value="Fendi ">Fendi </option>
                    <option value="David Wei ">David Wei</option>
                    <option value="Nike">Nike</option>
                    <option value=" Addidas"> Addidas</option>
                    <option value="  Zara ">  Zara </option>
                    <option value="Casio ">Casio </option>
                    <option value="David Wei ">Citizen</option>
                    <option value="Puma">Puma</option>
            </select>
            </div>
    <div class="form-group">
        <label for="exampleInputName1">Category</label>
        <select name="category" id="" class="form-control" required>
            <option value="">Select</option>
            @foreach ($categories as $category)
            <option value="{{ $category->category_name }}">
                {{ $category->category_name }}</option>  
            @endforeach
        
           
        </select>
        </div>
<div class="form-group">
<label for="exampleInputCity1">City</label>
<input type="text" name="location" class="form-control" id="exampleInputCity1" placeholder="Location" />
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

<div class="form-group">
        <label for="exampleTextarea1">Specification</label>
        <textarea
            class="form-control"
            id="exampleTextarea1"
            rows="4"
            name="specification"
        ></textarea>
        </div>
<div class="form-group">
        <label for="exampleInputName1">Dimension <br> *Note: <small><a href="/demensions" class="text-danger"><b>Dimension should tally with that of the image you are uploading , to know more on dimensions click here</b></a></small></label>
        <select name="dimension" id="" class="form-control" required>
            <option value="">Select</option>
            <option value="75 X 75 ">75 X 75 </option>
            <option value="150 X 140">150 X 140</option>
            <option value="190 X 150">190 X 150</option>
            <option value="212 X 200">212 X 200</option>
            <option value="320 X 300">320 X 300</option>
            <option value="330 X 360">330 X 360</option>
            <option value="416 X 420">416 X 420</option>
            <option value="564 X 520 ">564 X 520 </option>
        </select>
        </div>
<div class="row">
    {{-- <h4 class="text-center">Image Upload</h4> --}}

    <div class="col-lg-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title d-flex">  <small class="ml-auto align-self-end">
                    Feature Image
                    </small>
                </h4>
                <input type="file" class="dropify" name="display_photo" />
                </div>
            </div>
                            </div>
                            <div class="col-lg-3 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                    <h4 class="card-title d-flex">  <small class="ml-auto align-self-end">
                                        display image 
                                        </small>
                                    </h4>
                                    <input type="file" class="dropify" name="display_photo_2" />
                                    </div>
                                </div>
                                                </div>
                                                <div class="col-lg-3 grid-margin stretch-card">
                                                    <div class="card">
                                                        <div class="card-body">
                                                        <h4 class="card-title d-flex">  <small class="ml-auto align-self-end">
                                                                display image 
                                                            </small>
                                                        </h4>
                                                        <input type="file" class="dropify" name="display_photo_3"/>
                                                        </div>
                                                    </div>
                                                                    </div>
                                                                    <div class="col-lg-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title d-flex">  <small class="ml-auto align-self-end">
                        display image 
                    </small>
                </h4>
                <input type="file" class="dropify" name="display_photo_4" />
                </div>
            </div>
                            </div>
</div>
<button type="submit" id="createbtn" class="btn btn-gradient-primary btn-block mr-2 btn-primary"> Submit </button>
{{-- <button class="btn btn-light">Cancel</button> --}}
</form>
</div>
</div>
</div>
</div>

@endsection  
