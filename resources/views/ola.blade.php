<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Olá</title>
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}" />
  </head>
  <body>
    <div class="container">
      @for ($i=0; $i < 10; $i++)
          <h2>Olá {{ $nome }}</h2>
      @endfor
    </div>
    <script type="text/javascript" src="{{ mix('/js/app.js') }}">
  </body>
</html>
