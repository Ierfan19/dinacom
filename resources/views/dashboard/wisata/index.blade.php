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
                <button type="button" class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item" href="javascript:;">Action</a>
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
                                        </div>
                                        <div class="d-flex flex-wrap">
                                            <div class="d-flex align-items-center flex-nowrap">

                                                <a href="{{url('admin/wisata/create')}}" class="btn btn-success">Tambah</a>

                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap">
                                            <form action="{{url('/admin/wisata')}}" method="get">
                                                <div class="d-flex align-items-center flex-nowrap">
                                                    <p class="mb-0 font-13 text-nowrap">Show:</p>

                                                    <select class="form-control ms-2" name="paginate" id="">
                                                        <option value="10" {{$paginate == 10 ? 'selected' : ''}}>10</option>
                                                        <option value="25" {{$paginate == 25 ? 'selected' : ''}}>25</option>
                                                        <option value="50" {{$paginate == 50 ? 'selected' : ''}}>50</option>
                                                        <option value="100" {{$paginate == 100 ? 'selected' : ''}}>100</option>
                                                    </select>
                                                    <div class="mx-2"></div>
                                                    <button type="submit" class="me-3 btn btn-info  text-white">
                                                        <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                                                    </button>
                                                </div>
                                        </div>
                                        <div class="btn-group">

                                            <div class="d-flex col-sm-12">

                                                <input type="text" value="{{Request::get('cari')}}" name="cari" class="form-control" placeholder="Cari Wisata.....">
                                                <div class="col-sm-2"><button type="submit" class="me-3 btn btn-info"><i class="bi bi-search"></i></button></div>
                                            </div>
                                            </form>
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
                                @foreach($wisata as $row)

                                <div class="card product-card">
                                    <div class="d-flex align-items-center justify-content-end gap-3 position-absolute end-0 top-0 m-3">
                                        <!-- <a href="javascript:;">
                                            <div class="product-wishlist"> <i class="bx bx-heart"></i>
                                            </div>
                                        </a> -->
                                    </div>
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div class="p-3">
                                                <img src="{{asset('/')}}{{$row->gambar}}" style="max-width: 200px;object-fit: cover;height:200px;" class="img-fluid" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <div class="product-info">
                                                    <a href="javascript:;">
                                                        <p class="product-catergory font-13 mb-1">{{$row->nama}}</p>
                                                    </a>
                                                    <a href="ecommerce-product-details.html">
                                                        <h6 class="product-name mb-2">{{$row->nama}}</h6>
                                                    </a>
                                                    <p class="card-text">{{$row->nama}}.</p>
                                                    <div class="d-flex align-items-center">
                                                        <!-- <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                            <span class="fs-5">$49.00</span>
                                                        </div> -->
                                                    </div>
                                                    <div class="product-action mt-2">
                                                        <div class="d-flex gap-2">
                                                            <a href="javascript:;" class="btn btn-primary btn-ecomm"> <i class="bx bxs-cart-add"></i>Detail</a>
                                                            <a href="{{('wisata/edit')}}/{{$row->id}}" class="btn btn-light btn-ecomm">
                                                                <i class='bx bx-pen'></i>Edit</a>
                                                            <a onclick="return confirm('Apa Anda Yakin??')" href="{{('wisata/hapus')}}/{{$row->id}}" class="btn btn-danger">
                                                                <i class='bx bx-trash'></i>Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach


                            </div>
                            <hr>
                            <nav class="d-flex justify-content-between" aria-label="Page navigation">

                                {{$wisata->links()}}
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
<div class="modal fade" id="wisata" tabindex="-1" aria-labelledby="wisataLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="wisataLabel">Modal title</h1>
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