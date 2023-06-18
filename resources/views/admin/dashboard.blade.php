@extends('layouts.admin')
@section('content')
  <!-- Content Start -->
  <div class="content">
    @include('layouts.admin.navbar')

    {{ $tickets }}
    <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
      <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
          <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
            <i class="fa fa-chart-line fa-3x text-primary"></i>
            <div class="ms-3">
              <p class="mb-2">Today Sale</p>
              <h6 class="mb-0">$1234</h6>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
            <i class="fa fa-chart-bar fa-3x text-primary"></i>
            <div class="ms-3">
              <p class="mb-2">Total Sale</p>
              <h6 class="mb-0">$1234</h6>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
            <i class="fa fa-chart-area fa-3x text-primary"></i>
            <div class="ms-3">
              <p class="mb-2">Today Revenue</p>
              <h6 class="mb-0">$1234</h6>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
            <i class="fa fa-chart-pie fa-3x text-primary"></i>
            <div class="ms-3">
              <p class="mb-2">Total Revenue</p>
              <h6 class="mb-0">$1234</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sale & Revenue End -->

    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
      <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
          <h6 class="mb-0">Recent Salse</h6>
          {{-- <a href="">Show All</a> --}}
        </div>
        <div class="table-responsive">
          <table class="table text-start align-middle table-bordered table-hover mb-0">
            <thead>
              <tr class="text-white">
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Ticket Type</th>
                <th scope="col">Count</th>
                <th scope="col">Message</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($tickets as $ticket)
                <tr>
                  <td>{{ $ticket->id }}</td>
                  <td>{{ $ticket->name }}</td>
                  <td>{{ $ticket->email }}</td>
                  <td>{{ $ticket->phone }}</td>
                  <td>{{ $ticket->ticket_type }}</td>
                  <td>{{ $ticket->count }}</td>
                  <td>{{ $ticket->message ?? 'no message' }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- Recent Sales End -->

    {{-- @include('layouts.admin.footer') --}}
  </div>
  <!-- Content End -->
@endsection
@section('templatescript')
  <script src="/adminAssets/js/main.js"></script>
@endsection
