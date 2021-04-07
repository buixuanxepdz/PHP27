<?php
	class post{
		public $tieude;
		public $duongdan;
		public $mota;
		public $noidung;

		function thongTinBaiViet(){
			$this->tieude = "Ban tin thoi su";
			$this->duongdan= "thoisu.com";
			$this->mota = "thoi-su";
			$this->noidung = "Ban tin ngay hom nay";
		}
	}

	class category extends post{
		public $ten;
		public $danhmucha;
		public $anhhienthi;

		function thongTinDanhMuc(){
			$this->ten = "Thoi su";
			$this->danhmucha = "danh muc thoi su";
			$this->anhhienthi = "thoisu.jpg";
			parent::thongTinBaiViet();
		}
	}

	class user{
		public $ten;
		public $email;
		public $matkhau;
		public $anhdaidien;

		function thongTinNguoiDung(){
			$this->ten = "Bui Xuan Xep";
			$this->email = "bxxvnua@gmail.com";
			$this->matkhau = "123456";
			$this->anhdaidien = "(o.o)";
		}
	}

	//POST
	$bv = new post();
	$bv->thongTinBaiViet();
	echo "<h4>Thong tin bai viet la:</h4>";
	echo "Tieu de: ".$bv->tieude;
	echo "<br>Duong dan: ".$bv->duongdan;
	echo "<br>Mo ta: ".$bv->mota;
	echo "<br>Noi dung: ".$bv->noidung;
	echo "<br>";

	//Category
	$dm = new category();
	$dm->thongTinDanhMuc();
	echo "<br><h4>Thong tin danh muc la:</h4>";
	echo "Ten: ".$dm->ten;
	echo "<br>Duong dan : " .$dm->duongdan;
	echo "<br>Danh muc cha : " .$dm->danhmucha;
	echo "<br>Anh hien thi : " .$dm->anhhienthi;
	echo "<br>Mo ta: ".$dm->mota;

	//User
	$ngDung = new user();
	$ngDung->thongTinNguoiDung();
	echo "<br><h4>Thong tin nguoi dung la</h4>";
	echo "Ten : ".$ngDung->ten;
	echo "<br>Email : ".$ngDung->email;
	echo "<br>Mat khau : ".$ngDung->matkhau;
	echo "<br>Anh dai dien : ".$ngDung->anhdaidien;
?>