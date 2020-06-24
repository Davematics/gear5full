@extends('layouts.app')

@section('content')

<div class="main-panel">
<div class="content-wrapper">
<div class="page-header">
        {{-- <h5>Ads</h5> --}}
        <h1 class="mb-0">   Order Details</h1>
        </div>
<div class="col-12 grid-margin stretch-card">
<div class="card">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
<div class="card-body">
{{-- <h1 class="card-title">Create Ads</h1>
<p class="card-description">Basic form elements</p> --}}

        <h2>{{ $order->goods }}</h2>
        <hr>
        <h3>₦{{ number_format($order->amount) }}</h3>
        <hr>
        <h3>Date: {{ date( 'd-m-Y',strtotime($order->created_at)) }}</h3>
        <hr>
        <h2><img src="{{ asset($order['photo']) }}" alt="" srcset="" height="200" width="200"></h2>
        <hr>
        @if (auth()->user()->role=='Admin')
        <h3>Buyers Name: {{ $order->buyer->name }}</h3>
        <hr>
        <h3>Buyers phone: {{ $order->buyer->phone }}</h3>
        <hr>
       
        <h3>Delivery Address: {{ $order->buyer->state }}</h3>
        <h2>Delivery status:  @if ($order->status==0)
                <label class="badge badge-info">Pending</label> 
                @endif
                @if ($order->status==1)
                <label class="badge badge-success">Delivered</label> 
                @endif
                @if ($order->status==2)
                <label class="badge badge-primary">Returned</label> 
                @endif
                
                @if ($order->status==3)
                <label class="badge badge-danger">Deactivated</label> 
                @endif</h2>
        <hr>
        <form action="{{ route('orders.update',$order->id) }}"  enctype="multipart/form-data" method="post" class="" id="order"  class="forms-sample" > 
                @csrf
                @method('PUT')
        <select name="status" id="" class="form-control" onchange="this.form.submit()">
            <option value="">Change Delivery Status</option>
            <option value="1">Delivered</option>
            <option value="2">Cancelled</option>
            <option value="3">Returned</option>
            <option value="0">Pending</option>
        </select>
        </form>
{{-- <button class="btn btn-light">Cancel</button> --}}
</form>
@endif
</div>
</div>
</div>
</div>

@endsection  
