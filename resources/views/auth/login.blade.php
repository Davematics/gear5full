<!DOCTYPE html>
<html lang="en">
  

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.7.95/css/materialdesignicons.css.map">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.7.95/css/materialdesignicons.css">
     <!-- Plugin css for this page -->
	<link href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/assets/vendors/jquery-toast-plugin/jquery.toast.min.css') }}" />
    <link href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Gear 5 || User Login </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{asset('/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('/assets/css/demo_1/style.css') }}" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('/logo3.png')}}" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo text-center">
                    <a href="/">
                      <img src="{{asset('/logo3.png')}}" />
                    </a>
                </div>
                <h4><small><b>Hello! Welcome Back </b></small></h4>
                <h6 class="font-weight-light">Sign in to continue.</h6>
               
                        <form method="POST" action="{{ route('login') }}"  class="pt-3" id="create">
                                @csrf
        
                  <div class="form-group">
                    <input type="email"  id="exampleInputEmail1" class="form-control form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" />
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>
                  </div>
                  <div class="form-group">
                    <input type="password" id="exampleInputPassword1" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" />
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <div class="mt-3">
                      <button id="createbtn" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn btn-primary" type="submit">SIGN IN</button>
                    {{-- <a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">SIGN IN</a> --}}
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input" /> Keep me signed in </label>
                    </div>
                    <a href="#" class="auth-link text-black">Forgot password?</a>
                  </div>
                  <div class="mb-2">
                    {{-- <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                      <i class="mdi mdi-facebook mr-2"></i>Connect using facebook </button> --}}
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="/register" class="text-primary">Create</a>
                  </div>
                </form>
             
                        
                      
              </div>
              <br>
              <p class="text-center">&copy; {{ date('Y') }} Gear 5 Mart Allright Reserved</p>
            </div>
           
            
          </div>
        </div>
        
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('/assets/vendors/jquery-toast-plugin/jquery.toast.min.js') }}"></script>
    <script src="{{asset('/assets/js/toastDemo.js') }}"></script>
    <script src="{{asset('/assets/js/off-canvas.js') }}"></script>
    <script src="{{asset('/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{asset('/assets/js/misc.js') }}"></script>
    <script src="{{asset('/assets/js/settings.js') }}"></script>
    <script src="{{asset('/assets/js/todolist.js') }}"></script>
    <!-- endinject -->
  </body>
  <script>
     
        $(function () {
           $('#create').submit(function (e) {
               e.preventDefault()  // prevent the form from 'submitting'
               $("#createbtn").attr("disabled",true);
               $("#createbtn").html('Authenticating...  <i class="fa fa-spinner fa-pulse"></i>');
               
               var url = e.target.action  // get the target
               var formData = $(this).serialize() // get form data
               $.post(url, formData, function (response) { // send; response.data will be what is returned
                   'use strict';
       resetToastPosition();
       $.toast({
         heading: 'Success!',
         text: '<b>Login Successful</b>',
         showHideTransition: 'slide',
         icon: 'success',
         loaderBg: '#fff',
         position: 'top-right'
       })
       location.reload();
                   
               })
               .fail(function(xhr, status, error) {
                   // Swal.fire({
                   //               icon: 'error',
                   //               title: 'Ops! Sorry',
                   //               text: 'Client registration failed please fill the form correctly and try again'
                                 
                   //             })
                   'use strict';
       resetToastPosition();
       $.toast({
         heading: 'Authentication Failed!',
         text: '<b>Invalid email or password</b>',
         showHideTransition: 'slide',
         icon: 'error',
         loaderBg: '#fff',
         position: 'top-right'
       })
       $("#createbtn").html('Try Again');
                   $("#createbtn").attr("disabled",false);                     
      $.each(xhr.responseJSON.errors, function(key,value) {
       //  $('#validation-errors').append('<div class="alert alert-danger">'+value+'</div');
   
                  
                   var input='#create input[name='+key+']';
                   var textarea='#create textarea[name='+key+']';
                 //console.log(input);
                 $(input).addClass('form-control form-control-lg  is-invalid')
                   $(input + '+span>strong').text(value);
                   $(input).parent().parent().addClass('has-error');
                //    $(textarea).addClass('form-control form-control-lg  is-invalid')
                //    $(textarea + '+span>strong').text(value);
                //    $(textarea).parent().parent().addClass('has-error');
       }); }); 
           })
       })
       </script>
       
    

</html>