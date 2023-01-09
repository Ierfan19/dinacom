import { useEffect, useState } from "react"
import $ from 'jquery'
import { Inertia } from "@inertiajs/inertia"
import { useForm } from "@inertiajs/inertia-react"

const Content = ({ produk, wisata, user, tahun, user_login }) => {
    const [year, setYear] = useState('')

    const viewerchart = () => {
        $.ajax({
            type: "get",
            url: "{{url('chart-viewer')}}",
            data: {},
            success: function (data) {

                var ctx = document.getElementById('chart1').getContext('2d');

                var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
                gradientStroke1.addColorStop(0, '#005bea');
                gradientStroke1.addColorStop(1, '#00c6fb');

                var gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
                gradientStroke2.addColorStop(0, '#ff6a00');
                gradientStroke2.addColorStop(1, '#ee0979');


                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        datasets: [{
                            label: 'Produk',
                            data: [data.januari1, data.februari1, data.maret1, data.april1, data.mei1, data.juni1, data.juli, data.agustus1, data.september1, data.oktober1, data.november1, data.desember1],
                            tension: 0.4,
                            backgroundColor: [
                                gradientStroke1
                            ],
                            borderColor: [
                                gradientStroke1
                            ],
                            borderWidth: 0,

                        }, {
                            label: 'Wisata',
                            data: [data.januari, data.februari, data.maret, data.april, data.mei, data.juni, data.juli, data.agustus, data.september, data.oktober, data.november, data.desember],
                            tension: 0.4,
                            backgroundColor: [
                                gradientStroke2
                            ],
                            borderColor: [
                                gradientStroke2
                            ],
                            borderWidth: 3,
                            fill: {
                                target: 'origin',
                                above: 'rgb(238 9 121 / 5%)',
                                below: 'rgb(238 9 121 / 5%)'
                            },

                        }],
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    },
                    options: {
                        borderRadius: 30,
                        categoryPercentage: 0.3,
                        maintainAspectRatio: false,
                        //cutout: 130,
                        plugins: {
                            legend: {
                                display: true,
                                position: 'bottom',
                            }
                        }

                    }
                });
            }
        })
    }

    useEffect(() => {
        $(function () {
            viewerchart()
        })
    }, [])

    const handleSubmit = (e) => {
        e.preventDefault()

        Inertia.post(`/edit-chart-tahun/${tahun.id}`, { year })
    }
    return (
        <>
            <div className="page-content">
                <div className="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div className="breadcrumb-title pe-3">Dashboard</div>
                    <div className="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol className="breadcrumb mb-0 p-0 align-items-center">
                                <li className="breadcrumb-item"><a href="#">
                                    <ion-icon name="home-outline"></ion-icon>
                                </a>
                                </li>
                                <li className="breadcrumb-item active" aria-current="page">eCommerce</li>
                            </ol>
                        </nav>
                    </div>
                    <div className="ms-auto">
                    </div>
                </div>
                <div className="row row-cols-1 row-cols-md-2 row-cols-xl-3 row-cols-xxl-3">
                    <div className="col">
                        <div className="card radius-10">
                            <div className="card-body">
                                <div className="d-flex align-items-center">
                                    <div className="">
                                        <p className="mb-1">Total Produk</p>
                                        <h4 className="mb-0 text-primary">{produk}</h4>
                                    </div>
                                    <div className="ms-auto text-primary fs-2">
                                        <ion-icon name="bag-handle-sharp"></ion-icon>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="col">
                        <div className="card radius-10">
                            <div className="card-body">
                                <div className="d-flex align-items-center">
                                    <div className="">
                                        <p className="mb-1">Total Wisata</p>
                                        <h4 className="mb-0 text-danger">{wisata}</h4>
                                    </div>
                                    <div className="ms-auto text-danger fs-2">
                                        <ion-icon name="pie-chart-sharp"></ion-icon>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="col">
                        <div className="card radius-10">
                            <div className="card-body">
                                <div className="d-flex align-items-center">
                                    <div className="">
                                        <p className="mb-1">Total Users</p>
                                        <h4 className="mb-0 text-info">{user}</h4>
                                    </div>
                                    <div className="ms-auto text-info fs-2">
                                        <ion-icon name="people-sharp"></ion-icon>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {/* < div className="col">
                    <div className="card radius-10">
                        <div className="card-body">
                            <div className="d-flex align-items-center">
                                <div className="">
                                    <p className="mb-1">Messages</p>
                                    <h4 className="mb-0 text-tiffany">169</h4>
                                </div>
                                <div className="ms-auto widget-icon bg-light-tiffany text-tiffany">
                                    <ion-icon name="chatbubbles-sharp"></ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </> */}
                </div>

                <div className="card radius-10 overflow-hidden w-100">
                    <div className="card-body">
                        <div className="d-flex align-items-center mb-3">
                            <h6 className="mb-0">Grafik Viewer</h6>
                            <div className="dropdown options ms-auto">
                                {
                                    tahun ? <>
                                        <form onSubmit={handleSubmit}>
                                            <div className="row col-md-6">
                                                <div className="d-flex">
                                                    <input className="form-control col-md-10 text-white" onChange={(e) => setYear(e.target.value)} name="tahun" type="text" defaultValue={tahun.tahun} />
                                                    <button className="btn btn-primary" type="submit"><i className="fs-6 bi bi-arrow-right-circle"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </> : ''
                                }
                            </div>
                        </div>
                        <div className="chart-container1">
                            <canvas id="chart1"></canvas>
                        </div>
                    </div>
                </div>

                <div className="row">
                    <div className="col-12 col-lg-12 col-xl-6">
                        <div className="card radius-10 w-100">
                            <div className="card-body">
                                <div className="d-flex align-items-center mb-3">
                                    <h6 className="mb-0">Top Categories</h6>
                                    <div className="dropdown options ms-auto">
                                        <div className="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                                            <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                                        </div>
                                        <ul className="dropdown-menu">
                                            <li><a className="dropdown-item" href="#">Action</a></li>
                                            <li><a className="dropdown-item" href="#">Another action</a></li>
                                            <li><a className="dropdown-item" href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div className="row row-cols-1 row-cols-md-2 g-3 mt-2 align-items-center">
                                    <div className="col-lg-7 col-xl-7 col-xxl-8">
                                        <div className="chart-container6">
                                            <div className="piechart-legend">
                                                <h2 className="mb-1">68%</h2>
                                                <h6 className="mb-0">Total Sales</h6>
                                            </div>
                                            <canvas id="chart2"></canvas>
                                        </div>
                                    </div>
                                    <div className="col-lg-5 col-xl-5 col-xxl-4">
                                        <div className="">
                                            <ul className="list-group list-group-flush">
                                                <li className="list-group-item border-0 d-flex align-items-center gap-2">
                                                    <ion-icon name="ellipse-sharp" className="text-info"></ion-icon>
                                                    <span>Electronics</span>
                                                </li>
                                                <li className="list-group-item border-0 d-flex align-items-center gap-2">
                                                    <ion-icon name="ellipse-sharp" className="text-danger"></ion-icon>
                                                    <span>Furniture</span>
                                                </li>
                                                <li className="list-group-item border-0 d-flex align-items-center gap-2">
                                                    <ion-icon name="ellipse-sharp" className="text-success"></ion-icon>
                                                    <span>Fashion</span>
                                                </li>
                                                <li className="list-group-item border-0 d-flex align-items-center gap-2">
                                                    <ion-icon name="ellipse-sharp" className="text-primary"></ion-icon>
                                                    <span>Accessories</span>
                                                </li>
                                                <li className="list-group-item border-0 d-flex align-items-center gap-2">
                                                    <ion-icon name="ellipse-sharp" className="text-warning"></ion-icon>
                                                    <span>Mobiles</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="col-12 col-lg-12 col-xl-6">
                        <div className="card radius-10 w-100">
                            <div className="card-body">
                                <div className="d-flex align-items-center mb-3">
                                    <h6 className="mb-0">Customers</h6>
                                    <div className="dropdown options ms-auto">
                                        <div className="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                                            <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                                        </div>
                                        <ul className="dropdown-menu">
                                            <li><a className="dropdown-item" href="#">Action</a></li>
                                            <li><a className="dropdown-item" href="#">Another action</a></li>
                                            <li><a className="dropdown-item" href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div className="row row-cols-1 row-cols-md-2 g-3 mt-2 align-items-center">
                                    <div className="col-lg-7 col-xl-7 col-xxl-7">
                                        <div className="chart-container6">
                                            <div className="piechart-legend">
                                                <h2 className="mb-1">48K</h2>
                                                <h6 className="mb-0">Customers</h6>
                                            </div>
                                            <canvas id="chart3"></canvas>
                                        </div>
                                    </div>
                                    <div className="col-lg-5 col-xl-5 col-xxl-5">
                                        <div className="">
                                            <div className="d-flex align-items-start gap-2 mb-3">
                                                <div>
                                                    <ion-icon name="ellipse-sharp" className="text-info"></ion-icon>
                                                </div>
                                                <div>
                                                    <p className="mb-1">Current Customers</p>
                                                    <p className="mb-0 h5">66%</p>
                                                </div>
                                            </div>
                                            <div className="d-flex align-items-start gap-2 mb-3">
                                                <div>
                                                    <ion-icon name="ellipse-sharp" className="text-danger"></ion-icon>
                                                </div>
                                                <div>
                                                    <p className="mb-1">New Customers</p>
                                                    <p className="mb-0 h5">48%</p>
                                                </div>
                                            </div>
                                            <div className="d-flex align-items-start gap-2">
                                                <div>
                                                    <ion-icon name="ellipse-sharp" className="text-success"></ion-icon>
                                                </div>
                                                <div>
                                                    <p className="mb-1">Retargeted Customers</p>
                                                    <p className="mb-0 h5">25%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    )
}

export default Content