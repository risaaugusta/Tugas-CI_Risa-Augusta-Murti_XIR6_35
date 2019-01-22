<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda</title>
    <style type="text/css">
    header{
    /* background-color: #01292f; */
    overflow: hidden;
    margin: -8px;}
nav {
    float: right;
    margin-right: 48px;
}
ul {
    float: right;
    list-style: none;
    margin: 14px;
}
li {
    width: 100px;
    text-align: center;
    padding: 30px 0;
}
ul li{
    display: inline-block;
}
ul li a{
    text-decoration: none;
    color: blanchedalmond;
    padding: 5px 20px;
    border: 1px solid transparent;
    transition: 0.6s ease;
    font-family: sans-serif;
}
ul li a:hover{
    background-color: tomato;
    color: black;
    border: 2px solid tomato;
    border-radius: 40px;
    transition-duration: 0.5s;
}

#logo {
    width: 150px;
    float: left;
    height: auto;
  }
.atas{
    max-width: 1200px;
    margin: auto; 
}

p{
    text-align: left;
    font-size: 20px;
    color: rgb(233, 209, 177);
}

@media (max-width: 700px){
 p{
     text-align: left;
     font-size:10px;
     color:#e7530f;
 }
}
@media (max-width: 1000px){
    p{
        text-align: justify;
        font-size:10px;
        color:darkred;
    }
   } 
    </style>
</head>
<body style="background: linear-gradient(135deg, #325adf 0%, #e7530f 100%);">
<header class="ob">
    <div class="atas">
    <div id="logo"><img style="width: 127px;margin-left: 40px;float: left;" src="<?= base_url()?> assets/ngkrun.png" alt=""></div>
        <nav>
            <ul>
             <li><a href="<?= base_url('Welcome/utama')?>">Home</a></li>
             <li><a href="<?= base_url('Welcome/event')?>">Event</a></li>
             <li><a href="<?= base_url('Welcome/gallery')?>">Gallery</a></li>
             <li><a href="<?= base_url('Welcome/contact')?>">Contact</a></li>
             <li><a href="<?= base_url('Welcome/profil')?>">MyProfil</a></li>   
            </ul>
        </nav>
    </div>
</header>

<h5 align="center" style="color:skyblue;text-align: center;font-size: 10.3mm;margin-top:
97px;margin-left: 12px;font-family: sans-serif;">Selamat Datang <?= $nama_lengkap ?>
<br>Berperilakulah seperti <?= $jenis_kelamin?></h1>

<p style="font-size: 18px;margin-left: 56px;margin-top: 39px;">Lorem ipsum sit amet,
consectur adipiscing elit.
    Phasellus eu rhoncus nisl. Vestibulum condimentum quis turpis aget varius. Nulla faucibus
    odio at ultrices suscipit.
    Integer egasteas gravida aliquet</p>
<img style="width: 823px;margin-left: 510px;margin-top: -312px;" src="<?= base_url()?>assets/back.png" alt="">
</body>
</html>