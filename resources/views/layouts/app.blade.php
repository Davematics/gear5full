<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from www.bootstrapdash.com/demo/zensq/template/demo_1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 May 2020 05:57:56 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Gear 5 | Online </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.7.95/css/materialdesignicons.css.map">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.7.95/css/materialdesignicons.css">
  
    <link rel="stylesheet" href="{{asset('/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
	<link href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" />
    <link rel="stylesheet" href="{{asset('/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('/assets/vendors/dropify/dropify.min.css') }}" />
  <link rel="stylesheet" href="{{asset('/assets/vendors/jquery-file-upload/uploadfile.css') }}" />
    <link rel="stylesheet" href="{{asset('/assets/css/demo_1/style.css') }}" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('/logo3.png')}}" />
    <link rel="stylesheet" href="{{asset('/assets/vendors/jquery-toast-plugin/jquery.toast.min.css') }}" />
  </head>
  <body >
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                @if (auth()->user()->photo)
                <img src="{{ auth()->user()->photo }}" alt="profile" />  
                @else
                <img src="/userprofile.svg" alt="profile" />  
                @endif
                
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column pr-3">
                <span class="font-weight-medium mb-2">{{ auth()->user()->name }}</span>
                <span class="font-weight-normal text-secondary">{{ auth()->user()->email }}</span>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/home">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
              <i class="mdi mdi-apps menu-icon"></i>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="/ads/create">Add Products</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="/ads">My Products</a>
                      </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
              <i class="mdi mdi-cart menu-icon"></i>
              <span class="menu-title">Orders</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="sidebar-layouts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="/orders">All Orders</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/orders?i=pending">Pending Orders</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/orders?i=delivered">Delivered Orders</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/orders?i=cancelled">Cancelled Orders</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/orders?i=retured">Returned Orders</a>
                </li>
              </ul>
            </div>
          </li>
          @if (auth()->user()->role=='Admin')
              
         
          <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#admin" aria-expanded="false" aria-controls="sidebar-layouts">
                <i class="mdi mdi-key menu-icon"></i>
                <span class="menu-title">Admin</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="admin">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="/all-products">Products</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="/all-orders">Orders</a>
                        </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/all-users?i=vendors">Vendors</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/all-users">Users</a>
                  </li>
                 
                  <li class="nav-item">
                    <a class="nav-link" href="/payments">Payments</a>
                  </li>
                  
                </ul>
              </div>
            </li>
            @endif
          <li class="nav-item">
            <a class="nav-link" href="/wallet">
              <i class="mdi mdi-cash-multiple menu-icon"></i>
              <span class="menu-title">Wallet</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/profile">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">profile</span>
            </a>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link" data-toggle="modal" data-target="#exampleModal-2">
                <i class="mdi mdi-lock menu-icon"></i>
                <span class="menu-title">change password</span>
              </a>
            </li>
          {{--  --}}
          <li class="nav-item">
            <span class="nav-link" href="#">
              <span class="menu-title"></span>
            </span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
              <i class="mdi mdi-logout menu-icon"></i>
              <span class="menu-title">Logout</span>
            </a>
          </li>
          <li class="nav-item sidebar-actions">
            <div class="sidebar-action-btn-wrap">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input darkThemeBtn" /> Dark Mode </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input fullscreen-button" /> Fluid Container </label>
              </div>
            </div>
            <div class="nav-link">
              <ul class="pl-0">
                {{-- <li>
                  <a href="#" class="btn btn-danger mt-3">Purchase now</a>
                </li> --}}
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles light"></div>
            <div class="tiles dark"></div>
          </div>
        </div>
        <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
            <button class="navbar-toggler navbar-toggler align-items-center" type="button" data-toggle="minimize">
              <i class="mdi mdi-menu"></i>
            </button>
            <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
              <a class="navbar-brand brand-logo" href="/home"><img src="{{asset('/logo3.png')}}" alt="logo" /></a>
              <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('/logo3.png')}}" alt="logo" /></a>
            </div>
            <ul class="navbar-nav navbar-nav-right ml-lg-auto">
              <li class="nav-item nav-search border-0 mr-1 mr-md-3 mr-lg-5 d-none d-md-flex">
                <form class="nav-link form-inline mt-2 mt-md-0">
                  <div class="input-group">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search" />
                  </div>
                </form>
              </li>
              <li class="nav-item dropdown dropleft">
                <a class="nav-link" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell-outline"></i>
                </a>
                <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list dropdown-menu-right" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0 ">Notifications </h6>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../assets/images/faces/face4.jpg" alt="" class="profile-pic" />
                    </div>
                    <div class="preview-item-content">
                      <p class="mb-0"> Dany Miles <span class="text-small text-secondary">commented on your photo</span>
                      </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../assets/images/faces/face3.jpg" alt="" class="profile-pic" />
                    </div>
                    <div class="preview-item-content">
                      <p class="mb-0"> James <span class="text-small text-secondary">posted a photo on your wall</span>
                      </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../assets/images/faces/face2.jpg" alt="" class="profile-pic" />
                    </div>
                    <div class="preview-item-content">
                      <p class="mb-0"> Alex <span class="text-small text-secondary">just mentioned you in his post</span>
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 ">View all activities</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="messageDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-email-outline"></i>
                </a>
                <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0 ">Messages</h6>
                  <a class="dropdown-item preview-item">
                    <div class="preview-item-content flex-grow">
                      <span class="badge badge-pill badge-success">Request</span>
                      <p class="text-small text-secondary ellipsis mb-0"> Suport needed for user123 </p>
                    </div>
                    <p class="text-small text-secondary align-self-start"> 4:10 PM </p>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-item-content flex-grow">
                      <span class="badge badge-pill badge-warning">Invoices</span>
                      <p class="text-small text-secondary ellipsis mb-0"> Invoice for order is mailed </p>
                    </div>
                    <p class="text-small text-secondary align-self-start"> 4:10 PM </p>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-item-content flex-grow">
                      <span class="badge badge-pill badge-danger">Projects</span>
                      <p class="text-small text-secondary ellipsis mb-0"> New project will start tomorrow </p>
                    </div>
                    <p class="text-small text-secondary align-self-start"> 4:10 PM </p>
                  </a>
                  <h6 class="p-3 mb-0 ">See all activity</h6>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link">
                  <i class="mdi mdi-home-outline"></i>
                </a>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        
            @yield('content')
       
        <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                  <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="/" target="_blank" class="text-primary">Gear 5 Mart</a>. All rights reserved.</span>
                  <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a href="/terms-&-condition" class="text-primary">Terms & Condition </a> | <a href="/terms-&-condition" class="text-primary"> Privacy Policy </a>| <a href="/terms-&-condition" class="text-primary"> Disclimer</a><i class="mdi mdi-heart text-danger"></i></span>
                </div>
              </footer>
              <!-- partial -->
            </div>
            <!-- main-panel ends -->
          </div>
          <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
      
        <!-- Plugin js for this page -->
        <script src="{{asset('/assets/vendors/js/vendor.bundle.base.js') }}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{asset('/assets/vendors/jquery-bar-rating/jquery.barrating.min.js') }}"></script>
        <script src="{{asset('/assets/vendors/jquery-asColor/jquery-asColor.min.js') }}"></script>
        <script src="{{asset('/assets/vendors/jquery-asGradient/jquery-asGradient.min.js') }}"></script>
        <script src="{{asset('/assets/vendors/jquery-asColorPicker/jquery-asColorPicker.min.js') }}"></script>
        <script src="{{asset('/assets/vendors/x-editable/bootstrap-editable.min.js') }}"></script>
        <script src="{{asset('/assets/vendors/moment/moment.min.js') }}"></script>
        <script src="{{asset('/assets/vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.js') }}"></script>
        <script src="{{asset('/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{asset('/assets/vendors/dropify/dropify.min.js') }}"></script>
        <script src="{{asset('/assets/vendors/jquery-file-upload/jquery.uploadfile.min.js') }}"></script>
        <script src="{{asset('/assets/vendors/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
        <script src="{{asset('/assets/vendors/dropzone/dropzone.js') }}"></script>
        <script src="{{asset('/assets/vendors/jquery.repeater/jquery.repeater.min.js') }}"></script>
        <script src="{{asset('/assets/vendors/inputmask/jquery.inputmask.bundle.js') }}"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{asset('/assets/js/off-canvas.js') }}"></script>
        <script src="{{asset('/assets/js/hoverable-collapse.js') }}"></script>
        <script src="{{asset('/assets/js/misc.js') }}"></script>
        <script src="{{asset('/assets/js/settings.js') }}"></script>
        <script src="{{asset('/assets/js/todolist.js') }}"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="{{asset('/assets/js/formpickers.js') }}"></script>
        <script src="{{asset('/assets/js/form-addons.js') }}"></script>
        <script src="{{asset('/assets/js/x-editable.js') }}"></script>
        <script src="{{asset('/assets/js/dropify.js') }}"></script>
        <script src="{{asset('/assets/js/dropzone.js') }}"></script>
        <script src="{{asset('/assets/js/jquery-file-upload.js') }}"></script>
        <script src="{{asset('/assets/js/formpickers.js') }}"></script>
        <script src="{{asset('/assets/js/form-repeater.js') }}"></script>
        <script src="{{asset('/assets/js/inputmask.js') }}"></script>
        <script src="{{asset('/assets/vendors/jquery-toast-plugin/jquery.toast.min.js') }}"></script>
     <script src="{{asset('/assets/js/toastDemo.js') }}"></script>
     <script src="{{asset('/assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
     <script src="{{asset('/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
     <script src="{{asset('/assets/js/data-table.js') }}"></script>
      </body>
      <script>
          $(document).ready(function(){
         
           $('#create').on('submit', function(event){
            event.preventDefault();
            let actionUrl=$('#create').attr('action');
            $("#createbtn").attr("disabled",true);
                  $("#createbtn").html('Please wait ... ');
            $.ajax({
             url:actionUrl,
             method:"POST",
             data:new FormData(this),
             dataType:'JSON',
             contentType: false,
             cache: false,
             processData: false,
             success:function(data)
             {
               console.log(data);
              'use strict';
      resetToastPosition();
      $.toast({
        heading: 'Success!',
        text: '<b>'+data.message+'</b>',
        showHideTransition: 'slide',
        icon: 'success',
        loaderBg: '#fff',
        position: 'top-right'
      })
      
      location.reload();
             },
                    error: function (xhr, status, error) {
                      console.log(xhr.status);
                      if(xhr.status==200){
                        'use strict';
      resetToastPosition();
      $.toast({
        heading: 'Success!',
        text: '<b>Process successful</b>',
        showHideTransition: 'slide',
        icon: 'success',
        loaderBg: '#fff',
        position: 'top-right'
      })
      
      location.reload();
                      }else if (xhr.status !=200){

                      'use strict';
      resetToastPosition();
      $.toast({
        heading: 'Process Failed!',
        text: '<b>Please fill form correctly and try again</b>',
        showHideTransition: 'slide',
        icon: 'error',
        loaderBg: '#fff',
        position: 'top-right'
      })
    }
      $("#createbtn").html('Try Again');
                  $("#createbtn").attr("disabled",false);   
      $.each(xhr.responseJSON.errors, function(key,value) {
           $('#validation-errors').append('<div class="alert alert-danger">'+value+'</div');
      
                      $("#submit_discussion").html('Try Again');
                      $("#submit_discussion").attr("disabled",false);
                      var input='#create input[name='+key+']';
                  var textarea='#create textarea[name='+key+']';
                //console.log(input);
                $(input).addClass('form-control form-control-lg  is-invalid')
                  $(input + '+span>strong').text(value);
                  $(input).parent().parent().addClass('has-error');
                  $(textarea).addClass('form-control form-control-lg  is-invalid')
                  $(textarea + '+span>strong').text(value);
                  $(textarea).parent().parent().addClass('has-error');
          });
                     
                  }
            })
           });
          });
          </script>
      

      <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel-2">Change password </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                </div>
               
				<div class="container">
					<!-- Change Password Form -->
					
          <form method="post"  class="form-horizontal m-t-20" action="{{ route('changepassword') }}" id="create" enctype="multipart/form-data"> 
            @csrf
            @method('PUT') 
						<div class="form-row">
					
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label" style="background-color: transparent;">Confirm Current Password</label>
                                    <input name="current_password" type="password"  class="input-rect form-control  @error('current_password') is-invalid @enderror" value="">
                                   
                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>
                                
								</div>
							</div>
					
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating is-empty">
									<label class="control-label">Your New Password</label>
                                    <input name="password" type="password"  class="input-rect form-control  @error('password') is-invalid @enderror" value="">
                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>
								</div>
							</div>
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating is-empty">
									<label class="control-label">Confirm New Password</label>
									<input name="password_confirmation" type="password"  class="input-rect form-control  @error('password_confirmation') is-invalid @enderror" value="">
                  <span class="invalid-feedback" role="alert">
                      <strong></strong>
                  </span>
								</div>
							</div>
              </div>
              <div class="modal-footer">
                <button type="submit" id="createbtn" class="btn btn-primary"> Submit </button>
                <button type="button" class="btn btn-light" data-dismiss="modal"> Cancel </button>
              </div>
            </div>
          </div>
        </div>
    </html>