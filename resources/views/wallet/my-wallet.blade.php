@extends('layouts.app')

@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">
                  User Wallet
              </h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                          <th>SNO #</th>
                          <th>Date</th>
                          <th>Type</th>
                          <th>Amount</th>
                          <th>Description</th>
                          {{-- <th>State</th>
                          <th>Status</th>
                          <th>Actions</th> --}}
                        </tr>
                      </thead>
                      <tbody>

                          @php
                              
                          $total=0;
                          @endphp
                          @foreach ($transactions as $transaction)
                             
                          @php
                            $total+=$transaction->amount;  
                          @endphp
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ date( 'd-m-Y',strtotime($transaction->created_at)) }}</td>
                          <td>{{ $transaction->type }}</td>
                          <td>₦ {{ number_format($transaction->amount) }}</td>
                          <td>{{ $transaction->description }}</td>
                          {{-- <td><img src="{{ asset($order['photo']) }}" alt="" srcset=""></td>
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
                          </td> --}}
                       
                        </tr>
                        @endforeach
                        Avialable Balance: ₦ {{ number_format($total) }}
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
     


@endsection  
