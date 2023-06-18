@section('title')
  Buy ticket
@endsection
@extends('layouts.site')
@section('content')
  <main>
    @include('layouts.navbar')
    <section class="ticket-section section-padding">
      <div class="section-overlay"></div>

      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-10 mx-auto">
            <form class="custom-form ticket-form mb-5 mb-lg-0" action="{{ route('buyTicket') }}" method="post"
              role="form">
              @csrf
              <h2 class="text-center mb-4">Get started here</h2>

              <div class="ticket-form-body">
                <div class="row">
                  <div class="col-12">
                    @error('name')
                      <p style="color: red">{{ $message }}</p>
                    @enderror
                    @error('email')
                      <p style="color: red">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                    <input type="text" value="{{ old('name') }}" name="name" id="ticket-form-name"
                      class="form-control" placeholder="Full name" required>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                    <input type="email" value="{{ old('email') }}" name="email" id="ticket-form-email"
                      pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
                  </div>
                </div>

                <input type="number" value="{{ old('phone') }}" class="form-control" name="phone"
                  placeholder="99 991 19 91" required="">
                @error('phone')
                  <p style="color: red">{{ $message }}</p>
                @enderror


                <h6>Choose Ticket Type</h6>

                <div class="row mb-4">
                  <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-check form-check-radio mb-0 form-control">
                      <input class="form-check-input" @checked(old('ticket_type') == "Eary bird $120") type="radio" value="Eary bird $120"
                        name="ticket_type" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Eary bird $120
                      </label>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-check form-check-radio mb-0 form-control">
                      <input class="form-check-input" @checked(old('ticket_type') == "Standard $240") type="radio" value="Standard $240"
                        name="ticket_type" id="flexRadioDefault2">
                      <label class="form-check-label" for="flexRadioDefault2">
                        Standard $240
                      </label>
                    </div>
                  </div>
                  <div class="col-12">
                    @error('ticket_type')
                      <p style="color: red">{{ $message }}</p>
                    @enderror
                  </div>

                </div>

                <input type="number" value="{{ old('count') }}" name="count" id="ticket-form-number"
                  class="form-control" placeholder="Number of Tickets" required>
                @error('count')
                  <p style="color: red">{{ $message }}</p>
                @enderror
                <textarea name="message" rows="3" class="form-control" id="ticket-form-message" placeholder="Additional Request">{{ old('message') }}</textarea>
                @if ($message = Session::get('success'))
                  {{ $message }}
                @endif
                <div class="col-lg-4 col-md-10 col-8 mx-auto">
                  <button type="submit" class="form-control">Buy Ticket</button>
                </div>
              </div>
            </form>
          </div>
        </div>
    </section>
  </main>
  @include('layouts.footer')
@endsection
