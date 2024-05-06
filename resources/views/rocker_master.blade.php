<!doctype html>
<html lang="en">

<head>
    @include('rocker_css')
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--start header wrapper-->
        <div class="header-wrapper">
            <!--start header -->
            @include('rocker_top')
            <!--end header -->
            <!--navigation-->
           @include('rocker_menu')
            <!--end navigation-->
        </div>
        <!--end header wrapper-->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                @yield('noi_dung')
                <div class="row">
                    <div class="card-body">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class=""></li>
                                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="active" aria-current="true"></li>
                                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class=""></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item">
                                    <img src="assets/images/gallery/26.png" class="d-block w-10" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>First slide label</h5>
                                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                    </div>
                                </div>
                                <div class="carousel-item active">
                                    <img src="assets/images/gallery/27.png" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Second slide label</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/gallery/28.png" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Third slide label</h5>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">	<span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-3">
						<div class="card">
							<div class="card-body">
								<h5 class="my-3">Filter Recipes</h5>
								<div class="fm-menu">
									<div class="list-group list-group-flush"> <a href="javascript:;" class="list-group-item py-1"><i class="fa-solid fa-utensils me-2"></i><span>Diet</span></a>
										<a href="javascript:;" class="list-group-item py-1"><i class="fa-solid fa-hand-dots me-2"></i><span>Allergies</span></a>
										<a href="javascript:;" class="list-group-item py-1"><i class="bx bx-analyse me-2"></i><span>Cusine</span></a>
										<a href="javascript:;" class="list-group-item py-1"><i class="fa-solid fa-bullseye me-2"></i><span>Goals</span></a>
										<a href="javascript:;" class="list-group-item py-1"><i class="fa-solid fa-spray-can-sparkles me-2"></i><span>Freshness</span></a>
										<a href="javascript:;" class="list-group-item py-1"><i class="bx bx-file me-2"></i>
				                    <span>Documents</span></a>
										<a href="javascript:;" class="list-group-item py-1"><i class="fa-solid fa-wand-sparkles me-2"></i><span>Activeness</span></a>
                                        <a href="javascript:;" class="list-group-item py-1"><i class="fa-solid fa-calendar-days me-2"></i><span>Even</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<h5 class="mb-0 text-primary font-weight-bold">45.5 GB <span class="float-end text-secondary">50 GB</span></h5>
								<p class="mb-0 mt-2"><span class="text-secondary">Used</span><span class="float-end text-primary">Upgrade</span>
								</p>
								<div class="progress mt-3" style="height:7px;">
									<div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
									<div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
									<div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="mt-3"></div>
								<div class="d-flex align-items-center">
									<div class="fm-file-box bg-light-primary text-primary"><i class="bx bx-image"></i>
									</div>
									<div class="flex-grow-1 ms-2">
										<h6 class="mb-0">Images</h6>
										<p class="mb-0 text-secondary">1,756 files</p>
									</div>
									<h6 class="text-primary mb-0">15.3 GB</h6>
								</div>
								<div class="d-flex align-items-center mt-3">
									<div class="fm-file-box bg-light-success text-success"><i class="bx bxs-file-doc"></i>
									</div>
									<div class="flex-grow-1 ms-2">
										<h6 class="mb-0">Documents</h6>
										<p class="mb-0 text-secondary">123 files</p>
									</div>
									<h6 class="text-primary mb-0">256 MB</h6>
								</div>
								<div class="d-flex align-items-center mt-3">
									<div class="fm-file-box bg-light-danger text-danger"><i class="bx bx-video"></i>
									</div>
									<div class="flex-grow-1 ms-2">
										<h6 class="mb-0">Media Files</h6>
										<p class="mb-0 text-secondary">24 files</p>
									</div>
									<h6 class="text-primary mb-0">3.4 GB</h6>
								</div>
								<div class="d-flex align-items-center mt-3">
									<div class="fm-file-box bg-light-warning text-warning"><i class="bx bx-image"></i>
									</div>
									<div class="flex-grow-1 ms-2">
										<h6 class="mb-0">Other Files</h6>
										<p class="mb-0 text-secondary">458 files</p>
									</div>
									<h6 class="text-primary mb-0">3 GB</h6>
								</div>
								<div class="d-flex align-items-center mt-3">
									<div class="fm-file-box bg-light-info text-info"><i class="bx bx-image"></i>
									</div>
									<div class="flex-grow-1 ms-2">
										<h6 class="mb-0">Unknown Files</h6>
										<p class="mb-0 text-secondary">57 files</p>
									</div>
									<h6 class="text-primary mb-0">178 GB</h6>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-12 col-lg-9">
                        <div class="page-content">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-lg-3 col-xl-2">
                                                    <a href="ecommerce-add-new-products.html" class="btn btn-primary mb-3 mb-lg-0"><i class="bx bxs-plus-square"></i>New dish</a>
                                                </div>
                                                <div class="col-lg-9 col-xl-10">
                                                    <form class="float-lg-end">
                                                        <div class="row row-cols-lg-2 row-cols-xl-auto g-2">
                                                            <div class="col">
                                                                <div class="position-relative">
                                                                    <input type="text" class="form-control ps-5" placeholder="Search Dish..."> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                                    <button type="button" class="btn btn-white">Sort By</button>
                                                                    <div class="btn-group" role="group">
                                                                      <button id="btnGroupDrop1" type="button" class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="bx bx-chevron-down"></i>
                                                                      </button>
                                                                      <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                                        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                                        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                                      </ul>
                                                                    </div>
                                                                  </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                                    <button type="button" class="btn btn-white">Collection Type</button>
                                                                    <div class="btn-group" role="group">
                                                                      <button id="btnGroupDrop1" type="button" class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="bx bxs-category"></i>
                                                                      </button>
                                                                      <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                                        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                                        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                                      </ul>
                                                                    </div>
                                                                  </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="btn-group" role="group">
                                                                    <button type="button" class="btn btn-white">Price Range</button>
                                                                    <div class="btn-group" role="group">
                                                                      <button id="btnGroupDrop1" type="button" class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="bx bx-slider"></i>
                                                                      </button>
                                                                      <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="btnGroupDrop1">
                                                                        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                                        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                                      </ul>
                                                                    </div>
                                                                  </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 product-grid">
                                <div class="col">
                                    <div class="card">
                                        <img src="assets/images/products/2.png" class="card-img-top" alt="...">
                                        <div class="">
                                            <div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-title cursor-pointer">Abalone porridge</h6>
                                            <div class="clearfix">
                                                <i class="fa-regular fa-clock">30 minitue</i>
                                                <p class="mb-0 float-end fw-bold"><span class="me-2 text-decoration-line-through text-secondary">$350</span><span>$240</span></p>
                                            </div>
                                            <div class="d-flex align-items-center mt-3 fs-6">
                                              <div class="cursor-pointer">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-secondary"></i>
                                              </div>
                                              <p class="mb-0 ms-auto">4.2(182)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <img src="assets/images/products/3.png" class="card-img-top" alt="...">
                                        <div class="">
                                            <div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-title cursor-pointer">Mix salad</h6>
                                            <div class="clearfix">
                                                <i class="fa-regular fa-clock">30 minitue</i>
                                                <p class="mb-0 float-end fw-bold"><span class="me-2 text-decoration-line-through text-secondary">$350</span><span>$240</span></p>
                                            </div>
                                            <div class="d-flex align-items-center mt-3 fs-6">
                                              <div class="cursor-pointer">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-secondary"></i>
                                              </div>
                                              <p class="mb-0 ms-auto">4.2(182)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <img src="assets/images/products/4.png" class="card-img-top" alt="...">
                                        <div class="">
                                            <div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-title cursor-pointer">Steak</h6>
                                            <div class="clearfix">
                                                <i class="fa-regular fa-clock">30 minitue</i>
                                                <p class="mb-0 float-end fw-bold"><span class="me-2 text-decoration-line-through text-secondary">$350</span><span>$240</span></p>
                                            </div>
                                            <div class="d-flex align-items-center mt-3 fs-6">
                                              <div class="cursor-pointer">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-secondary"></i>
                                              </div>
                                              <p class="mb-0 ms-auto">4.2(182)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <img src="assets/images/products/5.png" class="card-img-top" alt="...">
                                        <div class="">
                                            <div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-title cursor-pointer">Pasta</h6>
                                            <div class="clearfix">
                                                <i class="fa-regular fa-clock">30 minitue</i>
                                                <p class="mb-0 float-end fw-bold"><span class="me-2 text-decoration-line-through text-secondary">$350</span><span>$240</span></p>
                                            </div>
                                            <div class="d-flex align-items-center mt-3 fs-6">
                                              <div class="cursor-pointer">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-secondary"></i>
                                              </div>
                                              <p class="mb-0 ms-auto">4.2(182)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <img src="assets/images/products/6.png" class="card-img-top" alt="...">
                                        <div class="">
                                            <div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-title cursor-pointer">Fried shrimp</h6>
                                            <div class="clearfix">
                                                <i class="fa-regular fa-clock">30 minitue</i>
                                                <p class="mb-0 float-end fw-bold"><span class="me-2 text-decoration-line-through text-secondary">$350</span><span>$240</span></p>
                                            </div>
                                            <div class="d-flex align-items-center mt-3 fs-6">
                                              <div class="cursor-pointer">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-secondary"></i>
                                              </div>
                                              <p class="mb-0 ms-auto">4.2(182)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <img src="assets/images/products/6.png" class="card-img-top" alt="...">
                                        <div class="">
                                            <div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-title cursor-pointer">Nest Shaped Chair</h6>
                                            <div class="clearfix">
                                                <p class="mb-0 float-start"><strong>134</strong> Sales</p>
                                                <p class="mb-0 float-end fw-bold"><span class="me-2 text-decoration-line-through text-secondary">$350</span><span>$240</span></p>
                                            </div>
                                            <div class="d-flex align-items-center mt-3 fs-6">
                                              <div class="cursor-pointer">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-secondary"></i>
                                              </div>
                                              <p class="mb-0 ms-auto">4.2(182)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <img src="assets/images/products/5.png" class="card-img-top" alt="...">
                                        <div class="">
                                            <div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-title cursor-pointer">Nest Shaped Chair</h6>
                                            <div class="clearfix">
                                                <p class="mb-0 float-start"><strong>134</strong> Sales</p>
                                                <p class="mb-0 float-end fw-bold"><span class="me-2 text-decoration-line-through text-secondary">$350</span><span>$240</span></p>
                                            </div>
                                            <div class="d-flex align-items-center mt-3 fs-6">
                                              <div class="cursor-pointer">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-secondary"></i>
                                              </div>
                                              <p class="mb-0 ms-auto">4.2(182)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <img src="assets/images/products/4.png" class="card-img-top" alt="...">
                                        <div class="">
                                            <div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-title cursor-pointer">Nest Shaped Chair</h6>
                                            <div class="clearfix">
                                                <p class="mb-0 float-start"><strong>134</strong> Sales</p>
                                                <p class="mb-0 float-end fw-bold"><span class="me-2 text-decoration-line-through text-secondary">$350</span><span>$240</span></p>
                                            </div>
                                            <div class="d-flex align-items-center mt-3 fs-6">
                                              <div class="cursor-pointer">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-secondary"></i>
                                              </div>
                                              <p class="mb-0 ms-auto">4.2(182)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <img src="assets/images/products/3.png" class="card-img-top" alt="...">
                                        <div class="">
                                            <div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-title cursor-pointer">Nest Shaped Chair</h6>
                                            <div class="clearfix">
                                                <p class="mb-0 float-start"><strong>134</strong> Sales</p>
                                                <p class="mb-0 float-end fw-bold"><span class="me-2 text-decoration-line-through text-secondary">$350</span><span>$240</span></p>
                                            </div>
                                            <div class="d-flex align-items-center mt-3 fs-6">
                                              <div class="cursor-pointer">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-secondary"></i>
                                              </div>
                                              <p class="mb-0 ms-auto">4.2(182)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <img src="assets/images/products/2.png" class="card-img-top" alt="...">
                                        <div class="">
                                            <div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-title cursor-pointer">Nest Shaped Chair</h6>
                                            <div class="clearfix">
                                                <p class="mb-0 float-start"><strong>134</strong> Sales</p>
                                                <p class="mb-0 float-end fw-bold"><span class="me-2 text-decoration-line-through text-secondary">$350</span><span>$240</span></p>
                                            </div>
                                            <div class="d-flex align-items-center mt-3 fs-6">
                                              <div class="cursor-pointer">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-secondary"></i>
                                              </div>
                                              <p class="mb-0 ms-auto">4.2(182)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end row-->
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        @include('rocker_foot')
    </div>
    <!--end wrapper-->
    <!--start switcher-->
    <div class="switcher-wrapper">
        <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
        </div>
        <div class="switcher-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
                <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
            </div>
            <hr />
            <h6 class="mb-0">Theme Styles</h6>
            <hr />
            <div class="d-flex align-items-center justify-content-between">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
                    <label class="form-check-label" for="lightmode">Light</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
                    <label class="form-check-label" for="darkmode">Dark</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
                    <label class="form-check-label" for="semidark">Semi Dark</label>
                </div>
            </div>
            <hr />
            <div class="form-check">
                <input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
                <label class="form-check-label" for="minimaltheme">Minimal Theme</label>
            </div>
            <hr />
            <h6 class="mb-0">Header Colors</h6>
            <hr />
            <div class="header-colors-indigators">
                <div class="row row-cols-auto g-3">
                    <div class="col">
                        <div class="indigator headercolor1" id="headercolor1"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor2" id="headercolor2"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor3" id="headercolor3"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor4" id="headercolor4"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor5" id="headercolor5"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor6" id="headercolor6"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor7" id="headercolor7"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor8" id="headercolor8"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end switcher-->
    <!-- Bootstrap JS -->
    @include('rocker_js')
</body>

</html>
