<nav class="navbar navbar-expand-lg bg-navbar">
  <div class="container-fluid">
  <a class="navbar-brand" id="navbar-logo" href="{{ route('home') }}"></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-style" aria-current="page" href="{{  route('home')  }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-style" href="{{  route('contact-us')  }}">Contatti</a>
        </li>
      </ul>
    </div>
  </div>
</nav>