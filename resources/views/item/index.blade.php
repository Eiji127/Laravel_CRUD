<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1> Item List</h1>
  <p><a href="{{ route('item.create') }}">新規追加</a></p>
    @if ($message = Session::get('success'))
        <p>{{ $message }}</p>
    @endif
  
  <table>
      <tr>
          <th>title</th>
          <th>詳細</th>
          <th>編集</th>
          <th>削除</th>
      </tr>
      @foreach ($items as $item)
      <tr>
          <td>{{ $item->name }}</td>
          <th><a href="{{ route('item.show' , $item->id)}}">詳細</a></th>
          <th><a href="{{ route('item.edit', $item->id)}}">編集</a></th>
          <th>
              <form action="{{ route('item.destroy', $item->id)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <input type="submit" name="" value="削除">
              </form>
          </th>
      </tr>
      @endforeach
  </table>
</body>
</html>