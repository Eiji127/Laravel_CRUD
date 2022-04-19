<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>編集</h1>
  <p><a href="{{ route('item.index')}}"> Item List </a></p>
    @if ($message = Session::get('success'))
      <p>{{ $message }}</p>
    @endif
  
  <form action="{{ route('item.update',$item->id)}}" method="POST">
      @csrf
      @method('PUT')
      <p>Item名：<input type="text" name="name" value="{{ $item->title }}"></p>
      <p>メモ：<input type="text" name="memo" value="{{ $item->author }}"></p>
      <input type="submit" value="編集">
  </form>
</body>
</html>