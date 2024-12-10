


<!doctype html>
<html lang="en" dir="ltr" data-bs-theme="light" data-bs-theme-color="theme-color-default">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>simapres Aiska</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('images/aiska.ico')}}">
      
      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="{{ asset('css/core/libs.min.css')}}">
      
      
      <!-- Hope Ui Design System Css -->
      <link rel="stylesheet" href="{{ asset('css/hope-ui.min.css?v=5.0.0')}}">
      
      <!-- Custom Css -->
      <link rel="stylesheet" href="{{ asset('css/custom.min.css?v=5.0.0')}} ">
      
      <!-- Customizer Css -->
      <link rel="stylesheet" href=" {{ asset('css/customizer.min.css?v=5.0.0')}}">
      
      <!-- RTL Css -->
      <link rel="stylesheet" href="{{ asset('css/rtl.min.css?v=5.0.0')}} ">
      
      
  </head>
  <body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">    
      <div class="wrapper">
      <section class="login-content">
         <div class="row m-0 align-items-center bg-success vh-100">            
            <div class="col-md-6">
               <div class="row justify-content-center">
                  <div class="col-md-10">
                     <div class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card">
                        <div class="card-body z-3 px-md-0 px-lg-4">
                            <!--Logo start-->
                            <a href="" class="navbar-brand d-flex align-items-center mb-3">
                            <div class="logo-main">
                                <div class="logo-normal">
                                  <img src="{{asset('images/auth/aiska.svg')}}" class="text-primary icon-30" alt="Icon Description">
                                </div>
                            </div>
                            <!--logo End-->
                           
                            <h4 class="logo-title ms-3">Sistem Mahasiswa Prestasi</h4>
                          </a>
                           <h2 class="mb-2 text-center">LOGIN</h2>
                           <p class="text-center">laman rekap prestasi mahasiswa</p>
                           <form>
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <label for="email" class="form-label">Email</label>
                                       <input type="email" class="form-control" id="email" aria-describedby="email" placeholder=" ">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <label for="password" class="form-label">Password</label>
                                       <input type="password" class="form-control" id="password" aria-describedby="password" placeholder=" ">
                                    </div>
                                 </div>
                              </div>
                              <div class="d-flex justify-content-center">
                                 <button type="submit" class="btn btn-primary">Sign In</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
               <img src="{{ asset('images/auth/01.png')}}" class="img-fluid gradient-main animated-scaleX" alt="images">
            </div>
         </div>
      </section>
      </div>
    <!-- Library Bundle Script -->
    <script src="{{ asset('js/core/libs.min.js')}}"></script>
    
    <!-- External Library Bundle Script -->
    <script src="{{ asset('js/core/external.min.js')}}"></script>
    
    <!-- Widgetchart Script -->
    <script src="{{ asset('js/charts/widgetcharts.js')}}"></script>
    
    <!-- mapchart Script -->
    <script src="{{ asset('js/charts/vectore-chart.js')}}"></script>
    <script src="{{ asset('js/charts/dashboard.js')}}" ></script>
    
    <!-- fslightbox Script -->
    <script src="{{ asset('js/plugins/fslightbox.js')}}"></script>
    
    <!-- Settings Script -->
    <script src="{{ asset('js/plugins/setting.js')}}"></script>
    
    <!-- Slider-tab Script -->
    <script src="{{ asset('js/plugins/slider-tabs.js')}}"></script>
    
    <!-- Form Wizard Script -->
    <script src="{{ asset('js/plugins/form-wizard.js')}}"></script>
    
    <!-- AOS Animation Plugin-->
    
    <!-- App Script -->
    <script src="{{ asset('js/hope-ui.js')}}" defer></script>
    
    
  </body>
</html>