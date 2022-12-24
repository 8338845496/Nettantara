<!DOCTYPE html>
<html lang="en">
@section('title', 'User Dashboard')
@include('partial.head')
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('partial.nav')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      @include('partial.theme')
      @include('partial.setting')
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('partial.user-menu')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">User Details</p>
                  <div class="row">
                    <div class="col-4">
                      <div class="table-responsive">
                          <div class="form-group">
                          <label for="current Password">Name </label>
                           <input type="text" name="name" class="form-control block mt-1 w-full"  required autocomplete="current-password">
                          <span class="invalid-feedback"></span>
                          </div>
                          <div class="form-group">
                          <label for="exampleInputPassword1">User Name</label>
                           <input type="text" name="username" class="form-control block mt-1 w-full" >
                          <span class="invalid-feedback"></span>
                          </div>
                          <div class="form-group">
                          <label for="exampleInputPassword1">Email</label>
                           <input type="text" name="email" class="form-control block mt-1 w-full" >
                          <span class="invalid-feedback"></span>
                          </div>
                          <button type="submit" class="btn btn-primary mr-2">Update</button>
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
        @include('partial.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  @include('partial.js')
  <!-- End custom js for this page-->
</body>

</html>