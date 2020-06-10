
@extends('layouts.app')

@section('content')

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="border-bottom text-center pb-4">
                          @if (auth()->user()->photo)
                          <img src="{{ asset(auth()->user()->photo) }}" alt="profile" class="img-lg rounded-circle mb-3" />  
                          @else
                          <img src="{{ asset('/userprofile.svg') }}" alt="profile" class="img-lg rounded-circle mb-3" onclick="$('#photo').trigger('click')" />  
                          @endif
                          <form method="post"  class="form-horizontal m-t-20" action="{{ route('updatephoto') }}" id="photogwsedced" enctype="multipart/form-data">  
                            @csrf
                            @method('PUT')         
                          <input type="file" style="display:none" id="photo" name="photo" onchange="this.form.submit()" >
                          </form>
                        <p> {{ auth()->user()->description }} </p>
                        
                      </div>
                     
                      <div class="py-4">
                            <p class="clearfix">
                                    <span class="float-left"> Fullname </span>
                                    <span class="float-right text-muted"> {{ auth()->user()->name }} </span>
                                  </p>
                        <p class="clearfix">
                          <span class="float-left"> Status </span>
                          <span class="float-right text-muted"> {{ auth()->user()->status==0?'Inactive': 'Active' }} </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left"> Phone </span>
                          <span class="float-right text-muted"> {{ auth()->user()->phone }}</span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left"> Mail </span>
                          <span class="float-right text-muted"> {{ auth()->user()->email }} </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left"> State </span>
                          <span class="float-right text-muted">
                           {{auth()->user()->state}}
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left"> Sex </span>
                          <span class="float-right text-muted">
                                {{auth()->user()->sex}}
                          </span>
                        </p>
                        <hr>
                        <p class="clearfix">
                                <span class="float-left"> Account name </span>
                                <span class="float-right text-muted">
                                      {{auth()->user()->name}}
                                </span>
                              </p>
                              <form method="post"  class="form-horizontal m-t-20" action="{{ route('updateaccount') }}" id="create" enctype="multipart/form-data"> 
                                @csrf
                                @method('PUT')  
                              <p class="clearfix">
                                    <span class="float-left"> Accoun Number </span>
                                    <span class="float-right text-muted">
                                        @if (auth()->user()->account_number)
                                        {{auth()->user()->account_number}}
                                        @else
                                        <input type="text" name="account_number" id="account_number"> 
                                        <span class="invalid-feedback" role="alert">
                                                <strong></strong>
                                            </span> 
                                        @endif
                                         
                                         
                                    </span>
                                  </p>
                                  <p class="clearfix">
                                        <span class="float-left"> Bank </span>
                                        <span class="float-right text-muted">
                                            @if (auth()->user()->bank)
                                            {{auth()->user()->bank}}   
                                            @else
                                            <input type="text" name="bank" id="bank">  
                                            <span class="invalid-feedback" role="alert">
                                                    <strong></strong>
                                                </span>
                                            @endif
                                             
                                            
                                        </span>
                                        
                                      </p>
                                      @if (auth()->user()->bank=='' || auth()->user()->account_number=='')
                                          
                                     
                                      <button type="submit" class="btn btn-primary" id="createbtn">Submit</button>
                                      @endif
                              </form>
                      </div>
                      {{-- <button class="btn btn-gradient-primary btn-block"> Preview </button> --}}
                    </div>
                    <div class="col-lg-8">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h3>{{ auth()->user()->name }}</h3>
                          <div class="d-flex align-items-center">
                                    
                            <h5 class="mb-0 mr-2 text-muted">Means of identification :</h5>
                            @if (auth()->user()->idcard_type)
                                {{ auth()->user()->idcard_type }}
                            @else
                            <form method="post"  class="form-horizontal m-t-20" action="{{ route('idcardtype') }}" id="photog" enctype="multipart/form-data"> 
                                @csrf
                                @method('PUT')  
                        <select id="profile-rating" class="form-control" name="idcard_type" onchange="this.form.submit()">
                            <option value="">Select</option>
                        <option value='National ID card'>National ID card</option>
                        <option value='Driving licence'>Driving licence</option>
                        <option value='Office ID card'>International passport</option>
                        <option value='Voters card'>Voters card</option>
                        <option value='Office ID card'>Office ID card</option>
                        <option value='Others'>Others</option>
                            </select>
                                </form>
                            @endif
                            
                          </div>
                        </div>
                        <div>
                          {{-- <button class="btn btn-outline-secondary btn-icon">
                            <i class="mdi mdi-comment-processing"></i>
                          </button>
                          <button class="btn btn-gradient-primary"> Request </button> --}}
                        </div>
                      </div>
                      {{-- <div class="mt-4 py-2 border-top border-bottom">
                        <ul class="nav profile-navbar">
                          <li class="nav-item">
                            <a class="nav-link" href="#">
                              <i class="mdi mdi-account-outline"></i> Info </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" href="#">
                              <i class="mdi mdi-newspaper"></i> Feed </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">
                              <i class="mdi mdi-calendar"></i> Agenda </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">
                              <i class="mdi mdi-attachment"></i> Resume </a>
                          </li>
                        </ul>
                      </div> --}}
                      <div class="profile-feed">
                        
                        <div class="d-flex align-items-start profile-feed-item">
                         
            <div class="ml-4">
            <h6> ID card front view
            </h6>
            @if (auth()->user()->idcard_front)
            <img src="{{ asset(auth()->user()->idcard_front) }}" alt="sample" class="rounded mw-100" height="200" />
            @else
            <img src="{{ asset('/idcardsample.svg') }}" alt="sample" class="rounded mw-100" height="200" onclick="$('#idcard_front').trigger('click')" />  
            <form method="post"  class="form-horizontal m-t-20" action="{{ route('idcardfront') }}" id="front" enctype="multipart/form-data">  
                @csrf
                @method('PUT')         
                <input type="file" style="display:none" id="idcard_front" name="idcard_front" onchange="this.form.submit()" >
                </form>
            @endif
            
            
            </div>
        </div>
        <div class="d-flex align-items-start profile-feed-item">
            
            <div class="ml-4">
            <h6>ID card Back View
            </h6>
            @if (auth()->user()->idcard_back)
            <img src="{{ asset(auth()->user()->idcard_back) }}" alt="sample" class="rounded mw-100" height="200" />
            @else
            <img src="{{ asset('/idcardsample.svg') }}" alt="sample" class="rounded mw-100" height="200" onclick="$('#idcard_back').trigger('click')" />
            <form method="post"  class="form-horizontal m-t-20" action="{{ route('idcardback') }}" id="back" enctype="multipart/form-data">  
            @csrf
            @method('PUT')         
            <input type="file" style="display:none" id="idcard_back" name="idcard_back" onchange="this.form.submit()" >
            </form>
            @endif
            
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
     








@endsection  