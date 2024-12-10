
<!doctype html>
<html lang="en" dir="ltr" data-bs-theme="light" data-bs-theme-color="theme-color-default">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>simapres Aiska</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('images/aiska.ico')}} ">
      
      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="{{ asset('css/core/libs.min.css')}}">
      
      <!-- Aos Animation Css -->
      <link rel="stylesheet" href="{{ asset('vendor/aos/dist/aos.css')}}">
      
      <!-- Hope Ui Design System Css -->
      <link rel="stylesheet" href="{{ asset('css/hope-ui.min.css?v=5.0.0')}}">
      
      <!-- Custom Css -->
      <link rel="stylesheet" href="{{ asset('css/custom.min.css?v=5.0.0')}}">
      
      <!-- Customizer Css -->
      <link rel="stylesheet" href="{{ asset('css/customizer.min.css?v=5.0.0')}}">

      <!-- link apexchat Css -->
      <link rel="stylesheet" href="{{ asset('css/apexcharts.css')}}">
  </head>
      
      
  </head>
  <body class="  ">
    <aside class="sidebar sidebar-default sidebar-white sidebar-base navs-rounded-all sidebar-boxed">
        <div class="sidebar-header d-flex align-items-center justify-content-start">
            <a href="" class="navbar-brand">
                
                <!--Logo start-->
                <div class="logo-main">
                    <div class="logo-normal">
                        <img src="{{asset('images/auth/aiska.svg')}}" class="text-primary icon-30" alt="Icon Description">
                    </div>
                </div>
                <!--logo End-->
                
                <h4 class="logo-title">SIMAPRES</h4>
            </a>
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </i>
            </div>
        </div>
        <div class="sidebar-body pt-0 data-scrollbar">
            <div class="sidebar-list">
                <!-- Sidebar Menu Start -->
                <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is(['dashboard*']) ? 'active' : ''}}" aria-current="page" href="../dashboard/index.html">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-20">
                                    <path opacity="0.4" d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Dashboard</span>
                        </a>
                    </li>
                    <li><hr class="hr-horizontal"></li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is(['dosen*']) ? 'active' : ''}}" aria-current="page" href="">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-20">
                                    <path opacity="0.5" d="M4.72718 2.73332C5.03258 2.42535 5.46135 2.22456 6.27103 2.11478C7.10452 2.00177 8.2092 2 9.7931 2H14.2069C15.7908 2 16.8955 2.00177 17.729 2.11478C18.5387 2.22456 18.9674 2.42535 19.2728 2.73332C19.5782 3.0413 19.7773 3.47368 19.8862 4.2902C19.9982 5.13073 20 6.24474 20 7.84202L20 18H7.42598C6.34236 18 5.96352 18.0057 5.67321 18.0681C5.15982 18.1785 4.71351 18.4151 4.38811 18.7347C4.27837 18.8425 4.22351 18.8964 4.09696 19.2397C4.02435 19.4367 4 19.5687 4 19.7003V7.84202C4 6.24474 4.00176 5.13073 4.11382 4.2902C4.22268 3.47368 4.42179 3.0413 4.72718 2.73332Z" fill="#1C274D"/>
                                    <path d="M20 18H7.42598C6.34236 18 5.96352 18.0057 5.67321 18.0681C5.15982 18.1785 4.71351 18.4151 4.38811 18.7347C4.27837 18.8425 4.22351 18.8964 4.09696 19.2397C3.97041 19.5831 3.99045 19.7288 4.03053 20.02C4.03761 20.0714 4.04522 20.1216 4.05343 20.1706C4.16271 20.8228 4.36259 21.1682 4.66916 21.4142C4.97573 21.6602 5.40616 21.8206 6.21896 21.9083C7.05566 21.9986 8.1646 22 9.75461 22H14.1854C15.7754 22 16.8844 21.9986 17.7211 21.9083C18.5339 21.8206 18.9643 21.6602 19.2709 21.4142C19.4705 21.254 19.6249 21.0517 19.7385 20.75H8C7.58579 20.75 7.25 20.4142 7.25 20C7.25 19.5858 7.58579 19.25 8 19.25H19.9754C19.9926 18.8868 19.9982 18.4741 20 18Z" fill="#1C274D"/>
                                    <path d="M7.25 7C7.25 6.58579 7.58579 6.25 8 6.25H16C16.4142 6.25 16.75 6.58579 16.75 7C16.75 7.41421 16.4142 7.75 16 7.75H8C7.58579 7.75 7.25 7.41421 7.25 7Z" fill="#1C274D"/>
                                    <path d="M8 9.75C7.58579 9.75 7.25 10.0858 7.25 10.5C7.25 10.9142 7.58579 11.25 8 11.25H13C13.4142 11.25 13.75 10.9142 13.75 10.5C13.75 10.0858 13.4142 9.75 13 9.75H8Z" fill="#1C274D"/>
                                </svg>
                            </i>
                            <span class="item-name">data dosen</span>
                        </a>
                    </li>
                    <li><hr class="hr-horizontal"></li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is(['mahasiswa*']) ? 'active' : ''}}" aria-current="page" href="">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-20">
                                    <path d="M14.2172 3.49965C12.7962 2.83345 11.2037 2.83345 9.78272 3.49965L3.0916 6.63659C2.0156 7.14105 1.73507 8.56352 2.25 9.54666L2.25 14.5C2.25 14.9142 2.58579 15.25 3 15.25C3.41421 15.25 3.75 14.9142 3.75 14.5V10.672L9.78281 13.5003C11.2038 14.1665 12.7963 14.1665 14.2173 13.5003L20.9084 10.3634C22.3639 9.68105 22.3639 7.31899 20.9084 6.63664L14.2172 3.49965Z" fill="#1C274D"/>
                                    <path opacity="0.5" d="M5 11.2581L9.78281 13.5003C11.2038 14.1665 12.7963 14.1665 14.2173 13.5003L19 11.2581V16.6252C19 17.6333 18.4965 18.577 17.6147 19.0654C16.1463 19.8786 13.796 20.9998 12 20.9998C10.204 20.9998 7.8537 19.8786 6.38533 19.0654C5.5035 18.577 5 17.6333 5 16.6252V11.2581Z" fill="#1C274D"/>
                                </svg>
                            </i>
                            <span class="item-name">data mahasiswa</span>
                        </a>
                    </li>
                    <li><hr class="hr-horizontal"></li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is(['prestasi*']) ? 'active' : ''}}" aria-current="page" href="">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-20">
                                    <path opacity="0.5" d="M2 8V12C2 14.8284 2 16.2426 2.87868 17.1213C3.35503 17.5977 3.98877 17.8158 4.9199 17.9156C4.9939 17.8157 5.06395 17.737 5.11392 17.6821C5.23008 17.5543 5.37739 17.4091 5.5202 17.2683L7.01311 15.7962L7.56446 15.2377C7.9268 13.1151 9.77461 11.5 12.0001 11.5C14.2255 11.5 16.0733 13.1151 16.4357 15.2377L16.987 15.7962L18.48 17.2684C18.6228 17.4092 18.7701 17.5544 18.8862 17.6821C18.9362 17.737 19.0062 17.8157 19.0802 17.9156C20.0113 17.8158 20.645 17.5977 21.1213 17.1213C22 16.2426 22 14.8284 22 12V8C22 5.17157 22 3.75736 21.1213 2.87868C20.2426 2 18.8284 2 16 2H8C5.17157 2 3.75736 2 2.87868 2.87868C2 3.75736 2 5.17157 2 8Z" fill="#1C274D"/>
                                    <path d="M7 8.75C6.58579 8.75 6.25 9.08579 6.25 9.5C6.25 9.91421 6.58579 10.25 7 10.25H17C17.4142 10.25 17.75 9.91421 17.75 9.5C17.75 9.08579 17.4142 8.75 17 8.75H7Z" fill="#1C274D"/>
                                    <path d="M8.25 6C8.25 5.58579 8.58579 5.25 9 5.25H15C15.4142 5.25 15.75 5.58579 15.75 6C15.75 6.41421 15.4142 6.75 15 6.75H9C8.58579 6.75 8.25 6.41421 8.25 6Z" fill="#1C274D"/>
                                    <path d="M9.00111 15.9174C9.00037 15.9449 9 15.9724 9 16C9 17.6569 10.3431 19 12 19C13.6569 19 15 17.6569 15 16C15 15.9724 14.9996 15.9449 14.9989 15.9174C14.9551 14.2987 13.6292 13 12 13C10.4467 13 9.16912 14.1805 9.01549 15.6933C9.00798 15.7672 9.00315 15.842 9.00111 15.9174Z" fill="#1C274D"/>
                                    <path d="M7.6757 17.2494L6.59523 18.3148C6.27116 18.6344 6.10913 18.7942 6.05306 18.9295C5.92529 19.2378 6.03463 19.5799 6.31283 19.7421C6.43491 19.8132 6.65512 19.8354 7.09553 19.8798C7.3442 19.9048 7.46853 19.9173 7.57266 19.9554C7.80579 20.0405 7.98715 20.2193 8.07345 20.4492C8.112 20.5519 8.1247 20.6745 8.1501 20.9197C8.19509 21.354 8.21758 21.5711 8.28977 21.6915C8.45425 21.9659 8.80111 22.0737 9.1138 21.9477C9.25102 21.8924 9.41306 21.7326 9.73713 21.413L10.8175 20.343C9.30505 19.9322 8.10917 18.7524 7.6757 17.2494Z" fill="#1C274D"/>
                                    <path d="M13.1825 20.343L14.2629 21.413C14.5869 21.7326 14.749 21.8924 14.8862 21.9477C15.1989 22.0737 15.5457 21.9659 15.7102 21.6915C15.7824 21.5711 15.8049 21.354 15.8499 20.9197C15.8753 20.6745 15.888 20.5519 15.9265 20.4492C16.0129 20.2193 16.1942 20.0405 16.4273 19.9554C16.5315 19.9173 16.6558 19.9048 16.9045 19.8798C17.3449 19.8354 17.5651 19.8132 17.6872 19.7421C17.9654 19.5799 18.0747 19.2378 17.9469 18.9295C17.8909 18.7942 17.7288 18.6344 17.4048 18.3148L16.3243 17.2494C15.8908 18.7524 14.6949 19.9322 13.1825 20.343Z" fill="#1C274D"/>
                                </svg>
                            </i>
                            <span class="item-name">laporan prestasi</span>
                        </a>
                    </li>
                </ul>
                <!-- Sidebar Menu End -->
            </div>
        </div>
        <div class="sidebar-footer"></div>
    </aside>

    <main class="main-content position-relative min-vh-100">
      <div class="position-relative iq-banner">
        <!--Nav Start-->
        <nav class="nav navbar navbar-expand-xl navbar-light iq-navbar">
          <div class="container-fluid navbar-inner">
            <a href="" class="navbar-brand">
                
                <!--Logo start-->
                <div class="logo-main">
                    <div class="logo-normal">
                        <img src="{{asset('images/auth/aiska.svg')}}" class="text-primary icon-30" alt="Icon Description">
                    </div>
                </div>
                <!--logo End-->
                
                
                
                
                <h4 class="logo-title">SIMAPRES</h4>
            </a>
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon">
                 <svg  width="20px" class="icon-20" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                </svg>
                </i>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
                  <span class="mt-2 navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0">
                <li class="nav-item dropdown custom-drop">
                  <a class="py-0 nav-link d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('images/avatar.png')}}" alt="User-Profile" class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded">
                    <div class="caption ms-3 d-none d-md-block ">
                        <h6 class="mb-0 caption-title">Austin Robertson</h6>
                        <p class="mb-0 caption-sub-title">Marketing Administrator</p>
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-20">
                            <path opacity="0.5" d="M2 16C2 13.1716 2 11.7574 2.87868 10.8787C3.75736 10 5.17157 10 8 10H16C18.8284 10 20.2426 10 21.1213 10.8787C22 11.7574 22 13.1716 22 16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H8C5.17157 22 3.75736 22 2.87868 21.1213C2 20.2426 2 18.8284 2 16Z" fill="#1C274C"/>
                            <path d="M8 17C8.55228 17 9 16.5523 9 16C9 15.4477 8.55228 15 8 15C7.44772 15 7 15.4477 7 16C7 16.5523 7.44772 17 8 17Z" fill="#1C274C"/>
                            <path d="M12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17Z" fill="#1C274C"/>
                            <path d="M17 16C17 16.5523 16.5523 17 16 17C15.4477 17 15 16.5523 15 16C15 15.4477 15.4477 15 16 15C16.5523 15 17 15.4477 17 16Z" fill="#1C274C"/>
                            <path d="M6.75 8C6.75 5.10051 9.10051 2.75 12 2.75C14.8995 2.75 17.25 5.10051 17.25 8V10.0036C17.8174 10.0089 18.3135 10.022 18.75 10.0546V8C18.75 4.27208 15.7279 1.25 12 1.25C8.27208 1.25 5.25 4.27208 5.25 8V10.0546C5.68651 10.022 6.18264 10.0089 6.75 10.0036V8Z" fill="#1C274C"/>
                            </svg>  Ubah password
                    </a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-20">
                            <path opacity="0.5" d="M9.052 4.5C9 5.07763 9 5.80355 9 6.72183V17.2781C9 18.1964 9 18.9224 9.05201 19.5H8C5.64298 19.5 4.46447 19.5 3.73223 18.7678C3 18.0355 3 16.857 3 14.5V9.5C3 7.14298 3 5.96447 3.73223 5.23223C4.46447 4.5 5.64298 4.5 8 4.5H9.052Z" fill="#1C274C"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.70725 2.4087C9 3.03569 9 4.18259 9 6.4764V17.5236C9 19.8174 9 20.9643 9.70725 21.5913C10.4145 22.2183 11.4955 22.0297 13.6576 21.6526L15.9864 21.2465C18.3809 20.8288 19.5781 20.62 20.2891 19.7417C21 18.8635 21 17.5933 21 15.0529V8.94711C21 6.40671 21 5.13652 20.2891 4.25826C19.5781 3.37999 18.3809 3.17118 15.9864 2.75354L13.6576 2.34736C11.4955 1.97026 10.4145 1.78171 9.70725 2.4087ZM12.75 10.9535C12.75 10.52 12.4142 10.1686 12 10.1686C11.5858 10.1686 11.25 10.52 11.25 10.9535V13.0465C11.25 13.48 11.5858 13.8314 12 13.8314C12.4142 13.8314 12.75 13.48 12.75 13.0465V10.9535Z" fill="#1C274C"/>
                            </svg>  Logout
                    </a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav> 
        <!-- Nav Header Component Start -->
          <div class="iq-navbar-header" style="height: 215px;">
              <div class="container-fluid iq-container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="flex-wrap d-flex justify-content-between align-items-center">
                              <div>
                                  {{-- <h1>selamat datang {{ auth()->user()->nama}}</h1> --}}
                                  <p>di halaman laporan prestasi mahasiswa Universitas Aisyiyah Surakarta</p>
                              </div>
                              <div>
                                <div href="" class="btn text-dark btn-success btn-soft-dark">
                                    Announcements
                                </div>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="iq-header-img">
                  <img src="{{asset('images/dashboard/top-header.png')}}" alt="header" class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
              </div>
          </div>          
          <!-- Nav Header Component End -->
        <!--Nav End-->
      </div>

      @yield('content')
      <!-- Footer Section Start -->
        <footer class="footer position-absolute bottom-0">
            <div class="footer-body">
                <div class="right-panel text-primary">
                    Copyright © 2024 SIMAPRES, Made with by Irsad team</a>.
                </div>
            </div>
        </footer>
      <!-- Footer Section End -->
    </main>

    <!-- Wrapper End-->
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
    <script src="{{ asset('vendor/aos/dist/aos.js')}}"></script>
    
    <!-- App Script -->
    <script src="{{ asset('js/hope-ui.js')}}" defer></script>

    @stack('script')
  </body>
</html>