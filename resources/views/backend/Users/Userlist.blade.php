@extends('backend.layouts.main')
@section('content')
<div class="app-title">
    <div>
        <h1><i class="bi bi-person-gear"></i> User List</h1>
        <p>All User list</p>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item">User List</li>
            <li class="breadcrumb-item"><a href="{{ route('Userlist') }}">User list</a></li>
        </ul>
    </div>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email Address</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Role</th>
      <th scope="col">Phone number</th>
      <th scope="col">Bio</th>
      <th scope="col">Profile picture</th>
      <th scope="col">Created at</th>

      
      
    </tr>
  </thead>
  <tbody>
@foreach($records as $user)
    <tr>
      <th>{{$user->id}}</th>
      <td>{{$user->full_name }}</td>
      <td>{{ $user->email}}</td>
      <td>{{ $user->dob}}</td>
      <td>{{ $user->role }}</td>
      <td>{{ $user->phone }}</td>
      <td>{{ $user->bio }}</td>
      <td>
    @if($user->profile_photo)
        <img src="{{ asset('storage/' . $user->profile_photo) }}" alt="Profile Photo" width="60" height="60" style="object-fit: cover;">
    @else
        <span>No Image</span>
    @endif
      </td>

      <td>{{ $user->created_at}}</td>
      
    </tr>
@endforeach
</tbody>
</table>
@endsection