@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid py-4">

        {{-- Welcome Section --}}
        <div class="mb-4">
            <h3 class="fw-bold mb-1">
                Welcome back,
                {{ auth()->user()->name ?? 'Developer' }}!
            </h3>

            <p class="text-muted mb-0">
                Here's an overview of your BusinessFlow ERP workspace.
            </p>
        </div>

        {{-- Statistics Cards --}}
        <div class="row g-3 mb-4">

            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="text-muted mb-2">Total Customers</p>
                                <h3 class="fw-bold mb-0">0</h3>
                            </div>

                            <div class="bg-primary bg-opacity-10 rounded p-3">
                                <i class="bi bi-people fs-3 text-primary"></i>
                            </div>
                        </div>

                        <small class="text-muted">
                            Customer management
                        </small>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="text-muted mb-2">Total Products</p>
                                <h3 class="fw-bold mb-0">0</h3>
                            </div>

                            <div class="bg-success bg-opacity-10 rounded p-3">
                                <i class="bi bi-box-seam fs-3 text-success"></i>
                            </div>
                        </div>

                        <small class="text-muted">
                            Inventory management
                        </small>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="text-muted mb-2">Total Orders</p>
                                <h3 class="fw-bold mb-0">0</h3>
                            </div>

                            <div class="bg-warning bg-opacity-10 rounded p-3">
                                <i class="bi bi-cart3 fs-3 text-warning"></i>
                            </div>
                        </div>

                        <small class="text-muted">
                            Sales and orders
                        </small>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="text-muted mb-2">Total Revenue</p>
                                <h3 class="fw-bold mb-0">৳0</h3>
                            </div>

                            <div class="bg-info bg-opacity-10 rounded p-3">
                                <i class="bi bi-currency-exchange fs-3 text-info"></i>
                            </div>
                        </div>

                        <small class="text-muted">
                            Business revenue
                        </small>
                    </div>
                </div>
            </div>

        </div>

        {{-- Account Information & Quick Actions --}}
        <div class="row g-3">

            {{-- Account Information --}}
            <div class="col-12 col-lg-7">
                <div class="card border-0 shadow-sm h-100">

                    <div class="card-header bg-white border-0 pt-3 px-3">
                        <h5 class="fw-bold mb-0">
                            <i class="bi bi-person-circle me-2"></i>
                            Account Information
                        </h5>
                    </div>

                    <div class="card-body">

                        <div class="mb-3">
                            <small class="text-muted d-block">Full Name</small>
                            <span class="fw-semibold">
                                {{ auth()->user()->name ?? 'Not authenticated' }}
                            </span>
                        </div>

                        <div class="mb-3">
                            <small class="text-muted d-block">Email Address</small>
                            <span class="fw-semibold">
                                {{ auth()->user()->email ?? 'Not available' }}
                            </span>
                        </div>

                        <div class="mb-3">
                            <small class="text-muted d-block">Account Status</small>

                            @if (auth()->check())
                                <span class="badge bg-success">
                                    Authenticated
                                </span>
                            @else
                                <span class="badge bg-secondary">
                                    Guest / JWT integration pending
                                </span>
                            @endif
                        </div>

                        <div>
                            <small class="text-muted d-block">Application</small>
                            <span class="fw-semibold">BusinessFlow ERP</span>
                        </div>

                    </div>
                </div>
            </div>

            {{-- Quick Actions --}}
            <div class="col-12 col-lg-5">
                <div class="card border-0 shadow-sm h-100">

                    <div class="card-header bg-white border-0 pt-3 px-3">
                        <h5 class="fw-bold mb-0">
                            <i class="bi bi-lightning-charge me-2"></i>
                            Quick Actions
                        </h5>
                    </div>

                    <div class="card-body">

                        <a href="#" class="btn btn-outline-primary w-100 text-start mb-3">
                            <i class="bi bi-box-seam me-2"></i>
                            Manage Products
                        </a>

                        <a href="#" class="btn btn-outline-primary w-100 text-start mb-3">
                            <i class="bi bi-people me-2"></i>
                            Manage Customers
                        </a>

                        <a href="#" class="btn btn-outline-primary w-100 text-start mb-3">
                            <i class="bi bi-cart3 me-2"></i>
                            View Orders
                        </a>

                        <a href="#" class="btn btn-outline-primary w-100 text-start">
                            <i class="bi bi-gear me-2"></i>
                            Account Settings
                        </a>

                    </div>
                </div>
            </div>

        </div>

        {{-- Footer --}}
        <div class="text-center mt-4">
            <small class="text-muted">
                BusinessFlow ERP &copy; {{ date('Y') }}
                | FMCG Wholesale & Distribution Management
            </small>
        </div>

    </div>
@endsection
