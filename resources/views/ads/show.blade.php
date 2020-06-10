@extends('layouts.app')

@section('content')

<div class="main-panel">
<div class="content-wrapper">
<div class="page-header">
        {{-- <h5>Ads</h5> --}}
        <h1 class="mb-0">Update Ads</h1>
        </div>
<div class="col-12 grid-margin stretch-card">
<div class="card">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
<div class="card-body">
{{-- <h1 class="card-title">Create Ads</h1>
<p class="card-description">Basic form elements</p> --}}

        <form action="{{ route('ads.update',$ads->id) }}"  enctype="multipart/form-data" method="post" class="" id="create"  class="forms-sample" > 
                @csrf
                @method('PUT')
    <div class="form-group">
        
            <label for="exampleInputName1">Type</label>
            <select name="type" id="" class="form-control" required>
                
                <option  value="Goods" {{ $ads->type=='Goods'?'selected="selected"':'' }}>Goods</option>
                <option  value="Services" {{ $ads->type=='Services'?'selected="selected"':'' }}>Services</option>
            </select>
            </div>
<div class="form-group">
<label for="exampleInputName1">Title</label>
<input type="text" class="form-control" id="exampleInputName1" placeholder="Title" name="title" value="{{ $ads->title }}" />
</div>
<div class="form-group">
<label for="exampleInputEmail3">Amount (₦ )</label>
<input type="text" class="form-control" id="exampleInputEmail3" placeholder="Amount eg:1400" name="amount" value="{{ $ads->amount }}" />
</div>


<div class="form-group">
    <label for="exampleInputName1">Goods Condition</label>
    
    <select name="condition" id="" class="form-control" required>
        
        <option value="Brand New" {{ $ads->condition=='Brand New'?'selected="selected"':'' }} >Brand New</option>
        <option value="London Used" {{ $ads->condition =='London Used'?'selected="selected"':'' }} >London Used</option>
        <option value="Republished" {{ $ads->condition=='Republished'?'selected="selected"':'' }}>Republished</option>
        <option value="Used" {{ $ads->condition=='Used'?'selected="selected"':'' }}>Used</option>
    </select>
    </div>
    <div class="form-group">
        <label for="exampleInputName1">Category</label>
        <select name="category" id="" class="form-control" required>
            <option value="">Select</option>
            <option value="Phone" {{ $ads->category=='Phone'?'selected="selected"':'' }}>Phone</option>
            <option value="Services" {{ $ads->category=='Services'?'selected="selected"':'' }}>Services</option>
            <option value="Electronics" {{ $ads->category=='Electronics'?'selected="selected"':'' }}>Electronics</option>
        </select>
        </div>
<div class="form-group">
<label for="exampleInputCity1">City</label>
<input type="text" name="location" class="form-control" id="exampleInputCity1" placeholder="Location" value="{{ $ads->location }}" disabled />
</div>
<div class="form-group">
<label for="exampleTextarea1">Description</label>
<textarea
    class="form-control"
    id="exampleTextarea1"
    rows="4"
    name="description"
>{{ $ads->description }}</textarea>
</div>
<div class="form-group">
        <label for="exampleInputName1">Dimension <br> *Note: <small><a href="/demensions" class="text-danger"><b>Dimension should tally with that of the image you are uploading , to know more on dimensions click here</b></a></small></label>
        <select name="dimension" id="" class="form-control" required>
            <option value="">Select</option>
            <option value="75 X 75 " {{ $ads->dimension=='75 X 75'?'selected="selected"':'' }}>75 X 75 </option>
            <option value="150 X 140" {{ $ads->dimension=='150 X 140'?'selected="selected"':'' }}>150 X 140</option>
            <option value="190 X 150" {{ $ads->dimension=='190 X 150'?'selected="selected"':'' }}>190 X 150</option>
            <option value="212 X 200" {{ $ads->dimension=='212 X 200'?'selected="selected"':'' }}>212 X 200</option>
            <option value="320 X 300" {{ $ads->dimension=='320 X 300'?'selected="selected"':'' }}>320 X 300</option>
            <option value="330 X 360" {{ $ads->dimension=='330 X 360'?'selected="selected"':'' }}>330 X 360</option>
            <option value="416 X 420" {{ $ads->dimension=='416 X 420'?'selected="selected"':'' }}>416 X 420</option>
            <option value="564 X 520 " {{ $ads->dimension=='564 X 520'?'selected="selected"':'' }}>564 X 520 </option>
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
                <input type="file" class="dropify" value="{{ $ads->display_photo }}" name="display_photo" />
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
