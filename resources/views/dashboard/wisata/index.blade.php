@extends('dashboard.layout.main')
@section('content')

<div class="page-content">

    <!--start breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">eCommerce</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0 align-items-center">
                    <li class="breadcrumb-item"><a href="javascript:;">
                            <ion-icon name="home-outline"></ion-icon>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">List View</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-outline-primary">Settings</button>
                <button type="button"
                    class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                    data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                        href="javascript:;">Action</a>
                    <a class="dropdown-item" href="javascript:;">Another action</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
                </div>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->

    <!--start shop area-->
    <section class="shop-page">
        <div class="shop-container">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="toolbox d-flex flex-row align-items-center gap-2">
                                        <div class="d-flex flex-wrap flex-grow-1 gap-1">
                                            <div class="d-flex align-items-center flex-nowrap">
                                                <p class="mb-0 font-13 text-nowrap">Sort By:</p>
                                                <select class="form-select ms-3">
                                                    <option value="menu_order" selected="selected">Default sorting
                                                    </option>
                                                    <option value="popularity">Sort by popularity</option>
                                                    <option value="rating">Sort by average rating</option>
                                                    <option value="date">Sort by newness</option>
                                                    <option value="price">Sort by price: low to high</option>
                                                    <option value="price-desc">Sort by price: high to low</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap">
                                            <div class="d-flex align-items-center flex-nowrap">

                                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    Tambah
                                                </button>

                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap">
                                            <div class="d-flex align-items-center flex-nowrap">
                                                <p class="mb-0 font-13 text-nowrap">Show:</p>
                                                <select class="form-select ms-3">
                                                    <option>9</option>
                                                    <option>12</option>
                                                    <option>16</option>
                                                    <option>20</option>
                                                    <option>50</option>
                                                    <option>100</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <a href="ecommerce-shop-grid-view.html" class="btn btn-outline-primary"><i
                                                    class='bx bxs-grid mx-0'></i></a>
                                            <a href="ecommerce-shop-list-view.html" class="btn btn-primary"><i
                                                    class='bx bx-list-ul mx-0'></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper">
                            <div class="card">
                                <div class="card-body">
                                    <div class="position-relative">
                                        <input type="text" class="form-control ps-5" placeholder="Search Product...">
                                        <span class="position-absolute top-50 product-show translate-middle-y">
                                            <ion-icon name="search-sharp" class="ms-3 fs-6"></ion-icon>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid">

                                <div class="card product-card">
                                    <div
                                        class="d-flex align-items-center justify-content-end gap-3 position-absolute end-0 top-0 m-3">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class="bx bx-heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div class="p-3">
                                                <img src="assets/images/products/01.png" class="img-fluid" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <div class="product-info">
                                                    <a href="javascript:;">
                                                        <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                    </a>
                                                    <a href="ecommerce-product-details.html">
                                                        <h6 class="product-name mb-2">Product Short Name</h6>
                                                    </a>
                                                    <p class="card-text">This is a wider card with supporting text
                                                        below as a natural lead-in to additional content. This
                                                        content is a little bit longer.</p>
                                                    <div class="d-flex align-items-center">
                                                        <div class="mb-1 product-price"> <span
                                                                class="me-1 text-decoration-line-through">$99.00</span>
                                                            <span class="fs-5">$49.00</span>
                                                        </div>
                                                        <div class="cursor-pointer ms-auto"> <i
                                                                class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-action mt-2">
                                                        <div class="d-flex gap-2">
                                                            <a href="javascript:;" class="btn btn-primary btn-ecomm"> <i
                                                                    class="bx bxs-cart-add"></i>Add to Cart</a>
                                                            <a href="javascript:;" class="btn btn-light btn-ecomm">
                                                                <i class='bx bx-shopping-bag'></i>Buy Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card product-card">
                                    <div
                                        class="d-flex align-items-center justify-content-end gap-3 position-absolute end-0 top-0 m-3">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class="bx bx-heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div class="p-3">
                                                <img src="assets/images/products/02.png" class="img-fluid" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <div class="product-info">
                                                    <a href="javascript:;">
                                                        <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                    </a>
                                                    <a href="ecommerce-product-details.html">
                                                        <h6 class="product-name mb-2">Product Short Name</h6>
                                                    </a>
                                                    <p class="card-text">This is a wider card with supporting text
                                                        below as a natural lead-in to additional content. This
                                                        content is a little bit longer.</p>
                                                    <div class="d-flex align-items-center">
                                                        <div class="mb-1 product-price"> <span
                                                                class="me-1 text-decoration-line-through">$99.00</span>
                                                            <span class="fs-5">$49.00</span>
                                                        </div>
                                                        <div class="cursor-pointer ms-auto"> <i
                                                                class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-action mt-2">
                                                        <div class="d-flex gap-2">
                                                            <a href="javascript:;" class="btn btn-primary btn-ecomm"> <i
                                                                    class="bx bxs-cart-add"></i>Detail</a>
                                                            <a href="javascript:;" class="btn btn-light btn-ecomm">
                                                                <i class='bx bx-shopping-bag'></i>Buy Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card product-card">
                                    <div
                                        class="d-flex align-items-center justify-content-end gap-3 position-absolute end-0 top-0 m-3">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class="bx bx-heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div class="p-3">
                                                <img src="assets/images/products/03.png" class="img-fluid" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <div class="product-info">
                                                    <a href="javascript:;">
                                                        <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                    </a>
                                                    <a href="ecommerce-product-details.html">
                                                        <h6 class="product-name mb-2">Product Short Name</h6>
                                                    </a>
                                                    <p class="card-text">This is a wider card with supporting text
                                                        below as a natural lead-in to additional content. This
                                                        content is a little bit longer.</p>
                                                    <div class="d-flex align-items-center">
                                                        <div class="mb-1 product-price"> <span
                                                                class="me-1 text-decoration-line-through">$99.00</span>
                                                            <span class="fs-5">$49.00</span>
                                                        </div>
                                                        <div class="cursor-pointer ms-auto"> <i
                                                                class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-action mt-2">
                                                        <div class="d-flex gap-2">
                                                            <a href="javascript:;" class="btn btn-primary btn-ecomm"> <i
                                                                    class="bx bxs-cart-add"></i>Add to Cart</a>
                                                            <a href="javascript:;" class="btn btn-light btn-ecomm">
                                                                <i class='bx bx-shopping-bag'></i>Buy Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card product-card">
                                    <div
                                        class="d-flex align-items-center justify-content-end gap-3 position-absolute end-0 top-0 m-3">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class="bx bx-heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div class="p-3">
                                                <img src="assets/images/products/04.png" class="img-fluid" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <div class="product-info">
                                                    <a href="javascript:;">
                                                        <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                    </a>
                                                    <a href="ecommerce-product-details.html">
                                                        <h6 class="product-name mb-2">Product Short Name</h6>
                                                    </a>
                                                    <p class="card-text">This is a wider card with supporting text
                                                        below as a natural lead-in to additional content. This
                                                        content is a little bit longer.</p>
                                                    <div class="d-flex align-items-center">
                                                        <div class="mb-1 product-price"> <span
                                                                class="me-1 text-decoration-line-through">$99.00</span>
                                                            <span class="fs-5">$49.00</span>
                                                        </div>
                                                        <div class="cursor-pointer ms-auto"> <i
                                                                class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-action mt-2">
                                                        <div class="d-flex gap-2">
                                                            <a href="javascript:;" class="btn btn-primary btn-ecomm"> <i
                                                                    class="bx bxs-cart-add"></i>Add to Cart</a>
                                                            <a href="javascript:;" class="btn btn-light btn-ecomm">
                                                                <i class='bx bx-shopping-bag'></i>Buy Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card product-card">
                                    <div
                                        class="d-flex align-items-center justify-content-end gap-3 position-absolute end-0 top-0 m-3">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class="bx bx-heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div class="p-3">
                                                <img src="assets/images/products/05.png" class="img-fluid" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <div class="product-info">
                                                    <a href="javascript:;">
                                                        <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                    </a>
                                                    <a href="ecommerce-product-details.html">
                                                        <h6 class="product-name mb-2">Product Short Name</h6>
                                                    </a>
                                                    <p class="card-text">This is a wider card with supporting text
                                                        below as a natural lead-in to additional content. This
                                                        content is a little bit longer.</p>
                                                    <div class="d-flex align-items-center">
                                                        <div class="mb-1 product-price"> <span
                                                                class="me-1 text-decoration-line-through">$99.00</span>
                                                            <span class="fs-5">$49.00</span>
                                                        </div>
                                                        <div class="cursor-pointer ms-auto"> <i
                                                                class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-action mt-2">
                                                        <div class="d-flex gap-2">
                                                            <a href="javascript:;" class="btn btn-primary btn-ecomm"> <i
                                                                    class="bx bxs-cart-add"></i>Add to Cart</a>
                                                            <a href="javascript:;" class="btn btn-light btn-ecomm">
                                                                <i class='bx bx-shopping-bag'></i>Buy Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card product-card">
                                    <div
                                        class="d-flex align-items-center justify-content-end gap-3 position-absolute end-0 top-0 m-3">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class="bx bx-heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div class="p-3">
                                                <img src="assets/images/products/06.png" class="img-fluid" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <div class="product-info">
                                                    <a href="javascript:;">
                                                        <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                    </a>
                                                    <a href="ecommerce-product-details.html">
                                                        <h6 class="product-name mb-2">Product Short Name</h6>
                                                    </a>
                                                    <p class="card-text">This is a wider card with supporting text
                                                        below as a natural lead-in to additional content. This
                                                        content is a little bit longer.</p>
                                                    <div class="d-flex align-items-center">
                                                        <div class="mb-1 product-price"> <span
                                                                class="me-1 text-decoration-line-through">$99.00</span>
                                                            <span class="fs-5">$49.00</span>
                                                        </div>
                                                        <div class="cursor-pointer ms-auto"> <i
                                                                class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-action mt-2">
                                                        <div class="d-flex gap-2">
                                                            <a href="javascript:;" class="btn btn-primary btn-ecomm"> <i
                                                                    class="bx bxs-cart-add"></i>Add to Cart</a>
                                                            <a href="javascript:;" class="btn btn-light btn-ecomm">
                                                                <i class='bx bx-shopping-bag'></i>Buy Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="card product-card">
                                    <div
                                        class="d-flex align-items-center justify-content-end gap-3 position-absolute end-0 top-0 m-3">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class="bx bx-heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div class="p-3">
                                                <img src="assets/images/products/07.png" class="img-fluid" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <div class="product-info">
                                                    <a href="javascript:;">
                                                        <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                    </a>
                                                    <a href="ecommerce-product-details.html">
                                                        <h6 class="product-name mb-2">Product Short Name</h6>
                                                    </a>
                                                    <p class="card-text">This is a wider card with supporting text
                                                        below as a natural lead-in to additional content. This
                                                        content is a little bit longer.</p>
                                                    <div class="d-flex align-items-center">
                                                        <div class="mb-1 product-price"> <span
                                                                class="me-1 text-decoration-line-through">$99.00</span>
                                                            <span class="fs-5">$49.00</span>
                                                        </div>
                                                        <div class="cursor-pointer ms-auto"> <i
                                                                class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-action mt-2">
                                                        <div class="d-flex gap-2">
                                                            <a href="javascript:;" class="btn btn-primary btn-ecomm"> <i
                                                                    class="bx bxs-cart-add"></i>Add to Cart</a>
                                                            <a href="javascript:;" class="btn btn-light btn-ecomm">
                                                                <i class='bx bx-shopping-bag'></i>Buy Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <hr>
                            <nav class="d-flex justify-content-between" aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="javascript:;"><i
                                                class='bx bx-chevron-left'></i> Prev</a>
                                    </li>
                                </ul>
                                <ul class="pagination">
                                    <li class="page-item active d-none d-sm-block" aria-current="page"><span
                                            class="page-link">1<span class="visually-hidden">(current)</span></span>
                                    </li>
                                    <li class="page-item d-none d-sm-block"><a class="page-link"
                                            href="javascript:;">2</a>
                                    </li>
                                    <li class="page-item d-none d-sm-block"><a class="page-link"
                                            href="javascript:;">3</a>
                                    </li>
                                    <li class="page-item d-none d-sm-block"><a class="page-link"
                                            href="javascript:;">4</a>
                                    </li>
                                    <li class="page-item d-none d-sm-block"><a class="page-link"
                                            href="javascript:;">5</a>
                                    </li>
                                </ul>
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="javascript:;"
                                            aria-label="Next">Next <i class='bx bx-chevron-right'></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
</div>
</section>
<!--end shop area-->

</div>
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection