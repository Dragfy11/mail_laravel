@extends('templates.main')
@section('content')
<button><a href="/home">Revenir à home</a></button>
<button><a href="/admin/contact">Contact admin</a></button>
<div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Contact</h6>
    <div class=" text-muted pt-3">   
        @if (session('msg'))
            <div class="alert alert-success">
                {{ session('msg') }}
            </div>
        @endif
        <form action="{{route('contact.store')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="subject">Subject</label>
              <select class="form-control" id="subject" name="subject">
                @foreach ($subjects as $subject)                  
                  <option value="{{$subject->id}}">{{$subject->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="3" name="message"></textarea>
            </div>    
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>     
  </div>


@endsection