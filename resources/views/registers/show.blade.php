@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')

      <div class="form-group">
        <label for="service">Id</label>
        <div class="form-control" id="service">{{$register->id}}
        </div>
      </div>
      <div class="form-group">
        <label for="service">Subscription</label>
        <div class="form-control" id="service">{{$register->Subscription}}
        </div>
      </div>
      <div class="form-group">
        <label for="price">Price</label>
        <div class="form-control" id="price" >
          {{$register->Price}}
        </div>
      </div>
      <div class="form-group">
        <label for="payment_date">Payment_date</label>
        <div id="payment_date" class="form-control">
          {{$register->Payment_date}}
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
      <form action="{{route('edit', ['id' => $register->id])}}" method="get" >
          <button type="submit" class="btn btn-primary">edit</button>
      </form>

       <form id="delete_{{$register->id}}" action="{{route('destroy', ['id' => $register->id])}}" method="post" >
        @csrf
        @method('delete')
          <a href="#" data-id="{{ $register->id}}" onclick="deletePost(this)" type="submit" class="btn btn-primary">destroy</a>
      </form>
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
