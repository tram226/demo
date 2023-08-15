<?php

use function PHPSTORM_META\elementType;

class Database {
    private $hostname = 'localhost';
    private $username = 'root';
    private $pass='';
    private $dbname = 'QLTV';

    private $conn = NULL;
    private $result = NULL;

    public function connect(){
        $this->conn = new mysqli($this->hostname,$this->username,$this->pass,$this->dbname);
        if(!$this->conn){
           echo " Kết nối thất bại";
           exit();
        }else{
            mysqli_set_charset($this->conn,'utf8');
        }
        return $this->conn;
    }
   
    //thực thi câu lệnh
    public function execute($sql){
        $this->result = $this->conn->query($sql);
        return $this->result;
    }

    //Lấy dữ liệu
    public function getData(){
        if($this->result){
            $data = mysqli_fetch_array($this->result);
        }else{
            $data = 0;
        }
        return $data;
    }

    //Lấy toàn bộ dữ liệu
    public function getAllData($table){
        $sql = "SELECT *FROM $table";
        $this->execute($sql);
        if($this->num_rows()==0){
            $data = 0;
        }else{
            while($datas = $this->getData()){
                $data[] = $datas;
            }
        }
        return $data;
    }
    //Lấy dữ liệu cần sửa
     public function getDataId($table,$id){
        $sql = "SELECT *FROM $table WHERE id = '$id'";
        $this->execute($sql);
    if($this->num_rows()!=0){
        $data = mysqli_fetch_array($this->result);
    }else{
        $data = 0;
    }
    return $data;
    }
    //Đếm số bản ghi
    public function num_rows(){
        if($this->result){
            $num = mysqli_num_rows($this->result);
        }else{
            $num = 0;
        }
        return $num;
    }

    //Thêm dữ liệu
    public function InsertData($hoten,$namsinh,$quequan){
        $sql = "INSERT INTO thanhvien(id, hoten, namsinh, quequan)VALUES(null,'$hoten','$namsinh','$quequan')";
        return $this->execute($sql);
    }

    //Sửa dữu liệu
    public function UpdateData($id,$hoten,$namsinh,$quequan){
        $sql = "UPDATE thanhvien SET hoten = '$hoten',namsinh = '$namsinh',quequan = '$quequan' WHERE id = '$id'";
        return $this->execute($sql);
    }

    //Xóa dữ liệu
    public function Delete($table,$id){
        $sql = "DELETE FROM $table WHERE id='$id'";
        return $this->execute($sql);
    }
    //Tìm kiếm theo tên
    public function SearchData($table,$key){
        $sql = "SELECT *FROM $table WHERE hoten REGEXP '$key' ORDER BY id DESC  ";
        $this->execute($sql);
        if($this->num_rows()==0){
            $data = 0;
        }else{
            while($datas = $this->getData()){
                $data[] = $datas;
            }
        }
        return $data;
    }
}

?>