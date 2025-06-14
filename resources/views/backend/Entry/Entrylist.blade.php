@extends('backend.layouts.main')
@section('content')

<div class="app-title">
    <div>
        <h1><i class="bi bi-list-task"></i> Driving Entry List</h1>
        <p>All Driving Entries</p>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item">Driving Entries</li>
            <li class="breadcrumb-item active">List</li>
        </ul>
    </div>
</div>

<table class="table table-bordered table-hover">
  <thead class="table">
    <tr>
      <th>ID</th>
      <th>Entry Type</th>
      <th>Customer / Guest</th>
      <th>Date</th>
      <th>Start Time</th>
      <th>End Time</th>
      <th>Payment Method</th>
      <th>Trainer</th>
      <th>Created At</th>
    </tr>
  </thead>
  <tbody>
    @foreach($entries as $entry)
    <tr>
      <td>{{ $entry->id }}</td>
      <td>{{ ucfirst($entry->entry_type) }}</td>
      <td>
        @if($entry->entry_type === 'membership' && $entry->customer)
            {{ $entry->customer->full_name }}
        @elseif($entry->entry_type === 'guest')
            {{ $entry->guest_name }}
        @else
            N/A
        @endif
      </td>
      <td>{{ $entry->entry_date }}</td>
      <td>{{ $entry->start_time }}</td>
      <td>{{ $entry->end_time }}</td>
      <td>{{ ucfirst($entry->payment_method) }}</td>
      <td>{{ $entry->trainer ? $entry->trainer->full_name : 'N/A' }}</td>
      <td>{{ $entry->created_at->format('Y-m-d H:i') }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
