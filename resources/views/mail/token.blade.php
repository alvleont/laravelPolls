<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <h1>Hola,</h1>
    <p>Has solicitado un token para votar en algo en la UCC. Por favor, haz clic en el siguiente enlace para completar
        el proceso:</p>

    <p>
        <a href="{{ route('poll-with-token', ['token' => $poll->token]) }}"
            style="background-color: #4CAF50; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">
            Entrar
        </a>
    </p>

    <p>O copia y pega esta URL en tu navegador:</p>
    <p>{{ route('poll-with-token', ['token' => $poll->token]) }}</p>

    <p>Si no solicitaste este token, ignora este correo.</p>

    <p>Saludos,<br>El equipo de {{ config('app.name') }}</p>
</body>

</html>
