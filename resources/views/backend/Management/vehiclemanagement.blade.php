@extends('backend.layouts.main')
@section('content')

<div class="app-title">
    <div>
        <h1><i class="bi bi-car-front"></i> Vehicle Management</h1>
        <p>Enter vehicle details</p>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item">Management</li>
            <li class="breadcrumb-item"><a href="{{ route('vehiclemanagement') }}">Vehicle Management</a></li>
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
                <form action="{{ route('vehicles.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                
                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="VehicleMake">Make</label>
                                <input class="form-control" id="vehicleMake" name="make" type="text" placeholder="Enter vehicle company">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="vehicleModel">Model</label>
                                <input class="form-control" id="vehicleModel" name="model"type="text" placeholder="Enter vehicle model">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="vehicleYear">Year</label>
                                <input class="form-control" id="vehicleYear" name="year" type="number" 
                                       min="1950" max="{{ date('Y') + 1 }}" placeholder="Production year">
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="vehiclePlate">Plate Number</label>
                                <input class="form-control" id="vehiclePlate" name="plate_number" type="text" 
                                       placeholder="Enter vehicle plate no. ">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="vehicleType">Vehicle Type</label>
                                <select class="form-control" id="vehicleType" name="vehicle_type">
                                    <option value="sedan">Sedan</option>
                                    <option value="suv">SUV</option>
                                    <option value="pickup">Pickup</option>
                                    <option value="van">Van</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="vehicleMileage">Mileage</label>
                                <div class="input-group">
                                    <input class="form-control" id="vehicleMileage"name="mileage" type="number" 
                                           placeholder="Current mileage">
                                    <span class="input-group-text">km</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Full Width Row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="vehicleFeatures">Special Features</label>
                                <textarea class="form-control" id="vehicleFeatures" name="features" rows="3" 
                                          placeholder="Additional features or description"></textarea>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label" for="vehiclePhoto">Upload Photos</label>
                                <input class="form-control" type="file" id="vehiclePhoto" name="photo" accept="image/*">
                            </div>
                        </div>
                    </div>

                    <div class="tile-footer text-left">
                        <button class="btn btn-primary" type="submit">Submit Vehicle</button>
                        <button class="btn btn-secondary" type="reset">Reset Form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection