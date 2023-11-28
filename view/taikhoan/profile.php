<?php
                if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                    extract($_SESSION['user']);
    
                }

                ?>
<style>
    /* Định dạng chung */
    body {
    font-family: 'Helvetica Neue', Arial, sans-serif;
    font-size: 16px;
    line-height: 1.6;
    color: #333;
}

h2.ec-title {
    font-size: 30px;
    margin-bottom: 20px;
    font-weight: bold;
    color: #3474d4;
}

label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
    color: #333;
}

input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.btn-primary,
.btn-secondary {
    display: inline-block;
    padding: 10px 15px;
    border-radius: 5px;
    text-decoration: none;
    text-align: center;
    cursor: pointer;
}

.btn-primary {
    background-color: #3474d4;
    color: #fff;
}

.btn-secondary {
    background-color: #ccc;
    color: #fff;
}

</style>

<section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Thông tin cá nhân</h2>
                        <h2 class="ec-title">Thông tin cá nhân</h2>
                        <br>
                       
                        <img src="assets/images/logo/user.png" alt="" height="150px" with="150px">
                    </div>
                </div>
                
                <div class="ec-login-wrapper">
                    
                    <div class="ec-login-container">
                        
                        <div class="ec-login-form">
                        
                            <form action="index.php?act=#!" method="post">
                                <span class="ec-login-wrap">
                               <label>User Name</label>
                                    <input type="text" value="<?=$user?>" disabled  />
                                </span>
                                <span class="ec-login-wrap">
                               <label>Full Name</label>
                                    <input type="text" value="<?=$fullname?>"   disabled />
                                </span>
                                <span class="ec-login-wrap">
                                    <label>Email</label>
                                    <input type="text" value="<?=$email?>"   disabled />
                                </span>
                                <span class="ec-login-wrap">
                                    <label>Phone Number</label>
                                    <input type="text"  value="<?=$tel?>"  disabled />
                                </span>
                                <span class="ec-login-wrap">
                                    <label>Address</label>
                                    <input type="text" value="<?=$address?>"  disabled />
                                </span>
                                </form>
                                <span class="ec-login-wrap ec-login-btn">
                                    <div class="btn">
                                    <a class="btn btn-primary" href="index.php?act=updatetk">Edit Profile</a>
                                <a class="btn btn-primary" href="index.php?act=matkhau">Edit Password</a>
                                    </div>
                                    <!-- <a class="btn btn-primary" style="background-color:#3474d4;color:#FFFFFF" type="submit" value="Edit Profile" name=""></a> -->
                                    <!-- <a href="#!" class="btn btn-secondary">Register</a> -->
                                    <!-- <input class="btn btn-primary" style="background-color:#3474d4;color:#FFFFFF" type="submit" value="Edit Password" name=""> -->
                                </span>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="danhsach">
            <h1>Quản Lý Đơn Hàng</h1>
        </div>
        </div>
        
    </section>
    