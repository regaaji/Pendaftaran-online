<?php 

$conn = mysqli_connect("localhost", "root","", "pak_ivan");

function tambah($data){
	global $conn;

$nama = strtolower(stripcslashes($data["nama"]));
$nis = strtolower(stripcslashes($data["nis"]));
$ortu = strtolower(stripcslashes($data["ortu"]));
$sekolah = strtolower(stripcslashes($data["sekolah"]));
$kelamin = strtolower(stripcslashes($data["kelamin"]));
$tanggal = strtolower(stripcslashes($data["tanggal"]));
$alamat = strtolower(stripcslashes($data["alamat"]));


//cek username sudah ada atau belum
$result = mysqli_query($conn,"SELECT nama FROM pak_ivan WHERE nama ='$nama'");
if (mysqli_fetch_assoc($result)){
	echo "<script>
	alert('sudah terdaftar');
	</script>";
	return false;

}

//tambahkan userbaru kedata bases
mysqli_query($conn,"INSERT INTO pak_ivan VALUES('','$nama','$nis','$ortu','$sekolah','$kelamin','$tanggal','$alamat')");
return mysqli_affected_rows($conn);
}
 ?>