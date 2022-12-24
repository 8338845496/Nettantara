
<!DOCTYPE html>
<html lang="en">
@section('title', 'Register Yourself')
@include('partial.head')
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
                  <h4 class="card-title">Admin Register</h4>
                    <form class="forms-sample" method="POST" action="{{ route('admin.register') }}">
                    @csrf
                    <div class="form-group">
                      <label for="name">Name</label>
                        <input type="text" class="form-control " value="" id="name" placeholder="Name" name="name">
                        <span class="invalid-feedback"></span>
                    </div>
                    <div class="form-group">
                      <label for="username">Username</label>
                        <input type="text" class="form-control " value="" id="username" placeholder="Username" name="username">
                        <span class="invalid-feedback"></span>
                    </div>
                    <div class="form-group">
                      <label for="email">Email address</label>
                      <input type="email" class="form-control" value="" id="email" placeholder="Email" name="email">
                      <span class="invalid-feedback"></span>
                    </div>
                    <div class="form-group">
                      <label for="mobile">Mobile Number</label>
                      <input type="text" class="form-control " value="" id="mobile" placeholder="Mobile" name="mobile">
                      <span class="invalid-feedback"></span>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Password</label>
                      <input type="password" class="form-control " value="" id="InputPassword" placeholder="Password" name="password">
                      <span class="invalid-feedback"></span>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Confirmation Password</label>
                      <input type="password" class="form-control " value="" id="password_confirmation" placeholder="Confirmation Password" name="password_confirmation">
                      <span class="invalid-feedback"></span>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Register</button>
                  </form>
                  <p class="blockquote-footer">Have an Acount? <a href="{{ url('/admin/login') }}">Login Here</a> </p>
                </div>
              </div>
            </div>
            </div>
          
        </div>
       <!--End  container-fluid page-body-wrapper -->
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->

        <!-- partial -->
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

