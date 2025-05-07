@extends('backend.layouts.main')
@section('content')

<div class="app-title">
    <div>
        <h1><i class="bi bi-person-vcard"></i> Instructor Management</h1>
        <p>Manage driving instructors and their details</p>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item">Management</li>
            <li class="breadcrumb-item"><a href="{{ route('instructormanagement') }}">Instructor Management</a></li>
        </ul>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                @if(session('success'))
    <div class="col-12">
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    </div>
@endif

@if($errors->any())
    <div class="col-12">
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

                <form action="{{ route('instructors.store') }}" method="POST">
                    
                    @csrf
                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="name">Instructor Name</label>
                                <input class="form-control" id="name" name="name" type="text" placeholder="Enter the name" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="email">Email Address</label>
                                <input class="form-control" id="email" name="email" type="email" placeholder="Enter the email" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="phone">Phone Number</label>
                                <input class="form-control" id="phone" name="phone" type="text" placeholder="123-456-7890" required>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="license_no">License Number</label>
                                <input class="form-control" id="license_no" name="license_no" type="text" placeholder="LIC123456" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="vehicle_type">Assigned Vehicle Type</label>
                                <select class="form-control" id="vehicle_type" name="vehicle_type" required>
                                    <option value="">Select vehicle type</option>
                                    <option value="Car">Car</option>
                                    <option value="Bike">Bike</option>
                                    <option value="Truck">Truck</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Full Width Row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="description">Bio / Notes</label>
                                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Brief description or notes (optional)"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="tile-footer text-left">
                        <button class="btn btn-primary" type="submit">Add Instructor</button>
                        <button class="btn btn-secondary" type="reset">Clear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
