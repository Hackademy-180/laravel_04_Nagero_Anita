<!-- PAGINA DETTAGLIO -->




<x-layout>
   

    <div class="container mt-5">
        <div class="row justify-content-center">

<div class="col-md-3">
            <x-card

            
                :immagine="$stagione['immagine']"
                :name="$stagione['name']"
                :content="$stagione['details']">
                <p class="text-muted">{{ $stagione['content'] }}</p>

                <a href="{{ route('details.paginaIndice') }}" class="btn btn-secondary">
                    Torna indietro
                </a>
            </x-card>

        </div>
    </div>
</div>

</x-layout>