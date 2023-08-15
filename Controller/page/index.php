<?php
if(isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = '';
}

$thanhcong = array();

switch($action){
    case 'add':{
        if(isset($_POST['add_user'])){
            $hoten = $_POST['hoten'];
            $namsinh = $_POST['namsinh'];
            $quequan = $_POST['quequan'];

            if($db->InsertData($hoten,$namsinh,$quequan)){
                $thanhcong[] = 'add_success';
            }

        }
      require_once('View/thanhvien/add_user.php');
        break;
    }
    case'edit':{
        if(isset($_GET['id'])){
            $id =$_GET['id'];
            $tbltable = "thanhvien";
            $dataID = $db->getDataId($tbltable,$id);
        }

        if(isset($_POST['update_user'])){
            $hoten = $_POST['hoten'];
            $namsinh = $_POST['namsinh'];
            $quequan = $_POST['quequan'];

            if($db->UpdateData($id,$hoten,$namsinh,$quequan)){
                header('location: index.php?controller=thanhvien&action=list');
            }
        }
        require_once('View/thanhvien/edit_user.php');
            break;
    }
    case'delete':{
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $tbltable = "thanhvien";
           if($db->Delete($tbltable,$id)){
            header('location:index.php?controller=thanhvien&action=list');
           }else{
            header('location:index.php?controller=thanhvien&action=list');

           }
        }
       
            break;
    }
    case'search':{
        if(isset($_GET['tukhoa'])){
            $key = $_GET['tukhoa'];
            $tbltable = "thanhvien";
            $data_Search = $db->SearchData($tbltable,$key);
        }
        require_once('View/thanhvien/search_user.php');
        break;
    }

    case 'list':{
        $tbltable = "thanhvien";
        $data = $db->getAllData($tbltable);
        require_once('View/thanhvien/list.php');
        break;
    }
    default:{
        require_once('View/thanhvien/list.php');
        break;
    }
}
?>