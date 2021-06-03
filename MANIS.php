<!DOCTYPE html>
<html>
    <head>
        <title>Makanan Manis</title>
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
            #showcase{
                min-height: 300px;
                background: url(BG.jpg)no-repeat 0px -275px;
                background-size: cover;
                background-attachment: fixed;
                background-position: center;
                text-align: center;
                color:#ec1063;
            }
            #newsletter{
                padding: 15px;
                color: #fff;
                background: linear-gradient(to left,#036e11, #1ae2d8);
                border-top: 5px solid black
            }
            #newsletter h1{
                padding-top: 15px;
                float: left;
            }
            #newsletter form{
                float: right;
                margin-top: 15px;
            }
            #newsletter p{
                font-family : Algerian;
            }
            #newsletter input[type=""]{
                padding: 4px;
                height: 25px;
                width: 250px;
            }
            .buttonsubs{
                height: 25px;
                background-color: grey;
                border: 0;
                padding-left: 15px;
                padding-right:15px;
                color: red
            }
            #contens{
                padding: 15px;
            }
            #contens .kiri{
                width: 100%;
                margin-left: auto;
                margin-right: auto;
                float: center;
                
            }
            #contens .kiri .FOTO{
                float: left;
            }
            #contens .kiri .FOTO .BAWAH button{
                color: transparent;
                border: 1;
                width: 75px;
                height: 40px;
                border-radius: 20px;
                border-color: #87CEFA;
            }
            #contens .kiri .FOTO .BAWAH button:hover{
                background-color: lightblue;
            }
            #contens .kiri .FOTO .BAWAH a{
                text-decoration: none;
                color: black;
            }
            #contens .kiri .FOTO img{
                float : center;
                margin: 0;
                padding: 40px;
				border-radius: 50%;
				width: 200px;
				height: 200px;
            }
            #contens .kiri .FOTO .BAWAH table{
                height: 120px;
                width: 250px;
                border: none;
                padding-left: 25px;
                box-shadow: 0 0 0 0;
                text-align: center
            }
            #contens .kiri h1{
                padding-top: 15px;
                width: 100%;
                margin: auto;
                overflow: hidden;
            }
            #gallery{
                margin:0;
                padding: 15px;
                color:black;
                background: #6495ED;
            }
			#gallery img{
				margin-left: 20px;
				margin-top: 20px;
                width: 250px;
                height: 250px;
			}
            footer{
                padding: 20px;
                color: #fff;
                background: linear-gradient(to left,#05c91f, #1ae2d8);
                text-align: center;
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

        <section id="showcase">
            <div class="container">
            </div>
        </section>

        <section id="newsletter">
            <div class="container">
                <h1>RESTORAN TOGETHER</h1>
                <form>
                    <p>pencarian</p>
                    <input type="Search" placeholder="write a text">
                    <button class="buttonsubs">Cari</button>
                </form>
            </div>
        </section>

        <section id="contens">
            <div class="container">
                <div class="kiri">
                    <marquee>
                    <h1>MAKANAN MANIS</h1>
                    </marquee>
                    <div class="FOTO">
                        <a href="NASIGORENGMAN.php"><img src="NASGORMAN.jpeg" class="poto"></a>
                        <div class="BAWAH">
                        <table border="0">
                            <tr>
                                <td>NASI GORENG</td>
                            </tr>
                            <tr>
                                <td>Rp 10.000</td>
                            </tr>
                            <tr>
                                <td><button><a href="NASIGORENGMAN.php">Lihat Deskripsi</a></button></td>
                            </tr>
                        </table>
                        </div>
                    </div>
                    <div class="FOTO">
                        <a href="NASIKEBULI.php"><img src="NASIKEBULI.jpg" class="poto"></a>
                        <div class="BAWAH">
                        <table border="0">
                            <tr>
                                <td>NASI KEBULI</td>
                            </tr>
                            <tr>
                                <td>Rp 15.000</td>
                            </tr>
                            <tr>
                                <td><button><a href="NASIKEBULI.php">Lihat Deskripsi</a></button></td>
                            </tr>
                        </table>
                        </div>
                    </div>
                    <div class="FOTO">
                        <a href="NASIKUNING.php"><img src="NASIKUNING.jpg" class="poto"></a>
                        <div class="BAWAH">
                        <table border="0">
                            <tr>
                                <td>NASI KUNING</td>
                            </tr>
                            <tr>
                                <td>Rp 10.000</td>
                            </tr>
                            <tr>
                                <td><button><a href="NASIKUNING.php">Lihat Deskripsi</a></button></td>
                            </tr>
                        </table>
                        </div>
                    </div>
                    <div class="FOTO">
                        <a href="AYAMGORENG.php"><img src="AYAMGORENG.jpeg" class="poto"></a>
                        <div class="BAWAH">
                        <table border="0">
                            <tr>
                                <td>AYAM GORENG</td>
                            </tr>
                            <tr>
                                <td>Rp 12.000</td>
                            </tr>
                            <tr>
                                <td><button><a href="AYAMGORENG.php">Lihat Deskripsi</a></button></td>
                            </tr>
                        </table>
                        </div>
                    </div>
                    <div class="FOTO">
                        <a href="AYAMKRISPI.php"><img src="AYAMKRISPI.jpeg" class="poto"></a>
                        <div class="BAWAH">
                        <table border="0">
                            <tr>
                                <td>AYAM KRISPI</td>
                            </tr>
                            <tr>
                                <td>Rp 15.000</td>
                            </tr>
                            <tr>
                                <td><button><a href="AYAMKRISPI.php">Lihat Deskripsi</a></button></td>
                            </tr>
                        </table>
                        </div>
                    </div>
                    <div class="FOTO">
                        <a href="IKANBAKAR.php"><img src="IKANBAKAR.jpeg" class="poto"></a>
                        <div class="BAWAH">
                        <table border="0">
                            <tr>
                                <td>IKAN BAKAR</td>
                            </tr>
                            <tr>
                                <td>Rp 15.000</td>
                            </tr>
                            <tr>
                                <td><button><a href="IKANBAKAR.php">Lihat Deskripsi</a></button></td>
                            </tr>
                        </table>
                        </div>
                    </div>
                    <div class="FOTO">
                        <a href="MIEGORENG.php"><img src="MIGORENG.jpeg"></a>
                        <div class="BAWAH">
                        <table border="0">
                            <tr>
                                <td>MIE GORENG</td>
                            </tr>
                            <tr>
                                <td>Rp 10.000</td>
                            </tr>
                            <tr>
                                <td><button><a href="MIEGORENG.php">Lihat Deskripsi</a></button></td>
                            </tr>
                        </table>
                        </div>
                    </div>
                    <div class="FOTO">
                        <a href="SOTOAYAM.php"><img src="SOTOAYAM.jpeg"></a>
                        <div class="BAWAH">
                        <table border="0">
                            <tr>
                                <td>SOTO AYAM</td>
                            </tr>
                            <tr>
                                <td>Rp 15.000</td>
                            </tr>
                            <tr>
                                <td><button><a href="SOTOAYAM.php">Lihat Deskripsi</a></button></td>
                            </tr>
                        </table>
                        </div>
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