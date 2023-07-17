@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')

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
        <label for="payment_date">Payment_date</label>
        <input type="date" name="payment_date" id="payment_date" placeholder="Enter payment_date">
      </div>
    <div class="form-group">
        <label for="detail">Service Detail</label>
        <input type="text" name="detail" class="form-control" id="detail" placeholder="Enter Service Datail">
      </div>
    <div class="form-group">
        <label for="url">URL</label>
        <input type="text" name="url" class="form-control" id="url" placeholder="Enter Url">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
