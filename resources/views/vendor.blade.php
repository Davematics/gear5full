@extends('layouts.app')

@section('content')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="page-header">
              <h5>This is your dashboard</h5>
              <h1 class="mb-0">Hello {{ auth()->user()->name }}</h1>
            </div>
            <div class="row">
              <div class="col-sm-3 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body large-card">
                    <div class="d-xl-flex align-items-center mb-3">
                      <div class="icon-bg">
                        <i class="mdi mdi-cart-plus"></i>
                      </div>
                      <div>
                        <a href="/orders" class="text-dark">
                        <h4 class="mb-2 font-weight-light">Total Order</h4>
                        <h1 class="mb-0">{{ count($orders) }}</h1>
                      </a>
                      </div>
                    </div>
                    <div class="chart-wrapper">
                      <canvas id="paymentChart"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body large-card">
                        <div class="d-xl-flex align-items-center mb-3">
                          <div class="icon-bg">
                            <i class="mdi mdi-cart"></i>
                          </div>
                          <div>
                              <a href="/orders?i=pending" class="text-dark">
                            <h4 class="mb-2 font-weight-light">Pending Order</h4>
                            <h1 class="mb-0">{{ count($pendingOrders) }}</h1>
                              </a>
                          </div>
                        </div>
                        <div class="chart-wrapper">
                          <canvas id="paymentChart"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
              <div class="col-sm-3 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body large-card">
                    <div class="d-xl-flex align-items-center mb-3">
                      <div class="icon-bg">
                        <i class="mdi mdi-cart-outline"></i>
                      </div>
                      <div>
                        <a href="/orders?i=delivered" class="text-dark">
                        <h4 class="mb-2 font-weight-light">Delivered Order</h4>
                        <h1 class="mb-0 d-flex align-items-center"> {{ count($deliveredOrders) }}
                             {{-- <span class="font-weight-normal text-medium ml-2 text-secondary">+36% last month</span> --}}
                        </h1>
                        </a>
                      </div>
                    </div>
                    <div class="chart-wrapper">
                      <canvas id="revenueChart"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body large-card">
                    <div class="d-xl-flex align-items-center mb-3">
                      <div class="icon-bg">
                        <i class="mdi mdi-square-inc-cash"></i>
                      </div>
                      <div>
                        <a href="/ads" class="text-dark">
                        <h4 class="mb-2 font-weight-light">Total Products</h4>
                        <h1 class="mb-0 d-flex align-items-center">{{ count($ads) }}
                            {{-- <span class="font-weight-normal text-medium ml-2 text-secondary">+36% last month</span> --}}
                        </h1>
                        </a>
                      </div>
                    </div>
                    <div class="chart-wrapper">
                      <canvas id="orderChart"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-6 col-lg-12 grid-margin">
                <div class="row">
                  <div class="col-sm-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <p class="card-title mb-1">Performance</p>
                      
                          <div class=" grid-margin">
                            <p class="mb-4 text-medium text-muted"> Do you know the latest update of 2019 </p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div>
                                <h2> ₦145.97 <span class="text-small text-success ml-2">4.5%</span>
                                </h2>
                                <p class="text-medium text-secondary"> Total Revenue </p>
                              </div>
                              <div>
                                <h2> ₦145.97 <span class="text-small text-danger ml-2">1.4%</span>
                                </h2>
                                <p class="text-medium text-secondary"> Total withdraw </p>
                              </div>
                              <div class="">
                                    <h2> ₦145.97 <span class="text-small text-danger ml-2">1.4%</span>
                                    </h2>
                                    <p class="text-medium text-secondary"> Balance </p>
                                  </div>
                            </div>
                         
                         
                                
                          
                      
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="card">
                          <div class="card-body">
                            <p class="card-title mb-1">Performance</p>
                            <div class="row">
                              <div class="col-sm-7">
                                <h2 class="d-flex align-items-center mb-1"> 12,587 <span class="text-small text-danger ml-3">1.4%</span>
                                </h2>
                                <p class="text-muted">Balance in A/c</p>
                              </div>
                              <div class="col-sm-5">
                                <canvas id="performanceAreaChart"></canvas>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="card">
                          <div class="card-body">
                            <p class="card-title mb-1">Tasks Pending</p>
                            <div class="row">
                              <div class="col-sm-7">
                                <h2 class="d-flex align-items-center mb-1"> 12,587 <span class="text-small text-danger ml-3">1.4%</span>
                                </h2>
                                <p class="text-muted">Balance in A/c</p>
                              </div>
                              <div class="col-sm-5">
                                <canvas id="taskAreaChart"></canvas>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @endsection  