<!DOCTYPE html>
<html>
<head>
  <title>Погода</title>
   <!-- Bootstrap -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="/">MF</a>
          </div>
          <div id="navbar" class="navbar-default">
            <ul class="nav navbar-nav">
              <li class="active"><a href="/">Главная</a></li>
              <li><a href="/weather">Погода</a></li>
              <li><a href="/contacts">Добавить отзыв</a></li>
              <li><a href="/review">Список отзывов</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/signin">Войти<span class="sr-only"></span></a></li>
              <li><a href="/signup">Регистрация<span class="sr-only"></span></a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="page-header">
        <h2>Главная</h2>
    </div>
    <div class="well">
    </div>
  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="static/js/jquery-3.3.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="static/js/bootstrap.min.js"></script>
</body>
</html>