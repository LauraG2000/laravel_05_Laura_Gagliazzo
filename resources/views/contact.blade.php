<x-layout>
    <div class="container-fluid">
        <div class="justify-content-center height-custom align-items-center">
            <div class="col-12">
                <header class="text-center display-2 title">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('images/contact.gif') }}" class="d-block align-items-center img-carusel" alt="...">
                            </div>
                        </div>
                </header>
                <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
                    <div class="col-12 col-md-6 my-5">
                        <form class="p-5 form-opacity text-center text-custom" method="POST" action="{{ route('contact-submit') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">inserisci il tuo nome completo</label>
                                <input type="text" class="form-control bg-wheat" id="username" name="username">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Inserisci la tua email</label>
                                <input type="email" class="form-control bg-wheat" id="email" aria-describedby="email" name="useremail">
                                <div id="emailHelp" class="form-text text-body-secondary">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Scrivici il tuo messaggio:</label>
                                <textarea class="form-control bg-wheat" id="message" cols="20" rows="10" name="usermessage"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="btn bg-wheat text-custom-btn" id="submit-btn">Invia</button>
                                <img id="wait-img" src="{{ asset('images/wait.png') }}" alt="Wait" class="wait">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</x-layout>