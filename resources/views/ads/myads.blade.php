@extends('layouts.app')

@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">My Products</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
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
                          <td>{{ $ads->title }}</td>
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
                            <a href="/ads/{{ base64_encode($ads->id) }}" class="btn btn-outline-primary"> View </a>
                            
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
