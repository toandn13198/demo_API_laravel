<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
       
    </style>
</head>
<body>
    <table border="1px" cellspacing="0px" style="margin: auto;">
        <thead>
        <th colspan="4">Danh sách nhân viên</th>
        <th colspan="2"><a href="">insert</a></th>
        </thead> 
        <tbody>
            <tr style="background-color:blue; color: white">
                <td>Mã</td>
                <td>Họ và Tên</td>
                <td>Giới tính</td>
                <td>Ngày sinh</td>
                <td></td>
                <td></td>
            </tr>
            @foreach($arr_nhanvien as $arr_obj)   
            <tr>
                <td>{{$arr_obj->ma}}</td>
                <td>{{$arr_obj->ten}}</td>
                <td>@if($arr_obj->gioitinh==0){{'Nữ'}}@else{{'Nam'}}@endif</td>
                <td>{{$arr_obj->ngaysinh}}</td>
                <td><a href="{{route('view-update-nhanvien',['id'=>$arr_obj->ma,'ten'=>$arr_obj->ten,'gioitinh'=>$arr_obj->gioitinh,'ngaysinh'=>$arr_obj->ngaysinh])}}">update</a></td>
                <td><a href="#">delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>