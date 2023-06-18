<header class="site-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-12 d-flex flex-wrap">
        <p class="d-flex me-4 mb-0">
          <i class="bi-person custom-icon me-2"></i>
          <strong class="text-dark">Welcome to Music Festival @php echo date("Y") @endphp</strong>
        </p>
      </div>
    </div>
  </div>
</header>


<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="{{ route('index') }}">
      Festava Live
    </a>

    <a href="{{ route('ticket') }}" class="btn custom-btn d-lg-none ms-auto me-4">Buy Ticket</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
        <li class="nav-item">
          <a class="nav-link click-scroll" href="{{ route('index') }}#section_1">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link click-scroll" href="{{ route('index') }}#section_2">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link click-scroll" href="{{ route('index') }}#section_3">Artists</a>
        </li>

        <li class="nav-item">
          <a class="nav-link click-scroll" href="{{ route('index') }}#section_4">Schedule</a>
        </li>

        <li class="nav-item">
          <a class="nav-link click-scroll" href="{{ route('index') }}#section_5">Pricing</a>
        </li>

        <li class="nav-item">
          <a class="nav-link click-scroll" href="{{ route('index') }}#section_6">Contact</a>
        </li>
      </ul>

      <a href="{{ route('ticket') }}" class="btn custom-btn d-lg-block d-none">Buy Ticket</a>
    </div>
  </div>
</nav>
