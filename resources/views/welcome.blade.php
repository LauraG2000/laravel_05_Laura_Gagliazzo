<x-layout>
    <div class="container-fluid">
        <div class="justify-content-center height-custom align-items-center">
            <div class="col-12">
                <header class="text-center display-2 title">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('images/img1.png') }}" class="d-block align-items-center img-carusel" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/img2.png') }}" class="d-block align-items-center img-carusel" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/img3.png') }}" class="d-block align-items-center img-carusel" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                    </div>
                </header>
                <div class="container-fluid text-center d-flex justify-content-center flex-wrap gap-4 py-4">
                    <div class="card">
                        <img src="{{ asset('images/card1.png') }}"
                            class="img-fluid d-block mx-auto card-img"
                            alt="card1">
                        <div class="card-body">
                            <h5 class="card-title">Coffes</h5>
                            <a href="{{  route('coffee')  }}" class= "btn btn-custom">Open</a>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset('images/card2.png') }}"
                            class="img-fluid d-block mx-auto card-img"
                            alt="card2">
                        <div class="card-body">
                            <h5 class="card-title">Milk-Shakes</h5>
                            <a href="{{  route('milkshake')  }}"class="btn btn-custom">Open</a>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset('images/card3.png') }}"
                            class="img-fluid d-block mx-auto card-img"
                            alt="card3">
                        <div class="card-body">
                            <h5 class="card-title">Muffins</h5>
                            <a href="{{  route('muffin')  }}" class="btn btn-custom">Open</a>
                        </div>
                    </div>
                </div>

                @if (session('invioMail'))
                <div class="alert alert-success">
                    {{ session('invioMail') }}
                </div>
                @endif
            </div>
        </div>
    </div>

</x-layout>