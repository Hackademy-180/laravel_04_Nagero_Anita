<!-- PAGINA DETTAGLIO -->







<x-layout>
    <x-navbar />


    <div class="container mt-5">

        <div class="row justify-content-center">

            <div class="col-md-6 col-lg-4">

                <div class="card custom-card h-100 shadow-sm mx-auto">
                    <!-- Immagine grande -->
                    <img src="{{ $stagione['immagine'] }}" class="card-img-top card-img-custom" alt="{{ $stagione['name'] }}">

                    <div class="card-body">
                        <h5 class="card-title text-center text-danger fw-bold">{{ $stagione['name'] }}</h5>
                        <p class="card-text text-center text-danger fw-bold">{{ $stagione['details'] }}</p>
                        <p class="text-muted">{{ $stagione['content'] }}</p>


                        <!-- Navigazione tra le pagine -->
                        <a href="{{ route('details.paginaIndice') }}" class="btn btn-secondary">Torna indietro</a>
                    </div>
                </div>
            </div>

        </div>
    </div>






    <x-footer />

</x-layout>