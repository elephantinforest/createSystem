@extends('adminlte::page')

@section('title', 'inspecting disire')

@section('content_header')

@stop

@section('content')

      
      <div class="form-group">
        <label for="service">Subscription</label>
        <div class="form-control" id="service">{{$register->Subscription}}
        </div>
      </div>
      <div class="form-group">
        <label for="price">Price</label>
        <div class="form-control" id="price" >
          {{$register->Price}}円
        </div>
      </div>
      <div class="form-group">
        <label for="payment_date">Payment_date</label>
        <div id="payment_date" class="form-control">
          {{$register->Monthly_payment_date}}日
        </div>
      </div>
    <div class="form-group">
        <label for="detail">Service Detail</label>
        <div class="form-control" id="detail">
            {{$register->Detail}}
        </div>
    </div>
    <div class="form-group">
        <label for="url">Url</label>
        <div class="form-control" id="url">
          {{$register->Url}}
        </div>
      </div>
<div class=" ">
      <form action="{{route('edit', ['id' => $register->id])}}" method="get" class="mb-5" >
          <x-adminlte-button type='submit' label="Edit" theme="primary" icon="fas fa-key"/>
      </form>

       <form id="delete_{{$register->id}}" action="{{route('destroy', ['id' => $register->id])}}" method="post" >
        @csrf
        @method('delete')
          <a href="#" data-id="{{ $register->id}}" onclick="deletePost(this)" type="submit"><x-adminlte-button class="btn-lg" type="reset" label="Delete" theme="outline-danger" icon="fas fa-lg fa-trash"/></a>
      </form>
  </div>
      <script>
        function deletePost(e){
          'use strict'
          if(confirm('本当に削除していいですか？')){
            document.getElementById('delete_' + e.dataset.id).submit()
          }
        }
      </script>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
