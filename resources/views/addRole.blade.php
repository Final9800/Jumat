<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{url('/addRole/add')}}" method="POST">
    @csrf
        <label for="">Nama</label>
        <input type="text" name="nama" placeholder="Input Nama"><br>
        <label for="">Jabatan</label>
        <input type="text" name="jabatan" placeholder="Input Jabatan"><br>
        <label for="">Id Role</label>
        <input type="text" name="idRole" placeholder="Input Id anda"><br>
        <input type="submit" value="submit">
    </form>
    <table border=1>
        <tr>
            <th>Name</th>
            <th>Jabatan</th>
            <th>Id Role</th>
            <th>action</th>
        </tr>
        @foreach($roles as $role)
        <tr>
        <td>{{$role->name}}</td>
        <td>{{$role->jabatan}}</td>
        <td>{{$role->role_id}}</td>
        <td><a href="{{url('addRole/'.$role->id.'/delete')}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>
