@extends('backend.layouts.main')
@section('content')

<div class="app-title">
    <div>
        <h1><i class="bi bi-person-gear"></i> User Management</h1>
        <p>Manage user accounts and permissions</p>
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
                <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                        <!-- Left Column -->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="userFullName">Full Name</label>
                                <input class="form-control" id="userFullName" name= "full_name" type="text" placeholder="Enter full name">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="userEmail">Email</label>
                                <input class="form-control" id="userEmail" name= "email" type="email" placeholder="Enter email address">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="DOB">Date of Birth</label>
                                <input class="form-control" id="DOB" name="dob" type="date" placeholder="Enter your date of birth">
                            </div>
                            
                        </div>

                        <!-- Right Column -->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="userRole">Role</label>
                                <select class="form-control" id="userRole" name="role">
                                    <option value="admin">Frontend</option>
                                    <option value="editor">Backend</option>
                                    <option value="viewer">UI/UX</option>
                                    <option value="user">Tester</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="userPhone">Phone Number</label>
                                <input class="form-control" id="userPhone" name= "phone" type="tel" placeholder="Enter phone number">
                            </div>
                        </div>
                    </div>

                    <!-- Full Width Row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="userBio">Bio/Description</label>
                                <textarea class="form-control" id="userBio" name="bio" rows="3" placeholder="User description"></textarea>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label" for="userPhoto">Profile Photo</label>
                                <input class="form-control" type="file" id="userPhoto" name= "profile_photo" accept="image/*">
                            </div>
                        </div>
                    </div>

                    <div class="tile-footer text-left">
                        <button class="btn btn-primary" type="submit">Save User</button>
                        <button class="btn btn-secondary" type="reset">Reset Form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection