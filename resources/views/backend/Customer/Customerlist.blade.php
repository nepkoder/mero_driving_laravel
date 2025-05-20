@extends('backend.layouts.main')
@section('content')
<div class="app-title">
    <div>
        <h1><i class="bi bi-person-gear"></i> Customer List</h1>
        <p>All Customer list</p>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item">Customers List</li>
            <li class="breadcrumb-item"><a href="{{ route('customermanagement') }}">Add new customer</a></li>
        </ul>
    </div>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Phone NO</th>
      <th scope="col">Email Address</th>
      <th scope="col">Address</th>
      <th scope="col">Created at</th>
    </tr>
  </thead>
  <tbody>
@foreach($records as $customer)
    <tr>
      <th>{{$customer->id}}</th>
      <td>{{$customer->full_name }}</td>
      <td>{{ $customer->phone }}</td>
      <td>{{ $customer->email}}</td>
      <td>{{ $customer->address}}</td>
      <td>{{ $customer->created_at}}</td>
      
    </tr>
@endforeach
</tbody>
</table>
@endsection