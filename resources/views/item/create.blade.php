<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>新規作成</h1>
  <p><a href="{{ route('item.index')}}"> Item List</a></p>
  
  <form action="{{ route('item.store')}}" method="POST">
      @csrf
      <p>Item名：<input type="text" name="name" value="{{old('name')}}"></p>
      <p>メモ：<input type="text" name="memo" value="{{old('memo')}}"></p>
      <input type="submit" value="登録">
  </form>
</body>
</html>