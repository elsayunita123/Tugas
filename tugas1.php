<?php
	$nama=$_POST['Nama'];  						// $_GET
	$KJ=$_POST['KJ'];  						// $_REQUEST
	$KMK=$_POST['KMK'];
	
printf ("Nama		  : %s <br>", strtoupper ($nama));
printf ("No. Urut     : %s <br>", substr ($KJ, 6, 3));
printf ("Kode Jurusan : $KJ <br>");
$jurusan = substr($KJ,0,2);
switch($jurusan){
			case "TI";
			$cetakjurusan = 'TEKNIK INFORMATIKA';
			break;
			
			case "HK";
			$cetakjurusan = 'HUKUM';
			break;
						
			default ;
			$cetakjurusan = 'AKUTANSI';
			break;
	}
printf ("Jurusan : %s <br>", ($cetakjurusan));
printf ("Angkatan     : %s <br>", substr ($KJ, 2, 4));
printf ("Kode Mata Kuliah : $KMK <br>");																																																																																																																																																																																																																																																														
																																																																																																																																																																																																																																																																									//ADITIA
$jenis = substr($KMK,0,4);
switch($jenis){
			case "MKDU";
			$cetakjenis = 'DASAR UMUM';
			break;
			
			case "MKIN";
			$cetakjenis = 'INTI';
			break;
			
			default ;
			$cetakjenis = 'PILIHAN';
			break;
	}
printf ("Jenis Mata Kuliah : %s <br>", ($cetakjenis));
printf ("SKS     : %s <br>", substr ($KMK, 4, 1));
?>