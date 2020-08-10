@section('title')
{{ env('APP_NAME') }} - Dashboard
@endsection
@extends('dashboard.layouts.main')
@section('style')

@endsection
@section('main-content')

<!-- Start Contentbar -->
<div class="contentbar" style="margin-top: 5rem;">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12 col-xl-9">
            <!-- Start row -->
            <div class="row">
                <!-- Start col -->
                <div class="col-lg-12 col-xl-4">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-7">
                                    <h4>{{ $enroll_count }}</h4>
                                    <p class="font-14 mb-0">Total Enroll</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End col -->
                <!-- Start col -->
                <div class="col-lg-12 col-xl-4">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-7">
                                    <h4>{{ $blog_count }}</h4>
                                    <p class="font-14 mb-0">Total Blog</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End col -->
                <!-- Start col -->
                <div class="col-lg-12 col-xl-4">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-7">
                                    <h4>{{ $course_count }}</h4>
                                    <p class="font-14 mb-0">Total Course</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End col -->
                <!-- Start col -->

                {{-- TODO::CHART GOES HERE --}}
                <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Payment Chart</h5>
                </div>
                <div class="card-body">
                    <div id="bar-chart"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
                {{-- TODO::CHART GOES HERE --}}

                <!-- End col -->
            </div>
            <!-- End row -->
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h5 class="card-title mb-0">Teams</h5>
                        </div>
                        <div class="col-3">
                            <div class="dropdown">
                                <button class="btn btn-link p-0 font-18 float-right" type="button" id="widgetRevenue" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetRevenue">
                                    <a class="dropdown-item font-13" href="#">Refresh</a>
                                    <a class="dropdown-item font-13" href="#">Export</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="user-slider">

                    @foreach ($teams as $team)
                        <div class="user-slider-item">
                            <div class="card-body text-center">
                                <span class="action-icon badge badge-primary-inverse">JD</span>
                                <h5>{{ $team->name }}</h5>
                                <p>{{ $team->email }}</p>
                                <p><span class="badge badge-primary-inverse">{{ $team->position }}</span></p>
                                <div class="button-list mt-4">
                                    <a href="{{ $team->fb }}" class="btn btn-round btn-secondary-rgba"><i class="feather icon-facebook"></i></a>
                                    <a href="{{ $team->tw }}" class="btn btn-round btn-secondary-rgba"><i class="feather icon-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@section('script')

<script>
    /* -- Apex Bar Chart -- */
    var options = {
      series: [{
      name: 'Payments',
      data: [{{ $jan }}, {{ $feb }}, {{ $mar }}, {{ $apr }}, {{ $may }}, {{ $june }}, {{ $july }}, {{ $aug }} , {{ $sep }}, {{ $oct }}, {{ $nov }}, {{ $dec }}]
    }],
      annotations: {
      points: [{
        x: 'Bananas',
        seriesIndex: 0,
        label: {
          borderColor: '#506fe4',
          offsetY: 0,
          style: {
            color: '#fff',
            background: '#506fe4',
          },
          text: 'Bananas are good',
        }
      }]
    },
    chart: {
      height: 285,
      type: 'bar',
      toolbar: {
        show: false
      }
    },
    plotOptions: {
      bar: {
        columnWidth: '50%',
        endingShape: 'rounded'  
      }
    },
    colors: ['#506fe4'],
    dataLabels: {
      enabled: false
    },
    stroke: {
      width: 2
    },    
    grid: {
      row: {
        colors: ['#fff', '#fff']
      }
    },
    xaxis: {
      labels: {
        rotate: -45
      },
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      tickPlacement: 'on'
    },
    yaxis: {
      title: {
        text: 'Payments',
      },
    },
    fill: {
      type: 'gradient',
      gradient: {
        shade: 'light',
        type: "horizontal",
        shadeIntensity: 0.25,
        gradientToColors: undefined,
        inverseColors: true,
        opacityFrom: 0.85,
        opacityTo: 0.85,
        stops: [50, 0, 100]
      },
    }
    };

    var chart = new ApexCharts(document.querySelector("#bar-chart"), options);
    chart.render();
</script>

@endsection
