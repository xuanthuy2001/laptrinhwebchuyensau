<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="utf-8" />
      <title>Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
      <meta content="Coderthemes" name="author" />
      <!-- App css -->
      <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('css/app-creative.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />

</head>

<body class="loading"
      data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
      @include('layout.sidebar')
      <div class="wrapper">
            @include('layout.heade')
            <div class="content-page">
                  <div class="content">
                        <div class="container-fluid">
                              <div class="row">
                                    <div class="col-12">
                                          <div class="page-title-box">

                                                <h4 class="page-title">Course</h4>
                                          </div>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-12">
                                          @yield('content')
                                    </div>
                              </div>
                        </div>
                  </div>
                  @include('layout.footer')
            </div>
      </div>

      <div class="rightbar-overlay"></div>
      <!-- /Right-bar -->

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

      <script src="{{ asset('js/vendor.min.js') }}"></script>
      <script src="{{ asset('js/app.min.js') }}"></script>

</body>

</html>