@extends('adminlte::page')

@section('title', 'inspecting disire!')

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


<form action="{{route('store')}}" method="POST" class="form-horizontal">
    @csrf
    <div class="form-group">
        <label for="service">Subscription</label>
        <input type="text"  name="subscription" class="form-control" id="service"  placeholder="Enter subscription">
      </div>
      <div class="form-group">
        <label for="price">Price</label>
        <input type="number" name="price" class="form-control" id="price" placeholder="Enter price">
      </div>
    <div class="form-group">
        <label for="payment_date">Monthly_payment_date</label>
        <div>
        <input type="number" name="payment_date" class= id="price" placeholder="Enter day">
        </div>
      </div>
      <div class="form-floating">
     <label for="floatingTextarea2">Servis detail</label>
  <textarea  name="detail" class="form-control" placeholder="Enter Servis detail" id="floatingTextarea2" style="height: 100px"></textarea>
</div>
    <div class="form-group">
        <label for="url">URL</label>
        <input type="text" name="url" class="form-control" id="url" placeholder="Enter Url">
      </div>
<x-adminlte-button id="showAlertButton" class="btn-flat " type="submit" label="Submit" theme="primary" icon="fas fa-lg fa-save"/>


</form>

@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
