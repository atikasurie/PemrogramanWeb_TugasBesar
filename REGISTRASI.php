<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $sandi = $_POST['sandi'];
        $konfirmasi = $_POST['konfirmasi'];
        $query = "insert into login values ('$nama','$email','$sandi','$konfirmasi')";
        $exe = mysqli_query($koneksi, $query);
        if($exe){
        echo "<script>alert('REGISTRASI BERHASIL');
        window.location='LOGIN.php';
        </script>";
        }else{
        echo "<script>alert('REGISTRASI GAGAL');</script>";
        }
        }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>REGISTRASI</title>
        <style>
            body{
                margin: 0;
                padding: 0;
                background: url(BG.JPG) no-repeat;
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                font-family: 'Times New Roman', Times, serif;
            }
            .login{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background: rgba(0,0,0,0.5);
                padding: 20px;
                width: 275px;
                height: 410px;
                box-shadow: 0 0 5px 5px black;
            }
            .logo img{
                position: absolute;
                padding-top: 0px;
                padding-left: 20px;
                width: 110px;
                height: 110px;
                float: left;
                border-radius: 20px;
            }
            .NamaResto h1{
                text-align: center;
                color: lightblue;
                font-family: algerian;
                padding-top: 10px;
            }
            .login h2{
                text-align: center;
                color: white;
                padding: 2px 0 0 0;
                letter-spacing: 10px;
            }
            .login p{
                color: white;
                font-size: 18px;
                margin: 0; 
            }
            .box-login{
                display: flex;
                justify-content: space-between;
                margin: 0 0 15px 0;
                border-bottom: 2px solid white;
                padding: 8px 0;
            }
            .box-login i{
                font-size: 20px;
                color: white;
            }
            .box-login input{
                width: 100%;
                padding 0 6px;
                background: none;
                border: none;
                outline: none;
                color: white;
                font-size: 10px;
            }
            .box-login input::placeholder{
                color: white;
            }
            .Input{
                width: 280px;
                background: none;
                padding: 15px;
                border: 1px solid white;
                font-size: 18px;
                letter-spacing: 2px;
                color: white;
                cursor: pointer;
                margin: auto;
                text-align: center;
                font-family: 'Times New Roman', Times, serif;
            }
            .Input a{
                text-decoration: none;
                justify-content: space-between;
            }
            .Input:hover{
                background: green;
            }
            .bottom{
                display: flex;
                justify-content: space-between;
                margin-top: 10px;
            }
            .bottom p{
                color: white;
                font-size: 14px;
            }
            .bottom a{
                color: whitesmoke;
                font-size: 14px;
                text-decoration: none;
            }
            .bottom a:hover{
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
    <form method="post">

        <div class="logo">
            <img src="LOGO.JPG">
        </div>

        <div class="NamaResto">
            <h1>RESTORAN TOGETHER</h1>
        </div>

        <div class="login">

            <h2>Buat Akun</h2>

            <p>Nama Pengguna</p>

            <div class="box-login">
                <i class="fas fa-man"></i>
                <input type="text" placeholder="Masukkan Nama Pengguna Anda" name="nama">
            </div>

            <p>Email</p>

            <div class="box-login">
                <i class="fas fa-email"></i>
                <input type="Email" placeholder="Masukkan Email Anda" name="email">
            </div>

            <p>Sandi</p>

            <div class="box-login">
                <i class="fas fa-key"></i>
                <input type="password" placeholder="Masukkan Password Anda" name="sandi">
            </div>

            <p>Masukkan Ulang Sandi Anda</p>

            <div class="box-login">
                <i class="fas fa-key"></i>
                <input type="password" placeholder="Masukkan Ulang Sandi Anda" name="konfirmasi">
            </div>

            <div>
                <input type="submit" value="Buat Akun" class="Input" name="tambah">
            </div>

            <div class="bottom">
                <p>Sudah Punya Akun?</p>
                <a href="#">Masuk Disini</a>
            </div>

        </div>
    </form>
    </body>
</html>