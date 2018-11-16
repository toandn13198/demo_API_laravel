<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #form{
             text-align: center;
            height: 200px;
            width: 300px;
            margin:10px auto;
            padding: 20px;
            background: green;
        }
        #err{
            color: red;
        }
    </style>
</head>
<body>
    <form action="{{route('xuly')}}">
    <div id="form">
        <h1>Nhap phep toan</h1>
        <div>
            <label >nhap a:</label>
            <input type="text" name="a" ><br>
        </div>
        <div>
            <label >nhap b:</label>
            <input type="text" name="b" ><br>
        </div>
        <input type="submit" value="Tính toán"><br>
        <span id="err">@if(session('err')){{session('err')}}@endif</span>
        
    </div>
    </form>
</body>
</html>