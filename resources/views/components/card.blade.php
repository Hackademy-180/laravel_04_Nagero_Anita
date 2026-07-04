@props(['immagine', 'name', 'content'])


            <div class="card custom-card h-100 shadow-sm mx-auto" style="width: 18rem;">
                <img src="{{ $immagine }}"  alt="{{ $name }}" style="height: 150px; object-fit: cover; width: 100%;">

                <div class="card-body d-flex flex-column justify-content-center">
                    <h5 class="card-title fw-bold ">
                        {{ $name }}
                    </h5>

                    <p class="card-text text-muted">
                        {{ $content }}
                    </p>

                    {{ $slot }}
                </div>
            </div>
       
   

        {{-- ximg -- class="card-img-top card-img-custom"    --}}

        <!-- Blade è un potente motore template, strumento forte a creare viste dinamiche e pulite; i componenti evitano ripetizioni 
          -->

          {{-- titolo class="card-title text-center text-danger fw-bold" --}}



          {{-- txt : class="card-text text-center text-danger fw-bold" --}}