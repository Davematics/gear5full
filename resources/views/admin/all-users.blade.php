@extends('layouts.app')

@section('content')
<div class="main-panel">
        <div class="content-wrapper">
                <a href="/all-users" class="btn btn-primary">All users</a>
                <a href="/all-users?i=vendors" class="btn btn-info">Vendors</a>
               
                <a href="all-users?i=customers" class="btn btn-success"> All Customers</a>
                <a href="/all-users?i=NewVendors" class="btn btn-danger"> New Vendors</a>
                {{-- <a href="/all-orders?i=cancelled" class="btn btn-warning">  cancelled Order</a> --}}
                <br> <br> <br> 
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">
                  @if(isset($_REQUEST['i']))
                  @if (!$_REQUEST['i'])
                      All Users
                  @elseif($_REQUEST['i']=='vendors')
                      All Vendors
                      @elseif($_REQUEST['i']=='customers')
                      All Customers
                      @elseif($_REQUEST['i']=='NewVendors')
                      New Vendor Request
                   
                  @endif
                  @else
                 All Users
                  @endif
              </h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                          <th>SNO</th>
                          <th>Date</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>phone</th>
                          <th>State</th>
                          {{-- <th>Status</th> --}}
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($users as $user)
                             
                          
                        <tr>
                          <td>{{ $loop->iteration}}</td>
                          <td>{{ date( 'd-m-Y',strtotime($user->created_at)) }}</td>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                          <td> {{ $user->phone }}</td>
                          <td>{{ $user->state }}</td>
                          
                          {{-- <td>
                              @if ($user->status==0)
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
                              @endif
                          </td> --}}
                          <td>
                                <form action="{{ route('orders.destroy',$user->id)}}" method="post" id="create">
                                        @csrf
                                        @method('DELETE')   
                            <a href="/user/{{$user->id }}" class="btn btn-outline-primary"> View </a>
                            
                            <button id="createbtn" type="submit" class="btn btn-outline-danger "onclick="return confirm('Are you sure you want to delete this record ? Please note that this process cannot be reversed ')"><span class="mdi mdi-delete" ></span></button>
                            </form>
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
