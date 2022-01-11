

  <!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
  <h1>todo list</h1>
  <h1>{{$content}}</h1>
  <form action="/todo/create" method="POST">
    @csrf
    <input type="text" name="content" >
    <input type="submit"  >
  </form>

    <table>
      <tr>
   <td>作成日</td>
   <td>タスク名</td>
   <td>更新</td>
   <td>削除</td>
 </tr>
 <tr>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
 </tr>
</table>

</body>

</html>
