@extends('layouts.app')

@section('content')
<div class="main-panel">
   
        <div class="content-wrapper">
                <a href="/all-products" class="btn btn-primary">All Products</a>
            <a href="/all-products?i=approved" class="btn btn-primary">Approved Products</a>
            <a href="/all-products?i=notapproved" class="btn btn-primary"> Non Approved Products</a>
            <a href="/all-products?i=deactivated" class="btn btn-primary"> Deactivated Products</a>
            <br> <br> <br> 
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">
                    @if(isset($_REQUEST['i']))
                    @if (!$_REQUEST['i'])
                        All Products
                    @elseif($_REQUEST['i']=='notapproved')
                        None Approved Products
                        @elseif($_REQUEST['i']=='approved')
                        Approved Products
                        @elseif($_REQUEST['i']=='deactivated')
                        Deactivated Products
                     
                    
                    @endif
                    @else
                    All Products
                    @endif
                    


                 </h4>
              <div class="row">
                <div class="col-12">
                  <div class="">
                    <table id="order-listing" class="table-responsive table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>SNO #</th>
                          <th>Date</th>
                          <th>Title</th>
                          <th>Amount</th>
                          <th>Condition</th>
                          <th>Category</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($adss as $ads)
                             
                          
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ date( 'd-m-Y',strtotime($ads->created_at)) }}</td>
                          <td class="text-wrap">{{ $ads->title }}</td>
                          <td>₦ {{ $ads->amount }}</td>
                          <td>{{ $ads->condition }}</td>
                          <td>{{ $ads->category }}</td>
                          <td>
                              @if ($ads->status==0)
                              <label class="badge badge-info">Pending</label> 
                              @endif
                              @if ($ads->status==1)
                              <label class="badge badge-success">Active</label> 
                              @endif
                              @if ($ads->status==2)
                              <label class="badge badge-primary">Sold out</label> 
                              @endif
                              
                              @if ($ads->status==3)
                              <label class="badge badge-danger">Deactivated</label> 
                              @endif
                          </td>
                          <td>
                                <form action="{{ route('ads.destroy',$ads->id)}}" method="post" id="create">
                                        @csrf
                                        @method('DELETE')   
                            <a href="/{{$ads->slug }}" class="btn btn-outline-primary"> View </a>
                            
                            <button id="createbtn" type="submit" class="btn btn-outline-danger "onclick="return confirm('Are you sure you want to delete this record ? Please note that this process cannot be reversed ')"><span class="mdi mdi-delete" ></span></button>
                            </form>

                            {{-- <form action="{{ route('ads.destroy',$ads->id)}}" method="post" id="create">
                                    @csrf
                                    @method('DELETE')   
                      
                        
                        <button id="createbtn" type="submit" class="btn btn-outline-danger "onclick="return confirm('Are you sure you want to delete this record ? Please note that this process cannot be reversed ')"><span class="mdi mdi-cancel" ></span></button>
                        </form> --}}
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
     


@endsection  
