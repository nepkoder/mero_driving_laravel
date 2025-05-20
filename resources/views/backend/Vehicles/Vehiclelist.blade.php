@extends('backend.layouts.main')
@section('content')
<div class="app-title">
    <div>
        <h1><i class="bi bi-person-gear"></i> Vehicle List</h1>
        <p>All Vehicle list</p>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item">Customers List</li>
            <li class="breadcrumb-item"><a href="{{ route('vehiclemanagement') }}">Add new vehicle</a></li>
        </ul>
    </div>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Make</th>
      <th scope="col">Model</th>
      <th scope="col">Year</th>
      <th scope="col">Plate Number</th>
      <th scope="col">Vehicle type</th>
      <th scope="col">Milage</th>
      <th scope="col">Features</th>
      <th scope="col">Vehicle Photo</th>
    </tr>
  </thead>
  <tbody>
@foreach($records as $vehicle)
    <tr>
      <th>{{$vehicle->id}}</th>
      <td>{{$vehicle->make }}</td>
      <td>{{$vehicle->model}}</td>
      <td>{{$vehicle->year }}</td>
      <td>{{$vehicle->plate_number }}</td>
      <td>{{$vehicle->vehicle_type }}</td>
      <td>{{$vehicle->mileage }}</td>
      <td>{{$vehicle->features }}</td>
      <td>
    @if($vehicle->photo)
        <img src="{{ asset('storage/' . $vehicle->photo) }}" alt="Vehicle Photo" width="200" height="100" style="object-fit: cover;">
    @else
        <span>No Image</span>
    @endif
      </td>
    </tr>
@endforeach
</tbody>
</table>
@endsection