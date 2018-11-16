<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post" action="{{route('process-update-nhanvien',['ma'=>$obj->ma])}}">
			<input type="hidden" value="{{csrf_token()}}" name="_token">
		  Ten:<br>
		  <input type="text" name="ten" value="{{$obj->ten}}">
		  <br>
		  Gioi tinh:
		 <input type="radio" value="0" name="gioitinh" @if($obj->gioitinh==0){{'checked=""'}}@endif>Nu
		 <input type="radio" value="1" name="gioitinh" @if($obj->gioitinh==1){{'checked=""'}}@endif>Nam
		 <br>
		   Ngay sinh:<br>
		  <input type="date" name="ngaysinh" value="{{$obj->ngaysinh}}">
		  <br><br>
		  <input type="submit" value="Update">
	</form>

</body>
</html>