@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')

<form>
  <div class="form-group">
    <label for="service">Subscription</label>
    <input type="text" class="form-control" id="service"  placeholder="Enter subscription">
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="number" class="form-control" id="price" placeholder="Enter price">
  </div>
<div class="form-group">
    <label for="detail">Service Detail</label>
    <input type="text" class="form-control" id="detail" placeholder="Enter Service Datail">
  </div>
<div class="form-group">
    <label for="url">URL</label>
    <input type="text" class="form-control" id="url" placeholder="Enter Url">
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
