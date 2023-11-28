@extends('layout')

@section('title')Главная страница@endsection

@section('main_content')
<div class="py-12 bg-dark">
  <h1 class="text-center text-white forms">Все товары</h1>
  <div class="reviews-content">
    @foreach($products as $el)    
      <div class="alert alert-warning forms grid align-content__space-between">
        <img src="img/{{ $el->image }}"></img>
        <div>
          <b>{{ $el->name }}</b>
          <h3><p>{{ $el->price }}<span style="font-size: 60%;">₴</span></p></h3>
          <button id="button">Добавить в корзину</button>
        </div>
      </div>
    @endforeach
  </div>
</div> 
@endsection