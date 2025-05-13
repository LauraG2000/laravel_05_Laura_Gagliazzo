<x-layout>
    <div class="container-fluid">
        <div class="justify-content-center height-custom align-items-center">
            <div class="col-12">
                <header class="text-center display-2 title">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img id="coffee" src="{{ asset('images/img3.png') }}" class="d-block align-items-center img-carusel scroll-img" alt="milkshakePic">
                            </div>
                        </div>
                    </div>
                </header>
                <div class="container-fluid">
                    <div class="row d-flex justify-content-center align-items-center py-3 gap-4">
                        <div class="col-12 col-md-6 d-flex justify-content-end box">

                            <img src="{{ asset('images/card6.png') }}" class="coffeeCard img-box padding-box" alt="card4">
                            <div class="col-12 col-md-6 d-flex justify-content-start">
                                <div class="container-fluid text-center">
                                    <p class="padding-text">{{ $text2 }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
