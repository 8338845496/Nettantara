<!DOCTYPE html>
<html lang="en">
@auth('admin')
@section('title', 'Change Password')
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
      @include('partial.menu')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Change Password</p>
                  <div class="row">
                    <div class="col-4">
                      <form action="{{ route('update-admin-password') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            @if (session('message'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('message') }}
                                </div>
                            @elseif (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif
                      <div class="table-responsive">
                          <div class="form-group">
                          <label for="exampleInputPassword1">Current Password</label>
                           <input type="password" name="old_password" class="form-control block mt-1 w-full"  required autocomplete="current-password">
                           @error('old_password')
                          <span class="invalid-feedback">{{ $message }}</span>
                          @enderror
                          </div>
                          <div class="form-group">
                          <label for="exampleInputPassword1">New Password</label>
                           <input type="password" name="new_password" class="form-control block mt-1 w-full" >
                          @error('new_password')
                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                @enderror
                          </div>
                          <div class="form-group">
                          <label for="exampleInputPassword1">Confirm Password</label>
                           <input type="password" name="new_password_confirmation" class="form-control block mt-1 w-full" >
                          <span class="invalid-feedback"></span>
                          </div>
                          <button type="submit" class="btn btn-primary mr-2">Change Password</button>
                        </form>
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
@endauth

</html>