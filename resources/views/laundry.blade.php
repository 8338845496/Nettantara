<!DOCTYPE html>
<html lang="en">
@section('title', 'User Order all Details')
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
            @if (session('message'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('message') }}
                                </div>
            @endif
            <table id="" class="display expandable-table" style="width:100%">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Date of Order</th>
                               <th>Order ID</th>
                              <th>Product</th>
                              <th>Unit</th>
                              <th>Receive</th>
                              <th>Process</th>
                              <th>Finish</th>
                              <th>Dispatch</th>
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
                                    {{-- Ckeckbox Start --}}
                                    <form action="{{route('receive',$pro->id)}}" method="post">
                                      @csrf
                                      <input type="hidden" name="id" value="{{ $pro->id }}">
                                    @if($pro->unit==0)
                                    <td class="bg-secondary"style="background: grey;"><a href="{{route('receive',$pro->id)}}" style="pointer-events: none" class="dropdown-item" alt="Accept">
                                      <i class="ti-check-box text-dark"></i>
                                    </a>
                                  </td>
                                  @elseif($pro->receive==0)
                                  <td><a href="{{route('receive',$pro->id)}}" class="dropdown-item" alt="Accept">
                                      <i class="ti-check-box text-danger"></i>
                                    </a>
                                  </td>
                                  @elseif($pro->receive==1)
                                  <td><a href="{{route('receive',$pro->id)}}" class="dropdown-item" alt="Accept">
                                      <i class="ti-check-box text-success"></i>
                                    </a>
                                  </td>
                                  @else
                                  <td><a href="{{route('receive',$pro->id)}}" class="dropdown-item" alt="Accept">
                                      <i class="ti-check-box text-danger"></i>
                                    </a>
                                  </td>
                                </form>
                                  @endif
                                  {{-- Checkbox- End --}}

                                  {{-- Timer Starts --}}
                                  <form action="{{route('process',$pro->id)}}" method="post">
                                      @csrf
                                      <input type="hidden" name="id" value="{{ $pro->id }}">
                                  @if($pro->unit==0)
                                    <td class="bg-secondary"style="background: grey;"><a href="{{route('process',$pro->id)}}" style="pointer-events: none" class="dropdown-item" alt="Accept">
                                      <i class="ti-timer text-dark"></i>
                                    </a>
                                  </td>
                                  @elseif($pro->process==0)
                                  <td><a href="{{route('process',$pro->id)}}" class="dropdown-item" alt="Accept">
                                      <i class="ti-timer text-danger"></i>
                                    </a>
                                  </td>
                                  @elseif($pro->process==1)
                                  <td><a href="{{route('process',$pro->id)}}" class="dropdown-item" alt="Accept">
                                      <i class="ti-timer text-warning"></i>
                                    </a>
                                  </td>
                                  @else
                                  <td><a href="{{route('process',$pro->id)}}" class="dropdown-item" alt="Accept">
                                      <i class="ti-timer text-danger"></i>
                                    </a>
                                  </td>
                                  @endif
                                </form>

                                  {{-- Timer End --}}
                                    
                                   {{--  Flag Start --}}
                                   <form action="{{route('finish',$pro->id)}}" method="post">
                                      @csrf
                                      <input type="hidden" name="id" value="{{ $pro->id }}">
                                   @if($pro->unit==0)
                                    <td class="bg-secondary"style="background: grey;"><a href="{{route('finish',$pro->id)}}" style="pointer-events: none" class="dropdown-item" alt="Accept">
                                      <i class="ti-flag-alt text-dark"></i>
                                    </a>
                                  </td>
                                  @elseif($pro->finish==0)
                                  <td><a href="{{route('finish',$pro->id)}}" class="dropdown-item" alt="Accept">
                                      <i class="ti-flag-alt text-danger"></i>
                                    </a>
                                  </td>
                                  @elseif($pro->finish==1)
                                  <td><a href="{{route('finish',$pro->id)}}" class="dropdown-item" alt="Accept">
                                      <i class="ti-flag-alt text-primary"></i>
                                    </a>
                                  </td>
                                  @else
                                  <td><a href="{{route('finish',$pro->id)}}" class="dropdown-item" alt="Accept">
                                      <i class="ti-flag-alt text-danger"></i>
                                    </a>
                                  </td>
                                  @endif
                                </form>

                                   {{-- Flag Ends --}}
                                 
                                    {{-- Truck Start --}}
                                    <form action="{{route('dispach',$pro->id)}}" method="post">
                                      @csrf
                                      <input type="hidden" name="id" value="{{ $pro->id }}">
                                    @if($pro->unit==0)
                                    <td class="bg-secondary"style="background: grey;"><a href="{{route('dispach',$pro->id)}}" style="pointer-events: none" class="dropdown-item" alt="Accept">
                                      <i class="ti-truck text-dark"></i>
                                    </a>
                                  </td>
                                  @elseif($pro->dispach==0)
                                  <td><a href="{{route('dispach',$pro->id)}}" class="dropdown-item" alt="Accept">
                                      <i class="ti-truck text-danger"></i>
                                    </a>
                                  </td>
                                  @elseif($pro->dispach==1)
                                  <td><a href="{{route('dispach',$pro->id)}}" class="dropdown-item" alt="Accept">
                                      <i class="ti-truck text-info"></i>
                                    </a>
                                  </td>
                                  @else
                                  <td><a href="{{route('dispach',$pro->id)}}" class="dropdown-item" alt="Accept">
                                      <i class="ti-truck text-danger"></i>
                                    </a>
                                  </td>
                                  @endif
                                </form>

                                    {{-- Truck Ends --}}
                                   
                                    
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