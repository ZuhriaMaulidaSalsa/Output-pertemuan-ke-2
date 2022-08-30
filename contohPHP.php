<!DOCTYPE html>
<title>example</title>
<?php
		function coba($jumlah,$nama){
			for($i=0;$i<$jumlah;$i++){
				echo("<br> selamat datang".$nama);
			}
		}
		coba(4,' salsa');

		echo("<br> ini memanggil fungsi lain");
		coba(6," zuhria")

				 
				
?>