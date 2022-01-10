<style>

    ul{
        list-style: none;
        display: flex;
    }
    li{
        margin-left:10%;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/sample.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<h1>todo list</h1>
<input type="text" name="create">
<input type="submit" name="button1" value="追加">

<table>
 <tr>
   <td>作成日</td>
   <td>タスク名</td>
   <td>更新</td>
   <td>削除</td>
 </tr>
 <tr>
   <td>{{ $item->created_at }}/td>
   <td>{{ $txt->content}}</td>
   <td></td>
   <td></td>
 </tr>
</table>
</html>
