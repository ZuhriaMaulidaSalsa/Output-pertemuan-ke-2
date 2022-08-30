<!DOCTYPE html>
<head>
	<title>example</title>
</head>
<body>
		<?php
		function coba($jumlah,$nama){
			for($i=0;$i<$jumlah;$i++){
				echo("<br> selamat datang",$nama);
			}
		}
		coba(4,'salsa');

		echo("<br> ini memanggil fungsi lain");
		coba(6,"zuhria")
				 
				
		?>
</body>
</html