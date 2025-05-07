@extends('backend.layouts.main')
@section('content')

<div class="app-title">
    <div>
        <h1>Rate Management</h1>
        <p>Manage pricing for services and vehicle types</p>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item">Management</li>
            <li class="breadcrumb-item"><a href="{{ route('ratemanagement') }}">Rate Management</a></li>
        </ul>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
            
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            {{-- Display success message --}}
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
                <form method="POST" action="{{ route('rate.store') }}">
                    
                
                    @csrf

                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="serviceType">Service Type</label>
                                <input class="form-control" id="serviceType" name="service_type" type="text" placeholder="e.g. Driving Lesson" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="vehicleType">Vehicle Type</label>
                                <select class="form-control" id="vehicleType" name="vehicle_type" required>
                                    <option value="">Select vehicle type</option>
                                    <option value="Car">Car</option>
                                    <option value="Bike">Bike</option>
                                    <option value="Truck">Bus</option>
                                </select>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="rateAmount">Rate Amount (Rs)</label>
                                <input class="form-control" id="rateAmount" name="rate_amount" type="number" step="0.01" placeholder="Enter Rate Amount" required>

                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="duration">Duration (hours)</label>
                                <input class="form-control" id="duration" name="duration" type="number" placeholder="Enter the time" required>
                            </div>
                        </div>
                    </div>

                    <!-- Full Width Row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="description">Rate Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Optional notes or description..."></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="tile-footer text-left">
                        <button class="btn btn-primary" type="submit">Save Rate</button>
                        <button class="btn btn-secondary" type="reset">Reset Form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
