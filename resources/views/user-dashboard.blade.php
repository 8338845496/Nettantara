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
                  <p class="card-title">Laundry Price</p>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table id="" class="display expandable-table" style="width:100%">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Product</th>
                              <th>Unit</th>
                              <th>Price</th>
                            </tr>
                          </thead>
                          
                            <tbody>

                              @foreach($product as $pro)
                                  
                                    <tr>
                                    <td>{{ $product->firstItem()+$loop->index }}</td>
                                    <td>{{$pro->name}}</td>
                                    <td>{{$pro->unit}}</td>
                                    <td> ₹ {{$pro->price}}</td>
                                    </tr>
                                    @endforeach
                                {{ $product->onEachSide(1)->links('pagination::bootstrap-4') }}
                            </tbody>
                          
                      </table>
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

