@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    {{-- <h1 class="m-0 text-dark">Email : {{$mail->id}}</h1> --}}
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title">Read Mail id : {{$mail->id}}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <div class="mailbox-read-info">
                    <h5>{{$mail->subject->name}}</h5>
                    <h6>From: {{$mail->email}}
                    <span class="mailbox-read-time float-right">March 10, 2001, 5:16 pm</span></h6>
                  </div>
                  <div class="mailbox-read-message">
                    {{$mail->text}}
                  </div>
                  <!-- /.mailbox-read-message -->
                </div>
                <!-- /.card-body -->

                <!-- /.card-footer -->
                <div class="card-footer">
                    <form class=" d-sm-inline-block" action="{{route('contact.destroy',$mail)}}" method="POST">
                        @csrf
                        @method('delete')                                
                       <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i> Delete</button>
                    </form>
                </div>
                <!-- /.card-footer -->
              </div>
        </div>
    </div>
@stop
