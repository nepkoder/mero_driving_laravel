@extends('backend.layouts.main')
@section('content')

<div class="app-title">
    <div>
        <h1><i class="bi bi-person-gear"></i> Customer Management</h1>
        <p>Enter customer accounts</p>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item">Customers</li>
            <li class="breadcrumb-item"><a href="{{ route('customermanagement') }}">Add new customer</a></li>
        </ul>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                {{-- Display validation errors --}}
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
                <form action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                        <!-- Left Column -->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="customerFullName">Full Name</label>
                                <input class="form-control" id="userFullName" name= "full_name" type="text" placeholder="Enter full name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="customerPhone">Phone Number</label>
                                <input class="form-control" id="userPhone" name= "phone" type="tel" placeholder="Enter phone number">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="customerEmail">Email</label>
                                <input class="form-control" id="userEmail" name= "email" type="email" placeholder="Enter email address">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="customerAddress">Address</label>
                                <input class="form-control" id="customerAddress" name= "address" type="address" placeholder="Enter your address">
                            </div>


                    <div class="tile-footer text-left">
                        <button class="btn btn-primary" type="submit">Save Customer</button>
                        <button class="btn btn-secondary" type="reset">Reset Form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection