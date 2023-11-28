<?php
ob_start();
session_start();

include 'global.php';
include 'model/taikhoan.php';
include 'model/sanpham.php';
include 'model/danhmuc.php';
include 'model/pdo.php';
include 'view/header.php';
include 'model/binhluan.php';

$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();

if((isset($_GET['act'])) && ($_GET['act'] != '')) {
    $act = $_GET['act'];
    switch($act) {
        // -----------------đăng nhập --------------------
        case 'dangnhap':
            if(isset($_POST['dangnhap']) && ($_POST['dangnhap'] > 0)) {
                $user = $_POST['user'];
                $password = $_POST['password'];
                $checkuser = checkuser($user, $password);
                if(is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    if(isset($_SESSION['user'])) {
                        extract($_SESSION['user']);
                        if($role == 1) {
                            header("Location:admin/index.php");
                        } else {
                            header('Location:index.php');
                        }
                    }
                } else {
                    $thongbao = 'Account does not exist';
                }

            }
            include 'view/taikhoan/dangnhap.php';
            break;
        // -----------------đăng kí --------------------
        case 'dangky':
            if(isset($_POST['dangky']) && ($_POST['dangky'] > 0)) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $password = $_POST['password'];
                $fullname = $_POST['fullname'];
                $tel = $_POST['tel'];
                $address = $_POST['address'];
                insert_taikhoan($email, $user, $password, $fullname, $tel, $address);
                $thongbao = 'Successful account register';
            }
            include 'view/taikhoan/dangky.php';
            break;

        // -----------------Đăng xuất--------------------
        case 'thoat':
            session_unset();
            header('Location:index.php');
            break;

        case 'profile':
            include 'view/taikhoan/profile.php';
            break;


        case 'updatetk':
            if(isset($_POST['capnhat']) && ($_POST['capnhat'] > 0)) {
                $user = $_POST['user'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $fullname = $_POST['fullname'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];
                update_taikhoan($id, $user, $email, $address, $tel, $fullname);
                $_SESSION['user'] = checkuser2($user);
                header('Location:index.php?act=profile');
                // $thongbao = 'Successful account update';
            }
            include 'view/taikhoan/update.php';
            break;




        case 'matkhau':
            if(isset($_POST['capnhat']) && ($_POST['capnhat'] > 0)) {
                $password = $_POST['password'];
                $password1 = $_POST['password1'];
                $id = $_POST['id'];
                if($_POST['password'] == $_POST['password1']) {
                    update_taikhoan2($password, $id);
                    $_SESSION['user'] = checkuser3($password);
                    header('Location:index.php?act=profile');
                } else {
                    header('Location:index.php?act=matkhau');
                }
            }
            include 'view/taikhoan/matkhau.php';
            break;

        case 'chitiet':
            if(isset($_POST['guibinhluan'])){
                insert_binhluan($_POST['idpro'], $_POST['noidung']);
            }
            if(isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];

                $onesp = loadone_sanpham($id);
                extract($onesp);

                $spcungloai = loadone_sanpham_cungloai($id, $iddm);
                $binhluan = loadone_binhluan($_GET['idsp']);
                include 'view/chitietsanpham.php';
            } else {
                include 'view/home.php';
            }
            break;

        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
ob_end_flush();
?>