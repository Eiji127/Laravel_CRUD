<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>詳細</h1>
  <p><a href="{{ route('item.index')}}"> Item List</a>　</p>
  
  <table>
      <tr>
          <th>id</th>
          <th>name</th>
          <th>memo</th>
          <th>created_at</th>
          <th>updated_at</th>
      </tr>
      <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->name }}</td>
          <td>{{ $item->memo }}</td>
          <td>{{ $item->created_at }}</td>
          <td>{{ $item->updated_at }}</td>
      </tr>
  </table>
</body>
</html>