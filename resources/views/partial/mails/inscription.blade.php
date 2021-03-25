<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Email de contact</title>
</head>
<body class="bg-gray">
    <div class="container">
        <h1 class="text-light text-center mt-50 bg-purple p-20 b-radius shadow">Inscription</h1>
        <div class="content bg-light pl-60 pt-30 shadow b-radius pb-20">     
            <h1>Bienvenue {{$mail['name']}}</h1>
            <h4>Adresse Email : {{$mail['email']}} </h4>
            <h4>Mot de passe : {{$mail['password']}} </h4>
        </div>
    </div>    
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
