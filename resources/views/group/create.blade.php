<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Это блэйд group.create</h1>
  
  <a class="btn btn-primary" href="{{ route('group.index') }}"> Назад</a>
  <br>

  <h3>Добавление новой группы</h3>
    <form action="{{ route('group.store') }}" method="post">
      @csrf
      <div class="form-group">
        <label for="title">title</label>
        <input type="text" class="form-control" id="title" name="title" required>
      </div>
      <div class="form-group">
        <label for="start_from">start_from</label>
        <input type="date" class="form-control" name="start_from" id="start_from">
      </div>
      <div class="form-group">
        <label for="is_active">is_active</label>
        <input type="hidden" id="is_active" name="is_active" value="not active">
        <input type="checkbox" id="is_active" name="is_active" value="active" checked>
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Создать группу</button>
    </form>
</body>
</html>