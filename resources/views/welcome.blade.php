<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partial.head')

    <body class="antialiased">
        <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
        @include('partial.mnav')
        </div>
        <div class="container-fluid page-body-wrapper">  
        <div class="content-wrapper">
        <div>
            <center><h1>Laundry Management System</h1></center>
        </div>
        </div>
        </div>
        
        @include('partial.footer')
    </body>
</html>