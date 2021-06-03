
<!DOCTYPE html>
<html>
    <head>

        <title>Beranda</title>
        <style>
            body{
                margin:0;
                padding:0;
                font-size:15px;
                background-color:#f4f4f4;
            }
            .container{
                width: 88%;
                margin: auto;
                overflow: hidden;
            }
            header{
                background: linear-gradient(to left, #1ae2d8,#18fa37);
                color: grey;
                min-height: 70px;
                border-bottom: 5px solid black
            }
            header #branding{
                float: left;
            }
            header #branding h1{
                margin:0;
            }
            header nav{
                float: right;
                padding-top: 30px;
                padding-bottom: 30px;
            }
            header li{
                float: left;
                display: inline;
                padding: 0 20px 0 20px;
            }
            header a{
                color: rgb(236, 9, 9);
                text-decoration: none;
                text-transform: uppercase;
                font-size: 16px;
                font-weight: bold;
            }
            header button{
                color: transparent;
                border: 1;
                width: 100px;
                height: 40px;
                border-radius: 20px;
            }
            ul{
                margin: 0;
                padding: 0;
            }
            header #branding img{
                width: 110px;
                height: 110px;
                padding-top: 4px;
                border-radius: 60px;
            }
            header #branding, header .active a{
                color: rgb(236, 9, 9);
                font-weight: bold;
            }
            header a:hover{
                color: #5F9EA0;
                font-weight: bold;
            }
            footer{
                padding: 20px;
                color: #fff;
                background: linear-gradient(to left,#05c91f, #1ae2d8);
                text-align: center;
                border-top: 5px solid black;
            }
            footer .kiri img{
                width: 80px;
                height: 80px;
                float: left;
                border-radius: 60px;
            }
            footer .tengah img{
                width: 20px;
                height: 20px;
                padding-top: 7px;
                margin: 0 5px 0 5px;
            }
            footer .tengah p{
                font-family:'Times New Roman', Times, serif;
                padding-bottom: 5px;
            }
            .submenu{
                display: none;
                border-radius: 20px;
            }
            ul li:hover .submenu{
                display: block;
                position: absolute;
                background-color: #FAEBD7;
                margin-left: -15px;
            }
            ul li:hover .submenu ul{
                display: block;
                margin: 10px;
            }
            ul li:hover .submenu ul li{
                width: 50px;
                padding: 10px;
                border-bottom: 1px dotted white;
                background: transparent;
                border-radius: 0px;
                text-align: left;

            }
            ul li:hover .submenu ul li a:hover{
                color: #6495ED;
            }
            .scroll{
                display:block;
                float: right;
                border: 3px dashed #FF7F50;
                box-shadow: -3px -3px 2px rgba(0,0,0,0.4);  
                padding:10px;
                margin-top:20px;
                width:295px;
                height:150px;
                overflow:scroll;
            }
            .poto{
                cursor: pointer;
            }
            #isi{
                padding: 10px 10px 10px 10px;
            }
            input[type=text],select,textarea{
                width: 100%;
                border-radius: 6px;
            }
            .tombol{
                width: 20%;
                border-radius: 6px;
            }
            #isi table{
                width: 100%;
                padding-right: 100px;
                padding-left: 100px;
            }
            #isi h3{
                text-align: center;
            }
            .buttom{
                width: 260px;
                background: none;
                padding: 15px;
                transform: translate(130%);
                border: 1px solid blue;
                font-size: 18px;
                letter-spacing: 5px;
                color: black;
                cursor: pointer;
                text-align: center;
                font-family: 'Times New Roman', Times, serif;
                float: center;
            }
            .buttom1{
                width: 260px;
                background: none;
                padding: 15px;
                transform: translate(130%);
                border: 1px solid blue;
                font-size: 18px;
                letter-spacing: 5px;
                color: black;
                cursor: pointer;
                text-align: center;
                font-family: 'Times New Roman', Times, serif;
                float: center;
            }
            .buttom:hover{
                background: green;
                color: white;
            }
            .buttom1:hover{
                background: brown;
                color: white;
            }
        </style>
    </head>

    <body>
    <form method="post"> 
    <header>
            <div class="container">
                <div id="branding">
                    <img src="LOGO.JPG">
                </div>
                <nav>
                    <ul>
                        <li class="active"><button><a href="BERANDA.php">BERANDA</a></button></li>
                        <li><button><a href="#">MAKANAN</a></button>
                            <div class="submenu">
                                <ul>
                                    <li><a href="PEDAS.php">PEDAS</a></li>
                                    <li><a href="MANIS.php">MANIS</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><button><a href="#">MINUMAN</a></button>
                            <div class="submenu">
                                <ul>
                                    <li><a href="KOPI.php">KOPI</a></li>
                                    <li><a href="JUS.php">JUS</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><button><a href="DESSERT.php">DESSERT</a></button></li>
                        <li><button><a href="KONTAKKAMI.php">KONTAK KAMI</a></button></li>
                        <li><button><a href="LOGIN.php">LOGOUT</a></button></li>
                    </ul>
                </nav>
            </div>
        </header>
        <section id="isi">
            <div class="container"> 
                <h3>RESTORAN TOGETHER<br>FORM PESANAN</h3>
                
                <table border="0">
                    <tr>
                        <td><label for="nama">Nama</label></td>
                        <td> : </td>
                        <td colspan="4"><input type="text"  name="nama" placeholder="Masukkan Nama Lengkap Anda"></td><br><br>
                    </tr>
                    <tr>
                        <td><label for="email">Email</label></td>
                        <td> : </td>
                        <td colspan="4"><input type="text"  name="email" placeholder="Masukkan Email Anda"><t/d><br><br>
                    </tr>
                    <tr>
                        <td><label for="notelp">Nomor Telepon</label></td>
                        <td> : </td>
                        <td colspan="4"><input type="text"  name="telepon" placeholder="Masukkan No Telepon Anda"></td><br><br>
                    </tr>
                    <tr>
                        <td><label for="alamat">Alamat</label></td>
                        <td> : </td>
                        <td colspan="4"><textarea  name="alamat" placeholder="Masukkan Alamat Anda"></textarea></td><br><br>
                    </tr>
                    <tr>
                        <td><label for="pesanan">Pesanan</label></td>
                        <td> : </td>
                        <td colspan="4">
                            <?php
                            include ("koneksi.php");
                            echo "<select name='pesanan' id='pesan'>";
                            $result=$koneksi->query("select * from makanan");
                            while($data=mysqli_fetch_array($result)){
                                echo"<option value='".$data['harga_mkn']."'>".$data['nama_mkn']." Dengan Harga ".$data['harga_mkn']."</option>";
                            }
                            echo"</select>";
                            ?>
                        </td><br><br>
                    </tr>
                    <tr>
                        <td><label for="jp">Pilih Promo</label></td>
                        <td> : </td>
                        <td colspan="4">
                            <select name="promosi" id="promo" onchange="Proses(this)">
                                <option>-</option>
                                <option value="1000">Promo Kecil</option>
                                <option value="2000">Promo Sedang</option>
                                <option value="3000">Promo Besar</option>
                            </select>
                            </td><br><br>
                    </tr>    

                    <tr>
                        <td><label for="Tp">Total Pembayaran</label></td>
                        <td> : </td>
                        <td colspan="4" id="total">0</p>
                            </td><br><br>
                    </tr>
                    <script type="text/javascript">
                        function Proses(z) {
                            var a = document.getElementById("pesan").value;
                            var x = document.getElementById("promo").value;
                            document.getElementById("total").innerHTML = a-x;
                            
                        }
                    </script>
                    <tr>
                        <td><label for="MetPem">Metode Pembayaran</label></td>
                        <td> : </td>
                        <td><input type="radio" name="metode" value="Tunai"> Tunai </td>
                        <td><input type="radio" name="metode" value="Gopay">Gopay </td><br><br>
                    </tr>
                    <tr>
                        <td colspan="10"></td>
                    </tr>
                </table>
                
                <div class="kiri">
                    <a href="BERANDA.php"><input type="submit" value="KEMBALI" class="buttom1"></a>
                    <input type="submit" value="PESAN" class="buttom" name="tambah">
                </div>
            </div>
        </section>
    
        <footer>
            <div class="container">
                <div class="kiri">
                    <img src="LOGO.JPG">
                </div>
                <div class="tengah">
                    <img src="logo1.png">
                    <img src="logo2.png">
                    <img src="logo3.png">
                    <img src="logo4.png"><br>
                    <p>Info Support Marketing</p>
                </div>
            </div>
        </footer>
    </form>
    </body>
</html>
<?php
include ("koneksi.php");
if(isset($_POST['tambah'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $telepon = $_POST['telepon'];
        $alamat = $_POST['alamat'];
        $pesanan = $_POST['pesanan'];
        $promosi = $_POST['promosi'];
        $total_bayar = $pesanan-$promosi;
        $metode = $_POST['metode'];
        $query = "insert into transaksi values (NULL,'$nama','$email','$telepon','$alamat','$pesanan','$promosi','$total_bayar','$metode')";
        $exe = mysqli_query($koneksi, $query);
        if($exe){
        echo "<script>alert('TRANSAKSI BERHASIL');
        window.location='BERANDA.php';
        </script>";
        }else{
        echo "<script>alert('TRANSAKSI GAGAL');</script>";
        }
        }
?>