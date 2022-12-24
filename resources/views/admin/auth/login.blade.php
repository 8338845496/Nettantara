
<!DOCTYPE html>
<html lang="en">
@section('title', 'Login')
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
                  <h4 class="card-title">Admin Login</h4>
                    <form class="forms-sample" method="POST" action="{{ route('admin.login') }}">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Username</label>
                      <input type="text" class="form-control block mt-1 w-full" id=""  type="email" name="email" placeholder="Username" value="" required autofocus>
                      @error('email')
                      <span class="invalid-feedback">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                       <input type="password" name="password" class="form-control block mt-1 w-full" placeholder="Password" required autocomplete="current-password">
                       @error('password')
                      <span class="invalid-feedback">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
                    
                    <div class="flex items-center justify-end mt-4">
        
                  <button type="submit" class="btn btn-primary mr-2">Login</button>
            </div>
                  </form>
                  
                  <p class="blockquote-footer">Not Have an Acount? <a href="{{ url('/admin/register') }}">Register Here</a> </p>
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

