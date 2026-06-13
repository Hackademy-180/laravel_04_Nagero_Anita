<!-- PAGINA DI INDICE-->




<x-layout>
    <x-navbar />

    <div class="container mt-4">
        <h1 class="text-center mb-4">Le Stagioni</h1>

        <div class="row">


            @foreach ($stagioni as $stagione)
            <div class="col-md-3">
                <div class="card custom-card h-100 shadow-sm">
                    <img src="{{ $stagione['immagine'] }}" class="card-img-top" alt="{{ $stagione['name'] }}">

                    <div class="card-body">
                        <h5 class="card-title text-center text-danger fw-bold">{{ $stagione['name'] }}</h5>
                        <p class="card-text text-center text-danger fw-bold">{{ $stagione['content'] }}</p>

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