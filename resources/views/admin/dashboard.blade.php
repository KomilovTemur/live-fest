@extends('layouts.admin')
@section('content')
  <!-- Content Start -->
  <div class="content">
    @include('layouts.admin.navbar')
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
                <th scope="col">Ticket</th>
                <th scope="col">Count</th>
                <th scope="col">Message</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($orders as $order)
                {{-- {{$order->tickets}} --}}

                <tr>
                  <td>{{ $order->id }}</td>
                  <td>{{ $order->name }}</td>
                  <td>{{ $order->email }}</td>
                  <td>{{ $order->phone }}</td>
                  <td>
                    @for ($i = 0; $i < count($order->tickets); $i++)
                      {{ $order->tickets[$i]->name }}
                      {{ $order->tickets[$i]->price * $order->count }}$
                    @endfor
                  </td>
                  <td>{{ $order->count }}</td>
                  <td>{{ $order->message ?? 'no message' }}</td>
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
