<!DOCTYPE html>
<html>
    <head>
        <title>Kontak Kami</title>
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
                padding-top: 10px 10px 10px 10px;
                float: center;
                min-width: 400px;
                border-top: 5px solid black;
            }
            #newsletter table{
                border: none;
                width: 100%;
                padding: 100px 100px 100px 100px;
            }
            #newsletter table a{
                text-decoration: none;
                color: black;
            }
            #newsletter table img{
                width: 50px;
                height: 50px;
                border-radius: 50px;
            }
            #newsletter p{
                margin-top: 35px;
            }
            #newsletter button{
                width: 150px;
                height: 40px;
                background: none;
                color: black;
                border-radius: 50px;
                margin-top: 10px;
            }
            #newsletter button:hover{
                background: lightblue;
                color: blue;
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
                        <li><button><a href="#">KONTAK KAMI</a></button></li>
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
            <table border="0">
                <tr>
                    <td><img src="rumah.jpeg"></td>
                    <td> Alamat : Jalan Agatis III Sungai Miai Kecamatan Banjarmasin Utara, Kota Banjarmasin</td>
                </tr>
                <tr>
                    <td><img src="logo2.png"></td>
                    <td><a href="https://api.whatsapp.com/send?phone=6282358510465&text=Assalamualaikum" target="_blank"> +6282358510465</a></td>
                </tr>
                <tr>
                    <td><img src="logo1.png"></td>
                    <td> @restoran.together</td>
                </tr>
                <tr>
                    <td><img src="logo3.png"></td>
                    <td> Restoran_together</td>
                </tr>
                <tr>
                    <td><img src="logo4.png"></td>
                    <td> Restoran-together</td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center"><p>UNTUK KRITIK DAN SARAN, SILAHKAN KLIK LINK DI BAWAH INI !!!</p></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center"><button><a href="KRITIK.php">KRITIK DAN SARAN</a></button></td>
                </tr>
            </table>
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