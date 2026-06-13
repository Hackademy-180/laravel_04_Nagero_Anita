<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link testi -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- link bts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">



    <style>
        h1,
        .h1 {
            font-family: "Orbitron", sans-serif;
        }



        body {

            opacity: 89%;

            display: flex;
            flex-direction: column;
            background-image: url(/media/season.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
            min-height: 100vh;
        }

        .custom-card {
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }

        .custom-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .card-img-custom {
            height: 200px;
            /* Altezza fissa */
            object-fit: cover;
            /* Mantiene proporzioni senza deformare */
        }





        main {
            flex: 1;
            /* Il contenuto centrale si espande riempiendo lo spazio */
        }


        html,
        body {

            cursor: pointer;
            height: 100%;
            /* Obbligatorio per far vedere lo sfondo a tutto schermo */
            margin: 0;
        }



















        /* FOOTER */
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            padding: 15px;
            text-align: center;
            border-top: 3px solid gray;
            background-color: black;
            color: yellowgreen;


        }
    </style>

</head>

<body>




    <main>
        {{ $slot }}
    </main>








    <!-- script ikons -->
    <script src="https://kit.fontawesome.com/daf6ff33d9.js" crossorigin="anonymous"></script>


    <!-- script bts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>