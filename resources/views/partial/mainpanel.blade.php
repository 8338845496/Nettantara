      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Request Pick-up Order</h4>
                
                  @if(session()->has('message'))
                                  <span class="alert alert-success">{{ session()->get('message') }}</span>
                                @endif
                  <p class="card-description">
                    Request Order
                  </p>
                  <form class="forms-sample" method="post" action="{{route('store')}}">
                    @csrf
                    <div class="form-group">
                      <label for="date">Request Date</label>
                      <input type="date" name="date" class="form-control" id="date" placeholder="Request Date">
                    </div>
                    @foreach($product as $pro)
                    <div class="form-group">
                      <label for="product">{{$pro->name}} | ₹ {{$pro->price}} Per {{$pro->unit}} </label>
                      <input type="hidden" name="product[]" class="form-control" id="product" value="{{$pro->name}}">
                      <input type="number" name="unit[]" class="form-control" id="unit" placeholder="{{$pro->name}}" min="0">
                    </div>
                    @endforeach
                    <div class="table-responsive">
                  


                  </div>
                    
                    <div class="form-group">
                      <label for="contact">Contact Person</label>
                      <input type="text" name="contact" class="form-control" id="contact" placeholder="Contact Person">
                    </div>
                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                    </div>
                    <div class="form-group">
                      <label for="mobile">Mobile</label>
                      <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Mobile">
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    
                  </form>
                </div>
              </div>
            </div>
                  </div>
                  </div>
                </div>

