<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>email-conatct</title>

    <!-- Bootstrap css -->

    <!-- Css -->
    <style>
        .list {
            list-style-type: none;
        }

    </style>
</head>

<body>

    <h1>Ciao, {{ $username  }}</h1>
    <h3>grazie di averci contattato</h3>
    <p>Questo è il <strong>contenuto</strong> del messaggio da te inviato:</p>
    <ul>
        <li class="list"> <strong>Tu:</strong> {{ $usermessage  }}</li>
    </ul>



    <!-- Bootstrap js -->
    <script></script>
</body>

</html>