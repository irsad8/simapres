@extends('layout.template')

@section('content')
<div class="conatiner-fluid content-inner mt-n5 py-0 pb-4">
    <div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="row row-cols-1">
            <div class="overflow-hidden d-slider1 ">
                <ul  class="p-0 m-0 mb-2 swiper-wrapper list-inline">
                    <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="700">
                        <div class="card-body">
                            <div class="progress-widget">
                                <div id="circle-progress-01" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="90" data-type="percent">
                                <svg class="card-slie-arrow icon-24" width="24"  viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                                </svg>
                                </div>
                                <div class="progress-detail">
                                <p  class="mb-2">Total Sales</p>
                                <h4 class="counter">$560K</h4>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="800">
                        <div class="card-body">
                            <div class="progress-widget">
                                <div id="circle-progress-02" class="text-center circle-progress-01 circle-progress circle-progress-info" data-min-value="0" data-max-value="100" data-value="80" data-type="percent">
                                <svg class="card-slie-arrow icon-24" width="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                                </svg>
                                </div>
                                <div class="progress-detail">
                                <p  class="mb-2">Total Profit</p>
                                <h4 class="counter">$185K</h4>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="900">
                        <div class="card-body">
                            <div class="progress-widget">
                                <div id="circle-progress-03" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="70" data-type="percent">
                                <svg class="card-slie-arrow icon-24" width="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                                </svg>
                                </div>
                                <div class="progress-detail">
                                <p  class="mb-2">Total Cost</p>
                                <h4 class="counter">$375K</h4>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="swiper-button swiper-button-next"></div>
                <div class="swiper-button swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-8">
        <div class="row">
            <div class="col-md-12">
                <div class="card" data-aos="fade-up" data-aos-delay="800">
                <div class="flex-wrap card-header d-flex justify-content-between align-items-center">
                    <div class="header-title">
                        <h4 class="card-title">$855.8K</h4>
                        <p class="mb-0">Gross Sales</p>          
                    </div>
                    <div class="d-flex align-items-center align-self-center">
                        <div class="d-flex align-items-center text-primary">
                            <svg class="icon-12" xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                            </svg>
                            <div class="ms-2">
                            <span class="text-gray">Sales</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center ms-3 text-info">
                            <svg class="icon-12" xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                            </svg>
                            <div class="ms-2">
                            <span class="text-gray">Cost</span>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="#" class="text-gray dropdown-toggle" id="dropdownMenuButton22" data-bs-toggle="dropdown" aria-expanded="false">
                        This Week
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end custom-dropdown-menu-end" aria-labelledby="dropdownMenuButton22">
                            <li><a class="dropdown-item" href="#">This Week</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div id="d-main" class="d-main"></div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-4">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card" data-aos="fade-up" data-aos-delay="500">
                    <div class="text-center card-body d-flex justify-content-around">
                        <div>
                            <h2 class="mb-2">750<small>K</small></h2>
                            <p class="mb-0 text-gray">Website Visitors</p>
                        </div>
                        <hr class="hr-vertial">
                        <div>
                            <h2 class="mb-2">7,500</h2>
                            <p class="mb-0 text-gray">New Customers</p>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div> 
    </div>
  </div>
@endsection

@push('script')
    <script src="{{ asset('js/charts/dashboard.js')}}" ></script>
@endpush
