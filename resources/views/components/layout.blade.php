<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
             <title>{{ $title ?? 'Stagioni_Components' }}</title>
   
   
   
             <!-- link testi -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- link bts -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"> 
   
 --}}



 {{-- bts vite --}}
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navbar />

    <main>
        {{ $slot }}
    </main>
<x-footer />

    <!-- script ikons -->
    <script src="https://kit.fontawesome.com/daf6ff33d9.js" crossorigin="anonymous"></script>


    <!-- script bts -->
 {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>  --}}
</body>

</html>