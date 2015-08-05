# sendcode
gửi code với highlight syntax. code nho nhỏ cho những ai đang viết blog hướng dẫn lập trình cần nơi gửi code để xem, để fix cho dễ từ thành viên
# Hướng dẫn
1. Tạo database
2. import file sharecode.sql vào database mới tạo
3. sửa thông tin database ở file sql_connect.php

	$servername = "localhost";
	
	$username = "root"; // id đăng nhập database
	
	$password = ""; // mật khẩu đăng nhập database
	
	$dbname = "sharecode"; // tên database

	$tbname = "sharecode"; // tên bảng
	
4. thay đổi menu ở menu.php và index.php
Do không biết về php nhiều nên viết code có lộn xộn, khó hiểu. Mong mọi người thông cảm :D
web demo: http://sendcode.tutsmodel.info/
