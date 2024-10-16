@extends('adminlte::page')

@section('title', 'insoecting disire')

@section('content_header')

@stop

@section('content')

@if ($errors->any())
    <div class="alert alert-primary">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif




<form action="{{route('update', ['id' => $register->id ])}}" method="post" class="form-horizontal">
    @csrf
    <div class="form-group">
        <label for="service">Subscription</label>
        <input type="text"  name="subscription" class="form-control" id="service"  value="{{$register->Subscription}}">
      </div>
      <div class="form-group">
        <label for="price">Price</label>
        <input type="number" name="price" class="form-control" id="price" value="{{$register->Price}}">
      </div>
      <div class="form-group">
        <label for="payment_date">Monthly_payment_date</label>
        <input type="number" name="payment_date" id="payment_date" value="{{$register->Monthly_payment_date}}">
      </div>
    <div class="form-group">
        <label for="detail">Service Detail</label>
        <input type="text" name="detail" class="form-control" id="detail" value="{{$register->Detail}}">
      </div>
    <div class="form-group">
        <label for="url">URL</label>
        <input type="text" name="url" class="form-control" id="url" value="{{$register->Url}}">
      </div>
      <button type="submit" class="btn btn-primary">update</button>
</form>

@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
