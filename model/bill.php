<?php


//------------------------------ đơn hàng--------------------------
function loadall_donhang()
{
    $sql = "SELECT * FROM `bill_sanpham` order by id desc";
    $listdonhang = pdo_query($sql);
    return $listdonhang;
}
function delete_donhang($id)
{
    $sql = "DELETE FROM bill_sanpham WHERE id=" . $_GET['id'];
    pdo_execute($sql);
}











?>