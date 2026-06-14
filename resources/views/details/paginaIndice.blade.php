<!-- PAGINA DI INDICE-->




<x-layout>
    <x-navbar />

    <div class="container mt-4">
        <h1 class="text-center mb-4">Le Stagioni</h1>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">


            @foreach ($stagioni as $stagione)
            <div class="col-md-3">
                <div class="card custom-card h-100 shadow-sm mx-auto">
                    <img src="{{ $stagione['immagine'] }}" class="card-img-top card-img-custom" alt="{{ $stagione['name'] }}">

                    <div class="card-body">
                        <h5 class="card-title text-center text-danger fw-bold">{{ $stagione['name'] }}</h5>
                        <p class="card-text text-center text-danger fw-bold">{{ $stagione['content'] }}</p>

                        <!-- Roting dinamico -->

                        <a href="{{ route('details.paginaDetails', ['id' => $stagione['id']]) }}">
                            Vai a {{ $stagione['name'] }}
                        </a>

                    </div>
                </div>
            </div>
            @endforeach
        </div>




        <x-footer />



</x-layout>