@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')

    <h4>Welcome to Bbox-Express Route Tracker!</h4>
    <p>Where tracking meets optimization. Start your journey towards efficient route management today.</p>

  <div class="row">
    <div class="col-12 col-xl-8 mb-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="card-title mb-0">
                    <h5 class="mb-0">Deliveries for Today</h5>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Order Number</th>
                                <th>Delivery Address</th>
                                <th>Delivery Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Your PHP logic to populate the table with data -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-4 col-lg-2 mb-4">
        <div class="card card-border-shadow-warning">
            <div class="card-body">
                <div class="d-flex align-items-center mb-0 pb-0">
                    <div class="avatar me-2" style="width: 5rem; height: 5rem;">
                        <span class="avatar-initial rounded bg-label-warning" style="font-size: 4rem; display: flex; justify-content: center; align-items: center;"><i class="ti ti-truck ti-xl"></i></span>
                    </div>
                    <div style="flex: 3; margin-left: 1rem;">
                        <h2 class="ms-1 mb-0">0</h2>
                        <p class="mb-0">Today's Deliveries</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @php
        $routeCount = App\Models\LmsG44Route::count();
    @endphp

    <div class="col-sm-4 col-lg-2 mb-4">
        <div class="card card-border-shadow-success">
            <div class="card-body">
                <div class="d-flex align-items-center mb-0 pb-0">
                    <div class="avatar me-2" style="width: 5rem; height: 5rem;">
                        <span class="avatar-initial rounded bg-label-success" style="font-size: 4rem; display: flex; justify-content: center; align-items: center;"><i class="ti ti-route ti-xl"></i></span>
                    </div>
                    <div style="flex: 3; margin-left: 1rem;">
                        <h2 class="ms-1 mb-0">{{ $routeCount }}</h2>
                        <p class="mb-0">Optimized Routes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
