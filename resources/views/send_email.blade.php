@extends('layout')

@section('container')
<div class="container box">
    <h3 align="center">Formulario de Contacto</h3><br />
    @if (count($errors) > 0)
     <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <ul>
       @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
       @endforeach
      </ul>
     </div>
    @endif
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
     <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
    </div>
    @endif
    <form method="post" action="{{url('sendemail/send')}}">
     {{ csrf_field() }}
     <div class="form-group">
      <label>Nombre</label>
      <input type="text" name="name" class="form-control" value="" />
     </div>
     <div class="form-group">
      <label>Email</label>
      <input type="text" name="email" class="form-control" value="" />
     </div>
     <div class="form-group">
      <label>Mensaje</label>
      <textarea name="message" class="form-control"></textarea>
     </div>
     <div class="form-group">
      <input type="submit" name="send" class="btn btn-info" value="Envia email de contacto" />
     </div>
    </form>

   </div>
@endsection
