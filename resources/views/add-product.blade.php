<!DOCTYPE html>
<html lang="en">
@section('title', 'Add Product')
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
                  <p class="card-title">Add Laundry Details</p>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-5">
                              <div class="table-responsive">
                                @if(session()->has('message'))
                                  <span class="alert alert-success">{{ session()->get('message') }}</span>
                                @endif
                                <form class="forms-sample" method="POST" action="{{route('save')}}">
                                  @csrf
                                  <div class="form-group">
                                  <label for="current Password">Name of the Product </label>
                                   <input type="text" name="name" class="form-control block mt-1 w-full"  required autocomplete="current-password">
                                  <span class="invalid-feedback"></span>
                                  </div>
                                  <div class="form-group">
                                  <label for="exampleInputPassword1">Select Unit</label>
                                  <select name="unit" id="unit" class="form-control block mt-1 w-full">
                                    <option value="">Select</option>
                                    <option value="Piece">Piece</option>
                                    <option value="KG">KG</option>
                                  </select>
                                  <span class="invalid-feedback"></span>
                                  </div>
                                  <div class="form-group">
                                  <label for="exampleInputPassword1">Price</label>
                                   <input type="text" name="price" class="form-control block mt-1 w-full" >
                                  <span class="invalid-feedback"></span>
                                  </div>
                                  <button type="submit" class="btn btn-primary mr-2">Add</button>
                                </form>
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


