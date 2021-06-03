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
                padding: 15px
            }
            #contens .kiri{
                width: 100%;

            }
            #contens .kiri h1{
                padding-top: 15px;
                width: 88%;
                margin: auto;
                overflow: hidden;
                text-align: center;
            }
            #contens img{
                display: block;
                margin-left: auto;
                margin-right: auto;
                padding: 40px;
				border-radius: 20%;
				width: 300px;
				height: 300px;
                float: center;
            }
            #contens .kanan{
                float: right;
            }
            #contens table{
                float: right;
                margin-top : 15px;
                padding : 10px 10px 10px 10px solid;
				width: 320px;
				height: 320px;
				text-align: center;
				box-shadow: -3px -3px 2px rgba(0,0,0,0.4);  
				border: 3px dashed #FF7F50;
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
                                    <li><a href="PEDAS.php">PEDAS</a></li><br>
                                    <li><a href="MANIS.php">MANIS</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><button><a href="#">MINUMAN</a></button>
                            <div class="submenu">
                                <ul>
                                    <li><a href="KOPI.php">KOPI</a></li><br>
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
                    <h1>CENDIL</h1>
                    <p>
                        <img src="CENDIL.JPG">
                    </p>
                    <center>
                    <font size="4">
                    <p>10.000</p>
                    <p>
                    Kue ketan kecil berbahan dasar tepung beras, dimaniskan dengan gula, dibentuk dan diwarnai. Disajikan dengan parutan kelapa segar.
                    </p>
                    </font>
                </center>
                <div class="kiri">
                <a href="DESSERT.php"><input type="submit" value="KEMBALI" class="buttom1"></a>
                <a href="FORMPESANAN.php"><input type="submit" value="BELI MAKANAN" class="buttom"></a>
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