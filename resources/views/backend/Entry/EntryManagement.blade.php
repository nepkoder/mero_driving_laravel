@extends('backend.layouts.main')
@section('content')

<div class="app-title">
    <div>
        <h1>Driving Entry</h1>
        <p>Manage driving entries for members or guests</p>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item">Driving Entry</li>
        </ul>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>@foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach</ul>
                    </div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form method="POST" action="{{ route('driving-entry.store') }}">
                    @csrf

                    <div class="row mb-3">
                        <label class="form-label col-12">Customer Type</label>
                        <div class="col-lg-6">
                            <input type="radio" id="membership" name="entry_type" value="membership" checked>
                            <label for="membership">Membership</label>

                            <input type="radio" id="guest" name="entry_type" value="guest" class="ms-3">
                            <label for="guest">Guest</label>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-lg-6">
                            <!-- Dropdown for member -->
                            <div class="mb-3" id="memberSelectBox">
                                <label class="form-label" for="customer_id">Select Customer</label>
                                <select class="form-control" name="customer_id" id="customer_id">
                                    <option value="">-- Select Member --</option>
                                    @foreach($customers as $customer)
                                        <option value="{{ $customer->id }}">{{ $customer->full_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Input for guest -->
                            <div class="mb-3" id="guestNameBox" style="display:none;">
                                <label class="form-label" for="guest_name">Guest Name</label>
                                <input class="form-control" type="text" name="guest_name" id="guest_name" placeholder="Enter guest name">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="date">Date</label>
                                <input class="form-control" type="date" name="entry_date" id="date" value="{{ date('Y-m-d') }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="start_time">Start Time</label>
                                <input class="form-control" type="time" name="start_time" id="start_time">
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="end_time">End Time</label>
                                <input class="form-control" type="time" name="end_time" id="end_time">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="payment_method">Payment Method</label>
                                <select class="form-control" name="payment_method" id="payment_method">
                                    <option value="cash">Cash</option>
                                    <option value="fonepay">Fonepay</option>
                                    <option value="qr">QR</option>
                                    <option value="esewa">eSewa</option>
                                    <option value="khalti">Khalti</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="trainer_id">Select Trainer</label>
                                <select class="form-control" name="trainer_id" id="trainer_id">
                                    <option value="">-- Select Trainer --</option>
                                    @foreach($trainers as $trainer)
                                        <option value="{{ $trainer->id }}">{{ $trainer->full_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="tile-footer text-left">
                        <button class="btn btn-primary" type="submit">Save Entry</button>
                        <button class="btn btn-secondary" type="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JS to toggle membership/guest -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const memberSelectBox = document.getElementById('memberSelectBox');
    const guestNameBox = document.getElementById('guestNameBox');
    const membershipRadio = document.getElementById('membership');
    const guestRadio = document.getElementById('guest');

    function toggleFields() {
        if (membershipRadio.checked) {
            memberSelectBox.style.display = 'block';
            guestNameBox.style.display = 'none';
        } else {
            memberSelectBox.style.display = 'none';
            guestNameBox.style.display = 'block';
        }
    }

    membershipRadio.addEventListener('change', toggleFields);
    guestRadio.addEventListener('change', toggleFields);

    toggleFields(); 
});
</script>


@endsection
