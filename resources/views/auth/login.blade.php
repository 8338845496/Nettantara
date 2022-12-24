
<!DOCTYPE html>
<html lang="en">
@section('title', 'Login')
@include('partial.head')
<link rel="stylesheet" href="admin/vendors/feather/feather.css">
  <link rel="stylesheet" href="admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="admin/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="admin/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="admin/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="admin/images/favicon.png" />
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('partial.mnav')
    <!-- partial -->

    <div class="container-fluid page-body-wrapper">  
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-4 grid-margin stretch-card" style="margin: auto">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Login</h4>
                    <form class="forms-sample" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Username</label>
                      <input type="text" class="form-control block mt-1 w-full" id=""  type="email" name="email" placeholder="Username" value="" required autofocus>
                      <span class="invalid-feedback"></span>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                       <input type="password" name="password" class="form-control block mt-1 w-full" placeholder="Password" required autocomplete="current-password">
                      <span class="invalid-feedback"></span>
                    </div>
                    <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
                    
                    <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                  <button type="submit" class="btn btn-primary mr-2">Login</button>
            </div>
                  </form>
                  <p class="blockquote-footer">Not Have an Acount? <a href="register">Register Here</a> </p>
                </div>
              </div>
            </div>
            </div>          
        </div>
      </div>

      </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       
        @include('partial.footer')
        
        <!-- partial -->

    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->


</body>
  <!-- plugins:js -->
  @include('partial.js')
  <!-- End custom js for this page-->
</html>

