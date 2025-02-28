@extends('dashboard.layouts.app')

@section('title', 'Admin | Dashboard')

@section('content')
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    @include('dashboard.layouts.sidebar')
    <main class="main-content">
        <div class="position-relative">
        @include('dashboard.layouts.header')
        </div>
        
        <div class="conatiner-fluid content-inner mt-n5 py-0">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="row row-cols-1">
                    <div class="d-slider1 overflow-hidden ">
                        <ul  class="swiper-wrapper list-inline m-0 p-0 mb-2">
                            <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="700">
                                <div class="card-body">
                                <div class="progress-widget">
                                    <div id="circle-progress-01" class="circle-progress-01 circle-progress circle-progress-primary text-center" data-min-value="0" data-max-value="100" data-value="90" data-type="percent">
                                        <svg class="card-slie-arrow " width="24" height="24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                                        </svg>
                                    </div>
                                    <div class="progress-detail">
                                        <p  class="mb-2">Total Sales</p>
                                        <h4 class="counter" style="visibility: visible;">$560K</h4>
                                    </div>
                                </div>
                                </div>
                            </li>
                            <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="800">
                                <div class="card-body">
                                <div class="progress-widget">
                                    <div id="circle-progress-02" class="circle-progress-01 circle-progress circle-progress-info text-center" data-min-value="0" data-max-value="100" data-value="80" data-type="percent">
                                        <svg class="card-slie-arrow " width="24" height="24" viewBox="0 0 24 24">
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
                                    <div id="circle-progress-03" class="circle-progress-01 circle-progress circle-progress-primary text-center" data-min-value="0" data-max-value="100" data-value="70" data-type="percent">
                                        <svg class="card-slie-arrow " width="24" viewBox="0 0 24 24">
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
                            <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1000">
                                <div class="card-body">
                                <div class="progress-widget">
                                    <div id="circle-progress-04" class="circle-progress-01 circle-progress circle-progress-info text-center" data-min-value="0" data-max-value="100" data-value="60" data-type="percent">
                                        <svg class="card-slie-arrow " width="24px" height="24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                                        </svg>
                                    </div>
                                    <div class="progress-detail">
                                        <p  class="mb-2">Revenue</p>
                                        <h4 class="counter">$742K</h4>
                                    </div>
                                </div>
                                </div>
                            </li>
                            <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1100">
                                <div class="card-body">
                                <div class="progress-widget">
                                    <div id="circle-progress-05" class="circle-progress-01 circle-progress circle-progress-primary text-center" data-min-value="0" data-max-value="100" data-value="50" data-type="percent">
                                        <svg class="card-slie-arrow " width="24px" height="24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                                        </svg>
                                    </div>
                                    <div class="progress-detail">
                                        <p  class="mb-2">Net Income</p>
                                        <h4 class="counter">$150K</h4>
                                    </div>
                                </div>
                                </div>
                            </li>
                            <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1200">
                                <div class="card-body">
                                <div class="progress-widget">
                                    <div id="circle-progress-06" class="circle-progress-01 circle-progress circle-progress-info text-center" data-min-value="0" data-max-value="100" data-value="40" data-type="percent">
                                        <svg class="card-slie-arrow " width="24" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                                        </svg>
                                    </div>
                                    <div class="progress-detail">
                                        <p  class="mb-2">Today</p>
                                        <h4 class="counter">$4600</h4>
                                    </div>
                                </div>
                                </div>
                            </li>
                            <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1300">
                                <div class="card-body">
                                <div class="progress-widget">
                                    <div id="circle-progress-07" class="circle-progress-01 circle-progress circle-progress-primary text-center" data-min-value="0" data-max-value="100" data-value="30" data-type="percent">
                                        <svg class="card-slie-arrow " width="24" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                                        </svg>
                                    </div>
                                    <div class="progress-detail">
                                        <p  class="mb-2">Members</p>
                                        <h4 class="counter">11.2M</h4>
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
                            <div class="card-header d-flex justify-content-between flex-wrap">
                                <div class="header-title">
                                <h4 class="card-title">$855.8K</h4>
                                <p class="mb-0">Gross Sales</p>
                                </div>
                                <div class="d-flex align-items-center align-self-center">
                                <div class="d-flex align-items-center text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24" fill="currentColor">
                                        <g id="Solid dot2">
                                            <circle id="Ellipse 65" cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                    <div class="ms-2">
                                        <span class="text-secondary">Sales</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center ms-3 text-info">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24" fill="currentColor">
                                        <g id="Solid dot3">
                                            <circle id="Ellipse 66" cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                    <div class="ms-2">
                                        <span class="text-secondary">Cost</span>
                                    </div>
                                </div>
                                </div>
                                <div class="dropdown">
                                <a href="#" class="text-secondary dropdown-toggle" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                This Week
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
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
                    <div class="col-md-12 col-lg-6">
                        <div class="card" data-aos="fade-up" data-aos-delay="1000">
                            <div class="card-header d-flex justify-content-between flex-wrap">
                                <div class="header-title">
                                <h4 class="card-title">Earnings</h4>
                                </div>
                                <div class="dropdown">
                                <a href="#" class="text-secondary dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    This Week
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">This Week</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                <div id="myChart" class="col-md-8 col-lg-8 myChart"></div>
                                <div class="d-grid gap col-md-4 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="#3a57e8">
                                            <g id="Solid dot">
                                            <circle id="Ellipse 67" cx="12" cy="12" r="8" fill="#3a57e8"></circle>
                                            </g>
                                        </svg>
                                        <div class="ms-3">
                                            <span class="text-secondary">Fashion</span>
                                            <h6>251K</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="#4bc7d2">
                                            <g id="Solid dot1">
                                            <circle id="Ellipse 68" cx="12" cy="12" r="8" fill="#4bc7d2"></circle>
                                            </g>
                                        </svg>
                                        <div class="ms-3">
                                            <span class="text-secondary">Accessories</span>
                                            <h6>176K</h6>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="card" data-aos="fade-up" data-aos-delay="1200">
                            <div class="card-header d-flex justify-content-between flex-wrap">
                                <div class="header-title">
                                <h4 class="card-title">Conversions</h4>
                                </div>
                                <div class="dropdown">
                                <a href="#" class="text-secondary dropdown-toggle" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                    This Week
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton3">
                                    <li><a class="dropdown-item" href="#">This Week</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="d-activity" class="d-activity"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="card overflow-hidden" data-aos="fade-up" data-aos-delay="400">
                            <div class="card-header d-flex justify-content-between flex-wrap">
                                <div class="header-title">
                                <h4 class="card-title mb-2">Enterprise Clients</h4>
                                <p class="mb-0">
                                    <svg class ="me-2" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="#3a57e8" d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" />
                                    </svg>
                                    15 new acquired this month
                                </p>
                                </div>
                                <div class="dropdown">
                                <span class="dropdown-toggle" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                </span>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton7">
                                    <a class="dropdown-item " href="javascript:void(0);">Action</a>
                                    <a class="dropdown-item " href="javascript:void(0);">Another action</a>
                                    <a class="dropdown-item " href="javascript:void(0);">Something else here</a>
                                </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive mt-4">
                                <table id="basic-table" class="table table-striped mb-0" role="grid">
                                    <thead>
                                        <tr>
                                            <th>COMPANIES</th>
                                            <th>CONTACTS</th>
                                            <th>ORDER</th>
                                            <th>COMPLETION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                            <div class="d-flex align-items-center">
                                                <img class="bg-soft-primary rounded img-fluid avatar-40 me-3" src="http://127.0.0.1:8000/images/shapes/01.png" alt="profile">
                                                <h6>Addidis Sportwear</h6>
                                            </div>
                                            </td>
                                            <td>
                                            <div class="iq-media-group iq-media-group-1">
                                                <a href="#" class="iq-media-1">
                                                    <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                                </a>
                                                <a href="#" class="iq-media-1">
                                                    <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                                </a>
                                                <a href="#" class="iq-media-1">
                                                    <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                                </a>
                                            </div>
                                            </td>
                                            <td>$14,000</td>
                                            <td>
                                            <div class="d-flex align-items-center mb-2">
                                                <h6>60%</h6>
                                            </div>
                                            <div class="progress bg-soft-primary shadow-none w-100" style="height: 4px">
                                                <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <div class="d-flex align-items-center">
                                                <img class="bg-soft-primary rounded img-fluid avatar-40 me-3" src="http://127.0.0.1:8000/images/shapes/05.png" alt="profile">
                                                <h6>Netflixer Platforms</h6>
                                            </div>
                                            </td>
                                            <td>
                                            <div class="iq-media-group iq-media-group-1">
                                                <a href="#" class="iq-media-1">
                                                    <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                                </a>
                                                <a href="#" class="iq-media-1">
                                                    <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                                </a>
                                            </div>
                                            </td>
                                            <td>$30,000</td>
                                            <td>
                                            <div class="d-flex align-items-center mb-2">
                                                <h6>25%</h6>
                                            </div>
                                            <div class="progress bg-soft-primary shadow-none w-100" style="height: 4px">
                                                <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <div class="d-flex align-items-center">
                                                <img class="bg-soft-primary rounded img-fluid avatar-40 me-3" src="http://127.0.0.1:8000/images/shapes/02.png" alt="profile">
                                                <h6>Shopifi Stores</h6>
                                            </div>
                                            </td>
                                            <td>
                                            <div class="iq-media-group iq-media-group-1">
                                                <a href="#" class="iq-media-1">
                                                    <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                                </a>
                                                <a href="#" class="iq-media-1">
                                                    <div class="icon iq-icon-box-3 rounded-pill">TP</div>
                                                </a>
                                            </div>
                                            </td>
                                            <td>$8,500</td>
                                            <td>
                                            <div class="d-flex align-items-center mb-2">
                                                <h6>100%</h6>
                                            </div>
                                            <div class="progress bg-soft-success shadow-none w-100" style="height: 4px">
                                                <div class="progress-bar bg-success" data-toggle="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <div class="d-flex align-items-center">
                                                <img class="bg-soft-primary rounded img-fluid avatar-40 me-3" src="http://127.0.0.1:8000/images/shapes/03.png" alt="profile">
                                                <h6>Bootstrap Technologies</h6>
                                            </div>
                                            </td>
                                            <td>
                                            <div class="iq-media-group iq-media-group-1">
                                                <a href="#" class="iq-media-1">
                                                    <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                                </a>
                                                <a href="#" class="iq-media-1">
                                                    <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                                </a>
                                                <a href="#" class="iq-media-1">
                                                    <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                                </a>
                                                <a href="#" class="iq-media-1">
                                                    <div class="icon iq-icon-box-3 rounded-pill">TP</div>
                                                </a>
                                            </div>
                                            </td>
                                            <td>$20,500</td>
                                            <td>
                                            <div class="d-flex align-items-center mb-2">
                                                <h6>100%</h6>
                                            </div>
                                            <div class="progress bg-soft-success shadow-none w-100" style="height: 4px">
                                                <div class="progress-bar bg-success" data-toggle="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <div class="d-flex align-items-center">
                                                <img class="bg-soft-primary rounded img-fluid avatar-40 me-3" src="http://127.0.0.1:8000/images/shapes/04.png" alt="profile">
                                                <h6>Community First</h6>
                                            </div>
                                            </td>
                                            <td>
                                            <div class="iq-media-group iq-media-group-1">
                                                <a href="#" class="iq-media-1">
                                                    <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                                </a>
                                            </div>
                                            </td>
                                            <td>$9,800</td>
                                            <td>
                                            <div class="d-flex align-items-center mb-2">
                                                <h6>100%</h6>
                                            </div>
                                            <div class="progress bg-soft-success shadow-none w-100" style="height: 4px">
                                                <div class="progress-bar bg-success" data-toggle="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="row">
                    <div class="col-md-6 col-lg-12">
                        <div class="card credit-card-widget" data-aos="fade-up" data-aos-delay="900">
                            <div class="card-header pb-4 border-0">
                                <div class="p-4 primary-gradient-card rounded border border-white">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="font-weight-bold">VISA </h5>
                                        <P class="mb-0">PREMIUM ACCOUNT</P>
                                    </div>
                                    <div class="master-card-content">
                                        <svg class="master-card-1" width="60" height="60" viewBox="0 0 24 24">
                                            <path fill="#ffffff" d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                        </svg>
                                        <svg class="master-card-2" width="60" height="60" viewBox="0 0 24 24">
                                            <path fill="#ffffff" d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="my-4">
                                    <div class="card-number">
                                        <span class="fs-5 me-2">5789</span>
                                        <span class="fs-5 me-2">****</span>
                                        <span class="fs-5 me-2">****</span>
                                        <span class="fs-5">2847</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-2 justify-content-between">
                                    <p class="mb-0">Card holder</p>
                                    <p class="mb-0">Expire Date</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6>Mike Smith</h6>
                                    <h6 class="ms-5">06/11</h6>
                                </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-itmes-center flex-wrap  mb-4">
                                <div class="d-flex align-itmes-center me-0 me-md-4">
                                    <div>
                                        <div class="p-3 mb-2 rounded bg-soft-primary">
                                            <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.9303 7C16.9621 6.92913 16.977 6.85189 16.9739 6.77432H17C16.8882 4.10591 14.6849 2 12.0049 2C9.325 2 7.12172 4.10591 7.00989 6.77432C6.9967 6.84898 6.9967 6.92535 7.00989 7H6.93171C5.65022 7 4.28034 7.84597 3.88264 10.1201L3.1049 16.3147C2.46858 20.8629 4.81062 22 7.86853 22H16.1585C19.2075 22 21.4789 20.3535 20.9133 16.3147L20.1444 10.1201C19.676 7.90964 18.3503 7 17.0865 7H16.9303ZM15.4932 7C15.4654 6.92794 15.4506 6.85153 15.4497 6.77432C15.4497 4.85682 13.8899 3.30238 11.9657 3.30238C10.0416 3.30238 8.48184 4.85682 8.48184 6.77432C8.49502 6.84898 8.49502 6.92535 8.48184 7H15.4932ZM9.097 12.1486C8.60889 12.1486 8.21321 11.7413 8.21321 11.2389C8.21321 10.7366 8.60889 10.3293 9.097 10.3293C9.5851 10.3293 9.98079 10.7366 9.98079 11.2389C9.98079 11.7413 9.5851 12.1486 9.097 12.1486ZM14.002 11.2389C14.002 11.7413 14.3977 12.1486 14.8858 12.1486C15.3739 12.1486 15.7696 11.7413 15.7696 11.2389C15.7696 10.7366 15.3739 10.3293 14.8858 10.3293C14.3977 10.3293 14.002 10.7366 14.002 11.2389Z" fill="currentColor"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <h5>1153</h5>
                                        <small class="mb-0">Products</small>
                                    </div>
                                </div>
                                <div class="d-flex align-itmes-center">
                                    <div>
                                        <div class="p-3 mb-2 rounded bg-soft-info">
                                            <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1213 11.2331H16.8891C17.3088 11.2331 17.6386 10.8861 17.6386 10.4677C17.6386 10.0391 17.3088 9.70236 16.8891 9.70236H14.1213C13.7016 9.70236 13.3719 10.0391 13.3719 10.4677C13.3719 10.8861 13.7016 11.2331 14.1213 11.2331ZM20.1766 5.92749C20.7861 5.92749 21.1858 6.1418 21.5855 6.61123C21.9852 7.08067 22.0551 7.7542 21.9652 8.36549L21.0159 15.06C20.8361 16.3469 19.7569 17.2949 18.4879 17.2949H7.58639C6.25742 17.2949 5.15828 16.255 5.04837 14.908L4.12908 3.7834L2.62026 3.51807C2.22057 3.44664 1.94079 3.04864 2.01073 2.64043C2.08068 2.22305 2.47038 1.94649 2.88006 2.00874L5.2632 2.3751C5.60293 2.43735 5.85274 2.72207 5.88272 3.06905L6.07257 5.35499C6.10254 5.68257 6.36234 5.92749 6.68209 5.92749H20.1766ZM7.42631 18.9079C6.58697 18.9079 5.9075 19.6018 5.9075 20.459C5.9075 21.3061 6.58697 22 7.42631 22C8.25567 22 8.93514 21.3061 8.93514 20.459C8.93514 19.6018 8.25567 18.9079 7.42631 18.9079ZM18.6676 18.9079C17.8282 18.9079 17.1487 19.6018 17.1487 20.459C17.1487 21.3061 17.8282 22 18.6676 22C19.4969 22 20.1764 21.3061 20.1764 20.459C20.1764 19.6018 19.4969 18.9079 18.6676 18.9079Z" fill="currentColor"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <h5>81K</h5>
                                        <small class="mb-0">Order Served</small>
                                    </div>
                                </div>
                                </div>
                                <div class="mb-4">
                                <div class="d-flex justify-content-between flex-wrap">
                                    <h2 class="mb-2">$405,012,300</h2>
                                    <div>
                                        <span class="badge bg-success rounded-pill">YoY 24%</span>
                                    </div>
                                </div>
                                <p class="text-info">Life time sales</p>
                                </div>
                                <div class="d-grid grid-cols-2 gap">
                                <button class="btn btn-primary text-uppercase p-2">SUMMARY</button>
                                <button class="btn btn-info text-uppercase p-2">ANALYTICS</button>
                                </div>
                            </div>
                        </div>
                        <div class="card" data-aos="fade-up" data-aos-delay="300">
                            <div class="card-body d-flex justify-content-around text-center">
                                <div>
                                <h2 class="mb-2">750<small>K</small></h2>
                                <p class="mb-0 text-secondary">Website Visitors</p>
                                </div>
                                <hr class="hr-vertial">
                                <div>
                                <h2 class="mb-2">7,500</h2>
                                <p class="mb-0 text-secondary">New Customers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="card" data-aos="fade-up" data-aos-delay="400">
                            <div class="card-header d-flex justify-content-between flex-wrap">
                                <div class="header-title">
                                <h4 class="card-title mb-2">Activity overview</h4>
                                <p class="mb-0">
                                    <svg class ="me-2" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="#17904b" d="M13,20H11V8L5.5,13.5L4.08,12.08L12,4.16L19.92,12.08L18.5,13.5L13,8V20Z" />
                                    </svg>
                                    16% this month
                                </p>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class=" d-flex profile-media align-items-top mb-2">
                                <div class="profile-dots-pills border-primary mt-1"></div>
                                <div class="ms-4">
                                    <h6 class=" mb-1">$2400, Purchase</h6>
                                    <span class="mb-0">11 JUL 8:10 PM</span>
                                </div>
                                </div>
                                <div class=" d-flex profile-media align-items-top mb-2">
                                <div class="profile-dots-pills border-primary mt-1"></div>
                                <div class="ms-4">
                                    <h6 class=" mb-1">New order #8744152</h6>
                                    <span class="mb-0">11 JUL 11 PM</span>
                                </div>
                                </div>
                                <div class=" d-flex profile-media align-items-top mb-2">
                                <div class="profile-dots-pills border-primary mt-1"></div>
                                <div class="ms-4">
                                    <h6 class=" mb-1">Affiliate Payout</h6>
                                    <span class="mb-0">11 JUL 7:64 PM</span>
                                </div>
                                </div>
                                <div class=" d-flex profile-media align-items-top mb-2">
                                <div class="profile-dots-pills border-primary mt-1"></div>
                                <div class="ms-4">
                                    <h6 class=" mb-1">New user added</h6>
                                    <span class="mb-0">11 JUL 1:21 AM</span>
                                </div>
                                </div>
                                <div class=" d-flex profile-media align-items-top mb-1">
                                <div class="profile-dots-pills border-primary mt-1"></div>
                                <div class="ms-4">
                                    <h6 class=" mb-1">Product added</h6>
                                    <span class="mb-0">11 JUL 4:50 AM</span>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        @include('dashboard.layouts.footer')
    </main>
    <a class="btn btn-fixed-end btn-warning btn-icon btn-setting" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" role="button" aria-controls="offcanvasExample">
        <svg width="24" viewBox="0 0 24 24" class="animated-rotate" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8064 7.62361L20.184 6.54352C19.6574 5.6296 18.4905 5.31432 17.5753 5.83872V5.83872C17.1397 6.09534 16.6198 6.16815 16.1305 6.04109C15.6411 5.91402 15.2224 5.59752 14.9666 5.16137C14.8021 4.88415 14.7137 4.56839 14.7103 4.24604V4.24604C14.7251 3.72922 14.5302 3.2284 14.1698 2.85767C13.8094 2.48694 13.3143 2.27786 12.7973 2.27808H11.5433C11.0367 2.27807 10.5511 2.47991 10.1938 2.83895C9.83644 3.19798 9.63693 3.68459 9.63937 4.19112V4.19112C9.62435 5.23693 8.77224 6.07681 7.72632 6.0767C7.40397 6.07336 7.08821 5.98494 6.81099 5.82041V5.82041C5.89582 5.29601 4.72887 5.61129 4.20229 6.52522L3.5341 7.62361C3.00817 8.53639 3.31916 9.70261 4.22975 10.2323V10.2323C4.82166 10.574 5.18629 11.2056 5.18629 11.8891C5.18629 12.5725 4.82166 13.2041 4.22975 13.5458V13.5458C3.32031 14.0719 3.00898 15.2353 3.5341 16.1454V16.1454L4.16568 17.2346C4.4124 17.6798 4.82636 18.0083 5.31595 18.1474C5.80554 18.2866 6.3304 18.2249 6.77438 17.976V17.976C7.21084 17.7213 7.73094 17.6516 8.2191 17.7822C8.70725 17.9128 9.12299 18.233 9.37392 18.6717C9.53845 18.9489 9.62686 19.2646 9.63021 19.587V19.587C9.63021 20.6435 10.4867 21.5 11.5433 21.5H12.7973C13.8502 21.5001 14.7053 20.6491 14.7103 19.5962V19.5962C14.7079 19.088 14.9086 18.6 15.2679 18.2407C15.6272 17.8814 16.1152 17.6807 16.6233 17.6831C16.9449 17.6917 17.2594 17.7798 17.5387 17.9394V17.9394C18.4515 18.4653 19.6177 18.1544 20.1474 17.2438V17.2438L20.8064 16.1454C21.0615 15.7075 21.1315 15.186 21.001 14.6964C20.8704 14.2067 20.55 13.7894 20.1108 13.5367V13.5367C19.6715 13.284 19.3511 12.8666 19.2206 12.3769C19.09 11.8873 19.16 11.3658 19.4151 10.928C19.581 10.6383 19.8211 10.3982 20.1108 10.2323V10.2323C21.0159 9.70289 21.3262 8.54349 20.8064 7.63277V7.63277V7.62361Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            <circle cx="12.1747" cy="11.8891" r="2.63616" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
        </svg>
    </a>
@endsection
