@extends('layouts.admin')
@section('content')
    <!-- Content Start -->
    <div class="content">
        @include('layouts.admin.navbar')
        <!-- Recent Sales Start -->
        <div class="container-fluid pt-4 px-4">
            <form class="col-sm-12 col-xl-6" action="{{route('admin.festDate.store')}}" method="post">
                @csrf
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Fest Date</h6>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="start_date" id="floatingInput"
                               placeholder="Start date">
                        <label for="floatingInput">Start day</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="due_day" id="floatingInputEndDate"
                               placeholder="End date">
                        <label for="floatingInputEndDate">Due Date</label>
                    </div>
                    <select class="form-select mb-3 py-3" name="month" aria-label="Default select example">
                        <option selected="" disabled>Select Month</option>
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="June">June</option>
                        <option value="Avgust">Avgust</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="location" placeholder="Location" name="location">
                        <label for="location">Location</label>
                    </div>
                    <button type="submit" class="btn btn-outline-success w-100 py-3">Submit</button>
                </div>
            </form>
        </div>
        <!-- Recent Sales End -->

        {{-- @include('layouts.admin.footer') --}}
    </div>
    <!-- Content End -->
@endsection
@section('templatescript')
    <script src="/adminAssets/js/main.js"></script>
@endsection
