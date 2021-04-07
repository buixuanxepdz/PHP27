<?php
	class conNguoi{
		var $hoTen;
		var $ngaySinh;
		var $queQuan;

		function an(){
			echo "Con nguoi thi an com";
		}

		function __construct(){
			echo "hello world";
		} 
	}

	class hocSinh extends conNguoi{
		var $truong;
		var $lop;
	}

	class sinhVien extends hocSinh{
		var $maSV;
		var $chuyenNganh;
	}

	$sv = new sinhVien();

	$sv->hoTen='BXX';
	$sv->maSV='534533';

	echo "<br>Ho va ten: " .$sv->hoTen;
	echo "<br>Ma SV: " .$sv->maSV;
?>