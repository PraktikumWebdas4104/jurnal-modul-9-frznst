<?php 

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "a"; //isi sesuai nama database anda

	function __construct(){
		$this->conn = mysqli_connect($this->host,$this->uname,$this->pass,$this->db);
			
	}

	function tampil_data(){
		//lengkapilah method tampil data
		//query select user
		$data=mysqli_query($this->conn,"SELECT * FROM b");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}

	function input($nama,$alamat,$usia){
		//buatlah method input
		//query inset into user
		mysqli_query($this->conn,"INSERT INTO b(nama,alamat,usia) VALUES('$nama','$alamat','$usia')");
	}

	function hapus($id){
		//buatlah method hapus
		//query delete from id where id ='$id'
		mysqli_query($this->conn,"DELETE FROM b WHERE id='$id'");
	}

	function edit($id){
		//lengkapilah method edit
		//query select from user where id ='$id'
		$data=mysqli_query($this->conn,"SELECT * FROM b WHERE id='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function update($id,$nama,$alamat,$usia){
		//buatlah method update
		//query update user set blablabla where id='$id'
		$d=mysqli_query($this->conn,"UPDATE b SET 
			nama='$nama',
			alamat='$alamat',
			usia='$usia' 
			WHERE id='$id'");

	}

} 

?>