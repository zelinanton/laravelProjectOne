@extends('layout')

@section('title')Reviews @endsection

@section('main_content')
  <!-- <h1 class="text-center text-white">Форма добавления отзыва</h1> -->

  @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <h1 class="display-4 fw-normal text-body-emphasis text-center text-white forms">Reviews</h1>
  <form method="post" class="forms text-center forms-fields-width" action="/reviews/check">
    @csrf
    <input type="email" name="email" id="email" placeholder="Введите email" class="form-control">
    <input type="text" name="subject" id="subject" placeholder="Введите тему отзыва" class="form-control">
    <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea><br>
    <button type="submit" class="btn btn-success">Отправить</button>
  </form>
  <h1 class="text-center text-white forms">All reviews</h1>
  <div class="reviews-content">
    @foreach($reviews as $el)    
      <div class="alert alert-warning forms">
        <h3>{{ $el->subject }}</h3>
        <b>{{ $el->email }}</b>
        <p>{{ $el->message }}</p>
      </div>
    @endforeach
  </div>
@endsection