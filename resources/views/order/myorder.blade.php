@extends('layouts.app')

@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">
                  @if(isset($_REQUEST['i']))
                  @if (!$_REQUEST['i'])
                      All Order
                  @elseif($_REQUEST['i']=='pending')
                      Pending Order
                      @elseif($_REQUEST['i']=='delivered')
                      Delivered Order
                      @elseif($_REQUEST['i']=='retured')
                      returned Order
                    @elseif($_REQUEST['i']=='cancelled')
                    cancelled Order
                  @endif
                  @endif
              </h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                          <th>SNO #</th>
                          <th>Date</th>
                          <th>Goods</th>
                          <th>Price</th>
                          <th>photo</th>
                          <th>State</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($orders as $order)
                             
                          
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ date( 'd-m-Y',strtotime($order->created_at)) }}</td>
                          <td>{{ $order->goods }}</td>
                          <td>₦ {{ $order->amount }}</td>
                          <td><img src="{{ asset($order['photo']) }}" alt="" srcset=""></td>
                          <td>{{ 'enugu' }}</td>
                          <td>
                              @if ($order->status==0)
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
                          </td>
                          <td>
                                <form action="{{ route('orders.destroy',$order->order_id)}}" method="post" id="create">
                                        @csrf
                                        @method('DELETE')   
                            <a href="/orders/{{ base64_encode($order->id) }}" class="btn btn-outline-primary"> View </a>
                            
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
