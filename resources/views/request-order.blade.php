<!DOCTYPE html>
<html lang="en">
@section('title','Order Request')
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
      @include('partial.mainpanel')
              </div>

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <div class="content-wrapper">
          
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

