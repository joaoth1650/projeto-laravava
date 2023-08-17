<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Document</title>
</head>
<body>
  <table class="container mx-auto">
      <tr>
        <td>#ID</td>
        <td>Nome:</td>
        <td>E-mail:</td>
        <td>Ações:</td>
      </tr>
      @foreach ($users as $user)
        <tr class="odd:bg-white even:bg-slate-50">
          <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>
              <a class="text-blue-700 hover:text-sky-400"   href="">Ver Usuario</a>
              <form action="" method="post">
                <input type="hidden" name="User" value="">
                <button  class="bg-red-500 text-center mx-auto" type="subit" value="remover">remover</button>
              </form>
          </td>
        </tr>
      @endforeach
  </table>
</body>
</html>