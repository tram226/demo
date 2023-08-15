<div class="search">
    <form action="" method="GET">
    <table>
        <tr>
            <input type="hidden" name="controller" value="thanhvien">
            <td><input type="text" name="tukhoa" placeholder="Nhập để tìm kiếm"></td>
            <td><input type="submit" value="Tìm kiếm"></td>
        </tr>
    </table>
<input type="hidden" name="action" value="search">
    </form>
</div>

<div class="danhsach">
    <h3>Danh sách thành viên</h3>
    <table border="1px">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên thành viên</th>
                <th>Năm sinh</th>
                <th>Quê quán</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
              $stt=1;
             foreach($data as $value){
            ?>
            <tr>
                <td><?php echo $stt;?></td>
                <td><?php echo $value['hoten'];?></td>
                <td><?php echo $value['namsinh'];?></td>
                <td><?php echo $value['quequan'];?></td>
                <td>
                    <a onclick="return confirm('Bạn có chắc chắn muốn sửa không')"
                    href="index.php?controller=thanhvien&action=edit&id=<?php echo $value['id'];?>">Edit</a>
                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa không')"
                    href="index.php?controller=thanhvien&action=delete&id=<?php echo $value['id'];?>" title="xóa">Delete</a>
                </td>
            </tr>
            <?php
            $stt++;
            }
            ?>
        </tbody>
    </table>
</div>