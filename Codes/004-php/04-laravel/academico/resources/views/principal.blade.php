<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'Sistema Acadêmico')</title>
  </head>
  <body>
    <!-- Links - menu lateral //-->
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/welcome">About</a></li>
        <li><a href="/alunos/listar">Listar</a></li>
    </ul>

    <!-- Conteúdo - parte central //-->
    @yield('conteudo')





  </body>
</html>
