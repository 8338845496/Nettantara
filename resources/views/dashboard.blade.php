<!DOCTYPE html>
<html lang="en">
@section('title', 'Admin Dashboard')
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
     {{--  --}}
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Overview</p>
                  <div class="row">
                    <div class="col-md-12 grid-margin transparent">
              <div class="row">

                <div class="col-md-3 mb-2 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">New Request
                        @php
                        $cnt=$act=$pct=$dct=0;
                        @endphp
                        @foreach($req as $rq)
                        @php
                        $cnt = $req->count($rq);
                        @endphp
                        @endforeach
                      </p>
                      <p class="fs-30 mb-2">{{ $cnt }}</p>
                      <p>View Details</p>
                    </div>
                  </div>
                </div>
                
                <div class="col-md-3 mb-2 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Accept</p>
                      @foreach($acce as $ac)
                        @php
                        $act = $acce->count($ac);
                        @endphp
                        @endforeach
                      <p class="fs-30 mb-2">{{ $act }}</p>
                      <p>View Details</p>
                    </div>
                  </div>
                </div>
        

                <div class="col-md-3 mb-2 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Inprocess</p>
                      @foreach($proce as $pc)
                        @php
                        $pct = $proce->count($pc);
                        @endphp
                        @endforeach
                      <p class="fs-30 mb-2">{{ $pct }}</p>
                      <p>View Details</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-2 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Finish / Dispatch</p>
                      @foreach($dis as $ds)
                        @php
                        $dct = $dis->count($ds);
                        @endphp
                        @endforeach
                      <p class="fs-30 mb-2">{{ $dct }}</p>
                      <p>View Details</p>
                    </div>
                  </div>
                </div>
            </div>
            </div>
                    <div class="col-12">
                        <p class="card-title">Laundry Price</p>
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
                                    <td>₹ {{$pro->price}}</td>
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


