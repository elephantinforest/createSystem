

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<x-adminlte-profile-widget name="{{Auth::user()->name}}" desc="User" theme="primary"
    img="https://picsum.photos/id/1/100">
    <x-adminlte-profile-col-item class="text-primary border-right" icon="fas fa-lg fa-gift"
        title="payment of the month" text="{{$price}}円" size=6 badge="danger"/>
    <x-adminlte-profile-col-item class="text-primary" icon="fas fa-lg fa-users" title="Subscription"
        text="{{$subscription}}社" size=6 badge="danger"/>
</x-adminlte-profile-widget>
@if($price > 0)
<table class="table table-borderless ">
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

      <td><a  class=" badge bg-primary text-wrap" href="{{$register->Url}}">{{$register->Subscription}}</a></td>
       <td>{{$register->Price}}円</td>
      <td>毎月{{$register->Monthly_payment_date}}日</td>

      <td><a href="{{route('show', ['id' => $register->id ])}}"><x-adminlte-button label="詳細" theme="primary" icon="fas fa-thumbs-up"/></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@else
<div class="container mt-1">
  <a  href="registers/create"><p class="fs-1">新規登録</p></a>
<p class="fs-1">.fs-1 text</p>

</div>

@endif
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')

@stop
