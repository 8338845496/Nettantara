<!DOCTYPE html>
<html lang="en">
@section('title', 'User Order Details')
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
            <table id="" class="display expandable-table" style="width:100%">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Date of Order</th>
                               <th>Order ID</th>
                              <th>Product</th>
                              <th>Unit</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          
                            <tbody>

                              @foreach($product as $pro)
                                  
                                    <tr>
                                    <td>{{ $product->firstItem()+$loop->index }}</td>
                                    <td>{{$pro->date}}</td>
                                    <td>{{$pro->order_no}}</td>
                                    <td>{{$pro->product}}</td>
                                    <td>{{$pro->unit}}</td>
                                    @if($pro->receive==0)
                                    <td> Not Received </td>
                                    @elseif($pro->receive==0 && $pro->unit<<1)
                                    <td>Not Submitted</td>
                                    @elseif($pro->process==0)
                                    <td> Under Process </td>
                                    @elseif($pro->finish==0)
                                    <td> Finished </td>
                                    @elseif($pro->dispach==0)
                                    <td> Dispatch </td>
                                    @else
                                    <td>Delivered</td>
                                    @endif
                                    </tr>
                                    @endforeach
                                {{ $product->onEachSide(1)->links('pagination::bootstrap-4') }}
                            </tbody>
                          
                      </table>
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