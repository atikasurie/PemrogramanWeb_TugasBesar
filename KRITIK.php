<!DOCTYPE html>
<html>
    <head>
        <title>Kritik dan Saran</title>
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
            #ISI form{
                padding: 10px 10px 50px 10px;
            }
            #ISI input{
                width: 95%;
            }
            #ISI textarea{
                width: 95%;
            }
            #ISI .LAKU{
                float: left;
                margin-bottom: 20px;
            }
            #ISI .LAKU button{
                width: 150px;
                height: 35px;
                border-radius: 15px;
                background: none;
                border-color: lightblue;
                margin-left: 150px;
                margin-right: 75px;
                margin-bottom: 20px;
            }
            #ISI .LAKU a{
                text-decoration: none;
                color: black;
            }
            #ISI .LAKU a:hover{
                text-decoration: none;
                color: white;
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
            select{
                width:45%;
	            border-radius:5px;
	            border : 1px solid black;
	            padding:10px 10px;
            }
            .input{
                width:20%;
	            border-radius:5px;
	            border : 1px solid black;
	            padding:10px 10px;
            }
            #ISI .LAKU .b:hover{
                text-decoration: none;
                color: white;
                background: brown;
            }
            #ISI .LAKU .c:hover{
                text-decoration: none;
                color: white;
                background: red;
            }
            #ISI .LAKU .d:hover{
                text-decoration: none;
                color: white;
                background: green;
            }
        </style>
    </head>
    <body>
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
                                    <li><a href="PEDAS.php">PEDAS</a></li> <br>
                                    <li><a href="MANIS.php">MANIS</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><button><a href="#">MINUMAN</a></button>
                            <div class="submenu">
                                <ul>
                                    <li><a href="KOPI.php">KOPI</a></li> <br>
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

        <section>
            <div class="container">
                <div id="ISI">
                    <marquee>
                    <h1>RESTORAN TOGETHER</h1>
                    </marquee>
                    <form>
                        <div class="jenispesan">
                            <label for="JP">Jenis Pesan</label><br>
                            <select>
                            <option>Masukkan Jenis Pesan Anda</option>
                            <option>Kritik</option>
                            <option>Saran</option>
                            </select><br><br>

                            <label for="NL">Nama Lengkap</label><br>
                            <input type="text" class="input" name="NL" placeholder="Masukkan Nama Lengkap Anda"><br><br>
                            <label for="email">Email</label><br>
                            <input type="text" class="input" name="email" placeholder="Masukkan Email Anda"><br><br>
                            <label for="notelp">Nomor Telepon</label><br>
                            <input type="text" class="input" name="notelp" placeholder="Masukkan No Telepon Anda"><br><br>
                            <label for="kritik">Kritik</label><br>
                            <textarea class="input" name="kritik" placeholder="Masukkan Kritik Anda"></textarea><br><br>
                            <label for="saran">Saran</label><br>
                            <textarea class="input" name="saran" placeholder="Masukkan Saran Anda"></textarea><br><br>
                            </div>
                        <div class="LAKU">
                            <button class="b"><a href="KONTAKKAMI.php">KEMBALI</a></button>
                            <button class="c" type="reset"><a href="#">BATAL</a></button>
                            <button class="d" type="submit"><a href="KONTAKKAMI.php">KIRIM</a></button>
                        </div>
                    </form>
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
    </body>
</html>