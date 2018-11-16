# demo_API_laravel
demo API bằng Laravel v1.
1: tạo CSDL nhanvien
(
  ma int primary key auto_crement
  ,ten varchar(50)
  ,gioitinh boolean
  ,ngaysinh date

)
2:sử dụng:
   - get all list nhanvien: GET localhost:8080/nhanvien.
   - get nhanhvien theo Ten: GET localhost:8080/nhanvien/{ten}
        các Err:'err'=>'04','message'=>'khong co doi tuong trong CSDL !'/nhanvien {ten} không tồn tại tr CSDL.
   - create nhanvien: POST localhost:8080/nhanvien  postman->body->json dung dinh dang: 
   [
    {
        "ten": "anh",
        "gioitinh": 1,
        "ngaysinh": "1993-10-02"
    }
   ]
   =>send
    -update nhanvien:PUT localhost:8080/nhanvien/{id}  postman->body->json dung dinh dang: 
     {
        "ten": "anh",
        "gioitinh": 1,
        "ngaysinh": "1993-10-02"
    }
    =>send
    -delete nhanvien: DELETE localhost:8080/nhanvien/{id} =>send
        
   
