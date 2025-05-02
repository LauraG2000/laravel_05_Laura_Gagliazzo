<x-layout>
    <div class="container-fluid">
        <div class="justify-content-center height-custom align-items-center">
            <div class="col-12">
                <h1 class="text-center display-2 title">
                    Ciao
                </h1>

                @if (session('invioMail'))
                <div class="alert alert-success">
                    {{ session('invioMail') }}
                </div>
                @endif
            </div>
        </div>
    </div>

</x-layout>