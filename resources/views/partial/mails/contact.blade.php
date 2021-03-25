<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>création mail</title>
</head>
<body class="bg-gray">
    <div class="container">
        <h1 class="text-light text-center mt-50 bg-purple p-20 b-radius shadow">New Email</h1>
        <div class="content bg-light pl-60 pt-30 shadow b-radius pb-20">
            <h4 class="title">from : </h4> <p>{{$mail->email}}</p>
            <h4 class="title">subject : </h4> <p>{{$mail->subject}}</p>
            <h4 class="title">message :</h4> <p>{{$mail->message}}</p>
        </div>
    </div>    
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>