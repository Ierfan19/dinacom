@extends('user.layout.main')
@section('content')

<div class="page-content">
    <div class="row row-cols-1 row-cols-lg-4">
        <div class="col">
            <div class="card radius-10 overflow-hidden bg-gradient-cosmic">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-white">Total Orders</p>
                            <h5 class="mb-0 text-white">867</h5>
                        </div>
                        <div class="ms-auto text-white"><i class='bx bx-cart font-30'></i>
                        </div>
                    </div>
                    <div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
                        <div class="progress-bar bg-white" role="progressbar" style="width: 46%"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 overflow-hidden bg-gradient-burning">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-white">Total Income</p>
                            <h5 class="mb-0 text-white">$52,945</h5>
                        </div>
                        <div class="ms-auto text-white"><i class='bx bx-wallet font-30'></i>
                        </div>
                    </div>
                    <div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
                        <div class="progress-bar bg-white" role="progressbar" style="width: 72%"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 overflow-hidden bg-gradient-Ohhappiness">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-white">Total Users</p>
                            <h5 class="mb-0 text-white">24.5K</h5>
                        </div>
                        <div class="ms-auto text-white"><i class='bx bx-bulb font-30'></i>
                        </div>
                    </div>
                    <div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
                        <div class="progress-bar bg-white" role="progressbar" style="width: 68%"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 overflow-hidden bg-gradient-moonlit">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-white">Comments</p>
                            <h5 class="mb-0 text-white">869</h5>
                        </div>
                        <div class="ms-auto text-white"><i class='bx bx-chat font-30'></i>
                        </div>
                    </div>
                    <div class="progress  bg-white-2 radius-10 mt-4" style="height:4.5px;">
                        <div class="progress-bar bg-white" role="progressbar" style="width: 66%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->

    <div class="card radius-10">
        <div class="card-header border-bottom-0 bg-transparent">
            <div class="d-lg-flex align-items-center">
                <div>
                    <h6 class="font-weight-bold mb-2 mb-lg-0">Monthly Revenue</h6>
                </div>
                <div class="ms-lg-auto mb-2 mb-lg-0">
                   
                </div>
                <div>
                    <button type="button" class="btn btn-primary radius-10 ms-lg-3">Download CSV</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div id="chart1"></div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    $(document).ready(function() {
      viewerchart()
    })
  
    function viewerchart(){

  $.ajax({
    type: "get",
    url: "{{url('chart-viewer-user')}}",
    data: {},
    success: function(data) {
        
       
	var options = {
		series: [{
			name: 'Viewer',
			data: [4, 3, 10, 9, 29, 19, 22, 9, 12, 7, 19, 5]
		}],
		chart: {
			foreColor: '#9a9797',
			type: 'area',
			height: 380,
			zoom: {
				enabled: false
			},
			toolbar: {
				show: false
			},
			dropShadow: {
				enabled: false,
				top: 3,
				left: 14,
				blur: 4,
				opacity: 0.10,
			}
		},
		stroke: {
			width: 4,
			curve: 'smooth'
		},
		xaxis: {
			categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
		},
		dataLabels: {
			enabled: false
		},
		fill: {
			type: 'gradient',
			gradient: {
				shade: 'light',
				gradientToColors: ['#8833ff'],
				shadeIntensity: 1,
				type: 'vertical',
				opacityFrom: 0.8,
				opacityTo: 0.3,
				//stops: [0, 100, 100, 100]
			},
		},
		colors: ["#8833ff"],
		yaxis: {
		  labels: {
			formatter: function (value) {
			  return value + "$";
			}
		  },
		},
		markers: {
			size: 4,
			colors: ["#8833ff"],
			strokeColors: "#fff",
			strokeWidth: 2,
			hover: {
				size: 7,
			}
		},
		grid: {
		   show: true,
		   borderColor: '#ededed',
		   strokeDashArray: 4,
		}
	};
	var chart = new ApexCharts(document.querySelector("#chart1"), options);
	chart.render();

}})
    }
</script>
@endpush