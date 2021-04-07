<?php
	class SmartPhone{
		var $hangSX;
		var $tenDT;
		var $mauSac;
		var $manHinh;

		//phuong thuc
		function themVaoGioHang(){
			echo '<br>San pham da duoc them vao gio hang';
		}
	}

	//khoi tao doi tuong
	 $iphone12ProMax = new SmartPhone();

	 $iphone12ProMax->hangSX = 'Apple';
	 $iphone12ProMax->tenDT = 'Iphone 12 pro max';
	 $iphone12ProMax->mauSac = 'Vang';
	 $iphone12ProMax->manHinh = '8 inch';

	 echo "<br>Thong tin dien thoai: ";
	 echo "<br>Hang san xuat: " .$iphone12ProMax->hangSX;
	 echo "<br>Ten dien thoai: " .$iphone12ProMax->tenDT;
	 echo "<br>Mau sac: " .$iphone12ProMax->mauSac;
	 echo "<br>Man hinh: " .$iphone12ProMax->manHinh;

	 $iphone12ProMax->themVaoGioHang();
?>