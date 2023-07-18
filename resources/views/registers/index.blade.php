

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')

  <div class="container text-center">
    <div class="row align-items-start">

    </div>
  </div>



<table class="table table-borderless">
  <thead>
    <tr>
    @foreach ($columns as $column)
     <th scope="col">
       @if ($column !== 'user_id')
       {{ $column }}
       @endif
      </th>
      @endforeach

    </tr>
  </thead>
  <tbody>
    @foreach ($registers as $register )
    <tr>
      <th scope="row">{{$register->id}}</th>
      <td><a href="{{$register->Url}}">{{$register->Subscription}}</a></td>
       <td>{{$register->Price}}</td>
      <td>{{$register->Payment_date}}</td>

      <td><a href="{{route('show', ['id' => $register->id ])}}">jump</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
