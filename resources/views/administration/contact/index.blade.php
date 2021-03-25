@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Emails</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            @if (count($mails) == 0)
            <div class="alert alert-info alert-dismissible">
                <h5><i class="icon fas fa-info"></i> Alert!</h5>
                Il n'y a pas d'emails
              </div>
            @else
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Emails List</h3>
            
                  <div class="card-tools">
                    {{ $mails->links('templates.pages') }}
                  </div>
                </div>
                <!-- /.card-header -->       
                <div class="card-body p-0">
                  <table class="table">
                    <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Title</th>
                        <th>Auteur</th>
                        <th style="">Action</th>
                      </tr>
                    </thead>
                    <tbody>             
                        @foreach ($mails as $mail)                            
                        <tr>
                          <td>{{$mail->id}}</td>
                          <td>{{$mail->subject->name}}</td>
                          <td>
                            {{$mail->auteur}}
                          </td>
                          <td>
                            <a class="btn btn-success btn-xs" href="{{route('contact.show',$mail)}}">Show</a>
                            <form class=" d-sm-inline-block" action="{{route('contact.destroy',$mail)}}" method="POST">
                                @csrf
                                @method('delete')                                
                               <button type="submit" class="btn btn-danger btn-xs">Del</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
    
        </div>
    </div>
@stop
