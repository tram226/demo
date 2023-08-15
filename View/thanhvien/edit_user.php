<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thành viên</title>
</head>
<body>
    <div class="container">
        <div class="dkthanhvien">
            <a href="index.php?controller=thanhvien&action=list" class="list">Danh sách</a>
            <h3>Cập nhật mới thành viên</h3>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>Tên thành viên : </td>
                        <td><input type="text" name ="hoten" value="<?php echo $dataID['hoten']; ?>" placeholder="Tên thành viên"></td>
                    </tr>
                    <tr>
                        <td>Năm sinh : </td>
                        <td><input type="text" name ="namsinh" value="<?php echo $dataID['namsinh']; ?>" placeholder="Năm sinh"></td>
                    </tr> 
                    <tr>
                        <td>Tên thành viên : </td>
                        <td><input type="text" name ="quequan" value="<?php echo $dataID['quequan']; ?>" placeholder="Quê quán"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="update_user" value="Cập nhật"></td>
                    </tr>
                </table>
            </form>
          
        </div>

    </div>
</body>
</html>