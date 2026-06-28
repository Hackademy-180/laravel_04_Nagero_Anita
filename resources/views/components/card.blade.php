@props(['immagine', 'name', 'content'])


        <div class="col-md-3">
            <div class="card custom-card h-100 shadow-sm mx-auto">
                <img src="{{ $immagine }}"  alt="{{ $name }}" style="height: 150px; object-fit: cover; width: 100%;">

                <div class="card-body">
                    <h5>
                        {{ $name }}
                    </h5>

                    <p >
                        {{ $content }}
                    </p>

                    {{ $slot }}
                </div>
            </div>
        </div>
   

        {{-- ximg -- class="card-img-top card-img-custom"    --}}

        <!-- Blade è un potente motore template, strumento forte a creare viste dinamiche e pulite; i componenti evitano ripetizioni 
          -->

          {{-- titolo class="card-title text-center text-danger fw-bold" --}}



          {{-- txt : class="card-text text-center text-danger fw-bold" --}}