<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Laravel Middleware AdminLTE</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('accueil')}}">Accueil</a>
      </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Contact</a>
        </li> 
      <li class="nav-item">
        <form action="{{route('newsletter.store')}}" method="POST" class=" pt-1 ml-4">     
            @csrf  
            <div class="form-group row bg-secondary p-1 rounded text-light">
              <label for="email" class="col-sm-3 col-form-label">Newsletter</label>
              <div class="col">
                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
              </div>
              <button type="submit" class="btn btn-link b-col-2 text-light">Envoyez</button>
            </div>
          </form>
      </li>     
    </ul>
    
    <ul class="navbar-nav ">
        @if (Route::has('login'))         
                    @auth
                     <li class="nav-item">
                        <a class="nav-link"href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    </li> 
                    <form action="/logout" method="post" class="ml-3 ">
                        @csrf
                        <button type="submit" class="btn btn-transparent">Logout</button>
                    </form>
                    @else
                     <li class="nav-item">
                        <a class="nav-link"href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
                    </li> 
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        </li> 
                        @endif
                    @endauth              
            @endif
    </ul>

  </div>
</nav>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Articles
            </div>
            @foreach ($posts as $post)                    
            <div class="card-body border">
                <h5 class="card-title">{{$post->titre}}</h5>
                <p class="card-text">{{$post->texte}}</p>
                <h6 class="text-muted">{{$post->user->name}}</h6>
            </div>
            @endforeach
        </div>
        {{ $posts->links() }}
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>