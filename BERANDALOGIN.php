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
                min-width: 300px;
                float : left;
            }
            #contens .kiri h1{
                padding-top: 15px;
                width: 88%;
                margin: auto;
                overflow: hidden;
            }
            #contens img{
                float : left;
                margin: 0;
                padding: 15px;
				border-radius: 50%;
				width: 100px;
				height: 100px;
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
                width: 110px;
                height: 110px;
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
                        <li class="active"><button><a href="#">BERANDA</a></button></li>
                        <li><button><a href="#">MAKANAN</a></button>
                            <div class="submenu">
                                <ul>
                                    <li><a href="#">PEDAS</a></li><br>
                                    <li><a href="#">MANIS</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><button><a href="#">MINUMAN</a></button>
                            <div class="submenu">
                                <ul>
                                    <li><a href="#">KOPI</a></li><br>
                                    <li><a href="#">JUS</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><button><a href="DESSERT.php">DESSERT</a></button></li>
                        <li><button><a href="KONTAKKAMI.php">KONTAK KAMI</a></button></li>
                        <li><button><a href="LOGIN.php">LOGIN</a></button></li>
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
            </div>
        </section>

        <section id="contens">
            <div class="container">
                <div class="kiri">
                    <h1>Rekomendasi Makanan</h1>
                    <p>
                        <img src="BAKSO.jpeg" class="poto">
                        <img src="BALADO.JPG" class="poto">
                        <img src="NASGOR.jpeg" class="poto">
                        <img src="RICA.jpeg" class="poto">
                    </p>
                    <h1>Rekomendasi Minuman</h1>
                    <p>
                        <img src="CINCAU.JPG" class="poto">
                        <img src="JUS ALPUKAT.JPG" class="poto">
                        <img src="ICE.JPG" class="poto">
                        <img src="JUS MANGGA.JPG" class="poto">
                    </p>
                    <h1>Rekomendasi Dessert</h1>
                    <p>
                        <img src="CHOCOLATE FROZEN HICS.jpg" class="poto">
                        <img src="FROZEN HAUTE C.jpg" class="poto">
                        <img src="GOLDEN OS.jpg" class="poto">
                        <img src="THE GOLDEN PC.jpg" class="poto">
                    </p>
                </div>
                <script type="text/javascript">
                     x = document.querySelectorAll('img');
                        for(i=0; i<x.length; i++){
                             x[i].onclick = function(){
                                    window.alert("ANDA TIDAK BISA MELIHAT DETAIL REKOMENADI KARENA ANDA BELUM LOGIN, SILAHKAN LOGIN!")
                }
            }
    </script>
                <div class="kanan">
                    <table border="1">
                        <th colspan=2>Jam Buka</th>
                        <tr>
                            <td>Senin</td>
                            <td>07:00 - 15:00</td>
                        </tr>
                        <tr>
                            <td>Selasa</td>
                            <td>07:00 - 15:00</td>
                        </tr>
                        <tr>
                            <td>Rabu</td>
                            <td>07:00 - 15:00</td>
                        </tr>
                        <tr>
                            <td>Kamis</td>
                            <td>07:00 - 15:00</td>
                        </tr>
                        <tr>
                            <td>Jumat</td>
                            <td>07:00 - 11:00</td>
                        </tr>
                        <tr>
                            <td>Sabtu</td>
                            <td>07:00 - 18:00</td>
                        </tr>
                    </table>
                </div>
                <div class="scroll">
                    <img src="chef.jpg">
                    <img src="chef1.jpg">
                    <img src="chef2.jpg">
                    <img src="chef3.jpeg">
                </div>
            </div>
        </section>

        <section id="gallery">
            <div class="container">
                <h1>RESTAURANT PHOTO GALLERY</h1>
				<img src="galeri.jpg">
                <img src="galeri1.jpg">
                <img src="galeri2.jpg">
				<img src="galeri3.jpg">
				<img src="galeri4.jpg">
                <img src="galeri5.jpg">
                <img src="galeri6.jpg">
				<img src="galeri7.jpeg">
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