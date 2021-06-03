<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Login</title>
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
                width: 260px;
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
                padding: 5px 0 0 0;
                letter-spacing: 10px;
            }
            .login p{
                color: white;
                font-size: 22px;
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
                padding 0 10px;
                background: none;
                border: none;
                outline: none;
                color: white;
                font-size: 15px;
            }
            .box-login input::placeholder{
                color: white;
            }
            .buttom{
                width: 260px;
                background: none;
                padding: 15px;
                border: 1px solid white;
                font-size: 18px;
                letter-spacing: 5px;
                color: white;
                cursor: pointer;
                text-align: center;
                font-family: 'Times New Roman', Times, serif;
            }
            .buttom a{
                text-decoration: none;
            }
            .buttom:hover{
                background: green;
            }
            .bottom1{
                display: flex;
                justify-content: space-between;
                margin-top: 10px;
            }
            .bottom2{
                display: flex;
                justify-content: space-between;
                margin-top: 10px;
            }
            .bottom1 p{
                color: white;
                font-size: 14px;
            }
            .bottom1 a{
                color: whitesmoke;
                font-size: 14px;
                text-decoration: none;
            }
            .bottom2 a{
                color: whitesmoke;
                font-size: 14px;
                text-decoration: none;
                text-align: right;
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

            <h2>Form Login</h2>

            <p>Nama Pengguna</p>

            <div class="box-login">
                <i class="fas fa-man"></i>
                <input type="text" placeholder="Masukkan Nama Pengguna Anda" name="user">
            </div>

            <p>Sandi</p>

            <div class="box-login">
                <i class="fas fa-key"></i>
                <input type="password" placeholder="Masukkan Sandi Anda" name="pass">
            </div>

            <div>
                <input type="submit" value="Masuk" class="buttom" name="login">
            </div>
            <?php
                include('koneksi.php');
                if(isset($_POST['login'])){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $query = "select * from login where nama = '$user' and sandi = '$pass'";
                    $exe = mysqli_query($koneksi,$query);
                if(mysqli_num_rows($exe)>=1){
                $data = mysqli_fetch_array($exe);
                $_SESSION['user']=$data['nama'];
                echo "<script>alert('LOGIN BERHASIL');
                window.location = 'BERANDA.php';</script>";

                }else{
                echo "<script>alert('LOGIN GAGAL');
                window.location = 'LOGIN.php';</script>";
                    }
                }
            ?>
            <div class="bottom1">
                <p>Belum Punya Akun?</p>
                <a href="REGISTRASI.php">Registrasi</a>
            </div>

            <div class="bottom2">
                <a href="#">Lupa Password</a>
            </div>

        </div>
        </form>
    </body>
</html>