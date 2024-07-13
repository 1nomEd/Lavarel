<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Danh sach danh muc</h1>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Action</th>
        </tr>

        @foreach ($categories as $cate )
        <tr>
            <td>{{$cate->id}}</td>
            <td>{{$cate->name}}</td>
            <td>Edit/Delete</td>
        </tr>
            
        @endforeach
    </table>
</body>
</html>