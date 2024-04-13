<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Это блэйд student.create</h1>

  <div>
    <a class="btn btn-primary" href="{{ route('group.index') }}">К списку групп</a>
  </div>
  <div>
    <a class="btn btn-primary" href="{{ route('group.show', $group) }}"> К списку студентов группы {{ $group }}</a>
  </div>
  <br> 

  <h3>Добавление студента</h3>
      <form action="{{ route('student.store', $group) }}" method="post">
        @csrf
        <div class="form-group">
          <label for="title">group_id</label>
          <input type="text" class="form-control" id="group_id" name="group_id" value={{ $group }} readonly>
        </div>
        <div class="form-group">
          <label for="title">surname</label>
          <input type="text" class="form-control" id="surname" name="surname">
        </div>
        <div class="form-group">
          <label for="title">name</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        
        <br>
        <button type="submit" class="btn btn-primary">Добавить студента в группу с id = {{ $group }}</button>
      </form>
</body>
</html>