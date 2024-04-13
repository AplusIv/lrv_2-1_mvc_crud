<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Это блэйд group.index</h1>
  <div>
    <a class="btn btn-sm btn-success" href={{ route('group.create') }}>Создать группу</a>  
  </div>
  <br>
  
  <table class="table table-bordered">
    <tr>
        <th>id</th>
        <th>Title</th>
        <th>Start_from</th>
        <th>Is_active</th>
    </tr>
    @foreach ($groups as $group)
    <tr>
        <td>{{ $group->id }}</td>
        <td>{{ $group->title }}</td>
        <td>{{ $group->start_from }}</td>
        <td>{{ $group->is_active }}</td>
    </tr>
    @endforeach
</table>
</body>
</html>