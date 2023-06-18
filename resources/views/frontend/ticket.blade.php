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
                    @error('ticket-form-name')
                      <p style="color: red">{{ $message }}</p>
                    @enderror
                    @error('ticket-form-email')
                      <p style="color: red">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                    <input type="text" value="{{ old('ticket-form-name') }}" name="ticket-form-name"
                      id="ticket-form-name" class="form-control" placeholder="Full name" required>

                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                    <input type="email" value="{{ old('ticket-form-email') }}" name="ticket-form-email"
                      id="ticket-form-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address"
                      required>
                  </div>
                </div>

                <input type="number" value="{{ old('ticket-form-phone') }}" class="form-control" name="ticket-form-phone"
                  placeholder="Ph 085-456-7890" required="">
                @error('ticket-form-phone')
                  <p style="color: red">{{ $message }}</p>
                @enderror


                <h6>Choose Ticket Type</h6>

                <div class="row mb-4">
                  <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-check form-check-radio mb-0 form-control">
                      <input class="form-check-input" @checked(old('form-check-input') == "Eary bird $120") type="radio" value="Eary bird $120"
                        name="form-check-input" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Eary bird $120
                      </label>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-check form-check-radio mb-0 form-control">
                      <input class="form-check-input" @checked(old('form-check-input') == "Standard $240") type="radio" value="Standard $240" name="form-check-input"
                        id="flexRadioDefault2">
                      <label class="form-check-label" for="flexRadioDefault2">
                        Standard $240
                      </label>
                    </div>
                  </div>
                  <div class="col-12">
                    @error('form-check-input')
                      <p style="color: red">{{ $message }}</p>
                    @enderror
                  </div>

                </div>

                <input type="number" value="{{old('ticket-form-number')}}" name="ticket-form-number" id="ticket-form-number" class="form-control"
                placeholder="Number of Tickets" required>
                @error('ticket-form-number')
                  <p style="color: red">{{ $message }}</p>
                @enderror
                <textarea name="ticket-form-message" rows="3" class="form-control" id="ticket-form-message"
                  placeholder="Additional Request">{{old('ticket-form-message')}}</textarea>
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
