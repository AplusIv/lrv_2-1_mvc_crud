<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Student show.blade</h1>

  <a class="btn btn-primary" href="{{ route('group.index') }}"> К списку групп</a>
  <br> 
  <a class="btn btn-primary" href="{{ route('group.show', $group->id) }}"> К списку студентов группы {{ $group->id }}</a>

  {{-- <h3>group: {{$group}}</h3>
  <h3>student: {{$student}}</h3>
  <h3>group title from student: {{$group_title}}</h3> --}}


  
  <table class="table table-bordered">
    <tr>
      <th>id</th>
      <th>group_id</th>
      <th>group_title</th>
      <th>name</th>
      <th>surname</th>
    </tr>
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->group_id }}</td>
        <td>{{ $group_title }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->surname }}</td>
    </tr>
  </table>
</body>
</html>