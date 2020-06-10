
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from www.bootstrapdash.com/demo/zensq/template/demo_1/pages/samples/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 May 2020 06:03:30 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.7.95/css/materialdesignicons.css.map">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.7.95/css/materialdesignicons.css">
     <!-- Plugin css for this page -->
	<link href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Gear 5 || Register </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{asset('/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{asset('/assets/css/demo_1/style.css') }}" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('/logo3.png')}}" />
    <link rel="stylesheet" href="{{asset('/assets/vendors/jquery-toast-plugin/jquery.toast.min.css') }}" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5" >
                <div class="brand-logo text-center">
                    <a href="/">
                      <img src="{{asset('/logo3.png')}}" />
                    </a>
                </div>
                <h4>Hello! Welcome</h4>
                <h6 class="font-weight-light"> Signing up is easy. It takes less than a minute </h6>
              
                        <form method="POST" action="{{ route('register') }}"  class="pt-3" id="create">
                                @csrf
                                <div class="form-group">
                                        <input type="text"  id="exampleInputUsername1"  class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" placeholder="Full Name" />
                                        <span class="invalid-feedback" role="alert">
                                                <strong></strong>
                                            </span>
                                      </div>
                  <div class="form-group">
                    <input type="text"  id="phone"  class="form-control form-control-lg @error('name') is-invalid @enderror"  value="{{ old('phone') }}"  autocomplete="phone" placeholder="Phone Number" name="phone" />
                    <span class="invalid-feedback" role="alert">
                            <strong></strong>
                        </span>
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-lg" id="email"  placeholder="Email" />
                    <span class="invalid-feedback" role="alert">
                            <strong></strong>
                        </span>
                  </div>
                  <div class="form-group">
                    <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="state" required>
                    
                      <option value="">State of Resident</option>
                      <option>Abia State</option>
                      <option>Adamawa State</option>
                      <option>Akwa Ibom State</option>
                      <option>Anambra State</option>
                      <option>Bauchi State</option>
                      <option>Bayelsa State</option>
                      <option>Benue State</option>
                      <option>Borno State</option>
                      <option>Cross River State</option>
                      <option>Delta State</option>
                      <option>Ebonyi State</option>
                      <option>Edo State</option>
                      <option>Ekiti State</option>
                      <option>Enugu State</option>
                      <option>Gombe State</option>
                      <option>Imo State</option>
                      <option>Jigawa State</option>
                      <option>Kaduna State</option>
                      <option>Kano State</option>
                      <option>Katsina State</option>
                      <option>Kebbi State</option>
                      <option>Kogi State</option>
                      <option>Kwara State</option>
                      <option>Lagos State</option>
                      <option>Nasarawa State</option>
                      <option>Niger State</option>
                      <option>Ogun State</option>
                      <option>Ondo State</option>
                      <option>Osun State</option>
                      <option>Oyo State</option>
                      <option>Plateau State</option>
                      <option>Rivers State</option>
                      <option>Sokoto State</option>
                      <option>Taraba State</option>
                      <option>Yobe State</option>
                      <option>Zamfara State</option>
                        <option>Federal Capital territory</option>
                    </select>
                    
                  </div>
                  {{-- <div class="form-group">
                        <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="sex" required>
                          <option value="">Sex</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                          
                        </select>
                      </div>
                      <div class="form-group">
                          <small class="text-center"></small>
                           <textarea class="form-control form-control-lg"  name="description" id="" cols="30" rows="10" placeholder="Goods/services Description"></textarea>
                           <span class="invalid-feedback" role="alert">
                                <strong></strong>
                            </span>
                          </div> --}}
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password" />
                    <span class="invalid-feedback" role="alert">
                            <strong></strong>
                        </span>
                  </div>
                  <div class="form-group">
                        <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Confirm Password" name="password_confirmation" />
                        <span class="invalid-feedback" role="alert">
                                <strong></strong>
                            </span>
                      </div>
                  <div class="mb-4">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"  required/> 
                         agree to all Terms & Conditions </label>
                    </div>
                  </div>
                  {{-- <button type="button" class="btn btn-success btn-fw" onclick="showSuccessToast()"> Success </button> --}}
                  <div class="mt-3">
                        <button id="createbtn" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn btn-primary" type="submit">SIGN UP</button>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="/login" class="text-primary">Login</a>
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
     <script src="{{asset('/assets/vendors/jquery-toast-plugin/jquery.toast.min.js') }}"></script>
     <script src="{{asset('/assets/js/toastDemo.js') }}"></script>
     {{-- <script src="{{asset('/assets/js/desktop-notification.js') }}"></script> --}}
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
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
            $("#createbtn").html('please wait...  <i class="fa fa-spinner fa-pulse"></i>');
            
            var url = e.target.action  // get the target
            var formData = $(this).serialize() // get form data
            $.post(url, formData, function (response) { // send; response.data will be what is returned
                'use strict';
    resetToastPosition();
    $.toast({
      heading: 'Success!',
      text: '<b>Registration Successful</b>',
      showHideTransition: 'slide',
      icon: 'success',
      loaderBg: '#fff',
      position: 'top-right'
    })
                            window.location='/home';
                
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
      heading: 'Registration Failed!',
      text: '<b>Please fill form correctly and try again</b>',
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
                $(textarea).addClass('form-control form-control-lg  is-invalid')
                $(textarea + '+span>strong').text(value);
                $(textarea).parent().parent().addClass('has-error');
    }); }); 
        })
    })
    </script>
    
    


</html>