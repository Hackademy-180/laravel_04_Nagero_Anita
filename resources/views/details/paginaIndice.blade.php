<!-- PAGINA DI INDICE-->




<x-layout>
 
    <div class="container mt-4">
        <h1 class="text-center mb-4">Le Stagioni</h1>

        <h2>pagina indice</h2>



        <div class="row">
            @foreach ($stagioni as $stagione)

            <x-card
                :immagine="$stagione['immagine']"
                :name="$stagione['name']"
                :content="$stagione['content']">
                <a href="{{ route('details.paginaDetails', ['id' => $stagione['id']]) }}">
                    Vai a {{ $stagione['name'] }}
                </a>
            </x-card>


            @endforeach
        </div>

    </div>
    </div>
   


 



</x-layout>