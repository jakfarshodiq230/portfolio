<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="robots" content="index, follow" /> -->
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="dist/style.css">
    <link rel="icon" type="image/x-icon" href="dist/js_4.jpg">
    <title>Portfolio | Jakfar Shodiq</title>

</head>
<body>
    
<!-- header section starts  -->

<header>

    <div class="user">
        <img src="dist/js_3.jpg" alt="">
        <h3 class="name">Jakfar Shodiq</h3>
        <!-- <p class="post">Freelance | Web Developer | Frontend Developer</p> -->
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="#education">Pendidikan</a></li>
            <li><a href="#kerja">Pengalaman Kerja</a></li>
            <li><a href="#kemampuan">Kemampuan</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<div id="menu" class="fas fa-bars"></div>

<!-- home section starts  -->

<section class="home" id="home">

    <h3>Hallo...!</h3>
    <h1>Saya<span> Jakfar Shodiq</span></h1>
    <p>Freelance | Web Developer | Frontend Developer.
    </p>
    <div class="btn-group" role="group">
        <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>
        <a href="dist/CV.pdf"><button class="btn">Resume <i class="fas fa-eye"></i></button></a>
    </div>
</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> <span>Tentang</span> </h1>

<div class="row">

    <div class="info">
        <h3> <span> Nama : </span> Jakfar Shodiq </h3>
        <h3> <span> Umur : </span> <?= date('Y')-1996; ?> </h3>
        <h3> <span> Jenis Kelamin : </span> Laki-laki </h3>
        <h3> <span> Agama : </span> Islam </h3>
        <h3> <span> Hobi : </span> Olahraga, Ngoding </h3>
        <h3> <span> Bahasa : </span> Jawa, Indonesia </h3>
        <!-- <a href="#"><button class="btn"> download CV <i class="fas fa-download"></i> </button></a> -->
    </div>

    <div class="counter">
        <div class="btn-group" role="group">
            <a href="https://gitlab.com/jakfarshodiq230"><button class="btn">Gitlab</button></a>
            <a href="https://github.com/jakfarshodiq230"><button class="btn">Github</button></a>
            <a href="https://www.instagram.com/jakfarshodiq96"><button class="btn">Istragam</button></a>
        </div>
    </div>

</div>

</section>

<!-- about section ends -->

<!-- education section starts  -->

<section class="education" id="education">

<h1 class="heading"> Pendidikan <span>Formal</span> </h1>

<div class="box-container">

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2015 - 2020</span>
        <h3>Universitas Islam Riau (UIR)</h3>
        <p>S-1 Teknik Informatika</p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2012 - 2015</span>
        <h3>MA Hidayatul Muta'allim</h3>
        <p>Jurusan IPA</p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2009 - 2012</span>
        <h3>MTs Hidayatul Muta'allim</h3>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2004 - 2009</span>
        <h3>SDN Negeri 30</h3>
    </div>
</div>

</section>

<!-- education section ends -->
<!-- pengalam kerja section starts  -->

<section class="education" id="kerja">

<h1 class="heading"> Pengalaman <span>Kerja</span> </h1>

<div class="box-container">

    <div class="box">
        <i class="fas fa-briefcase"></i>
        <span>2021</span>
        <h3>SMK 5 Agustus Pekanbaru</h3>
        <p>Programmer dan Guru Bidang TIK</p>
    </div>
    <div class="box">
        <i class="fas fa-briefcase"></i>
        <span>2019</span>
        <h3>Universitas Islam Riau</h3>
        <p>Asisten Dosen (LAB)</p>
    </div>
    <div class="box">
        <i class="fas fa-briefcase"></i>
        <span>2019</span>
        <h3>PT. Tensai NSTeknologi Indonesia</h3>
        <p>Programmer</p>
    </div>
</div>

</section>

<!-- pengalam kerja section ends -->
<section class="portfolio" id="kemampuan">

<h1 class="heading"><span>Kemampuan</span> </h1>

<div class="box-container">
    <div class="box">
        <img src="dist/icon/html.jpg" alt="">
    </div>
    <div class="box">
        <img src="dist/icon/css.jpg" alt="">
    </div>
    <div class="box">
        <img src="dist/icon/js.jpg" alt="">
    </div>
    <div class="box">
        <img src="dist/icon/codeigniter.jpg" alt="">
    </div>
    <div class="box">
        <img src="dist/icon/boostrap.jpg" alt="">
    </div>
    <div class="box">
        <img src="dist/icon/mysql.jpg" alt="">
    </div>
    <div class="box">
        <img src="dist/icon/laravel.jpg" alt="">
    </div>
    <div class="box">
        <img src="dist/icon/python.jpg" alt="">
    </div>
    <div class="box">
        <img src="dist/icon/php.jpg" alt="">
    </div>
    <div class="box">
        <img src="dist/icon/react.jpg" alt="">
    </div>
    <div class="box">
        <img src="dist/icon/phpmyadmin.jpg" alt="">
    </div>
    <div class="box">
        <img src="dist/icon/office.jpg" alt="">
    </div>
    <div class="box">
        <img src="dist/icon/photoshop.jpg" alt="">
    </div>
</div>

</section>
<!-- portfolio section starts  -->

<section class="education" id="portfolio">

<h1 class="heading"> <span>portfolio</span> </h1>

<div class="box-container">

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>1</span>
        <h3>Sistem Pengarsipan Surat Masuk dan Surat Keluar Panti Sosial Bina Remaja (PSBR) Pekanbaru.
        </h3>
        <p>
            Menggunakan Bahsa Pemograman PHP dan Javascript.<br>
            Menggunakan Boostrap untuk membuat tampilan system.
        </p>
    </div>
    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2</span>
        <h3>Pengelompokan Tematik Al-Qur'an Menggunakan Metode LSA dengan Pembobotan TF-IDF.
        </h3>
        <p>
            Menggunakan Bahsa Pemograman Python<br>
            Menggunakan Tools Jupyter Notebook.
        </p>
    </div>
    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>3</span>
        <h3>Memperbaiki Kata Tidak Baku dengan Kata Baku Menggunakan Metode levenshtein Distance Studi Kasus " Penulisan Abstrak Pada Skripsi Universitas Islam Riau (UIR).
        </h3>
        <p>
            Menggunakan Bahsa Pemograman Python<br>
            Menggunakan Tools Jupyter Notebook.
        </p>
    </div>
    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>4</span>
        <h3>Sistem Perhitungan Masa Bantuan Menggunakan Metode KNN.
        </h3>
        <p>
            Menggunakan Bahsa Pemograman PHP dan Javascript.<br>
            Menggunakan Boostrap untuk membuat tampilan system.
        </p>
    </div>
    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>5</span>
        <h3>Sistem Pendaftaran Pasien Pada Kliniki Cempedak Pekanbaru.
        </h3>
        <p>
            Menggunakan Bahsa Pemograman PHP dan Javascript.<br>
            Menggunakan Boostrap untuk membuat tampilan system.
        </p>
    </div>
    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>6</span>
        <h3>Sistem Pembayaran SPP di Riau International Collage.
        </h3>
        <p>
            Menggunakan Bahsa Pemograman PHP dan Javascript.<br>
            Menggunakan Boostrap untuk membuat tampilan system.
        </p>
    </div>
    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>7</span>
        <h3>Sistem Pembayaran SPP di Stit Al-Kifayah.
        </h3>
        <p>
            Menggunakan Bahsa Pemograman PHP dan Javascript.<br>
            Menggunakan Boostrap untuk membuat tampilan system.
        </p>
    </div>
    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>8</span>
        <h3>Sistem Penjadwalan Sholat Berbasis Web.
        </h3>
        <p>
            Menggunakan Bahsa Pemograman PHP dan Javascript.<br>
            Menggunakan Boostrap untuk membuat tampilan system.
        </p>
    </div>
    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>9</span>
        <h3>Sistem Ikatan Alumni Universitas Pancasila.
        </h3>
        <p>
            Menggunakan Bahsa Pemograman PHP dan Javascript.<br>
            Menggunakan Boostrap untuk membuat tampilan system.
        </p>
    </div>
    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>10</span>
        <h3>Sistem Pengumuman Penilaian Akbid Sempena Negeri Pekanbaru.
        </h3>
        <p>
            Menggunakan Bahsa Pemograman PHP dan Javascript.<br>
            Menggunakan Boostrap untuk membuat tampilan system.
        </p>
    </div>
    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>11</span>
        <h3>Sistem Penentu Penerimaan Zakat Pada Lazismu Riau.
        </h3>
        <p>
            Menggunakan Bahsa Pemograman PHP dan Javascript.<br>
            Menggunakan Boostrap untuk membuat tampilan system.
        </p>
    </div>
    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>12</span>
        <h3>Sistem Perpustakaan Akbid Sempena Negeri Pekanbaru.
        </h3>
        <p>
            Menggunakan Bahsa Pemograman PHP dan Javascript.<br>
            Menggunakan Boostrap untuk membuat tampilan system.
        </p>
    </div>
    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>13</span>
        <h3>Sistem Sarpas Akbid Sempena Negeri Pekanbaru.
        </h3>
        <p>
            Menggunakan Bahsa Pemograman PHP dan Javascript.<br>
            Menggunakan Boostrap untuk membuat tampilan system.
        </p>
    </div>
    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>14</span>
        <h3>Pengelompokan Isi pesan tuwiter dengan Metode Support Vector Machine (SVM).
        </h3>
        <p>
            Menggunakan Bahsa Pemograman Python<br>
            Menggunakan Tools Jupyter Notebook.
        </p>
    </div>
    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>15</span>
        <h3>Sistem Evaluasi Kerja dosen Akbid Sempena Negeri Pekanbaru.
        </h3>
        <p>
            Menggunakan Bahsa Pemograman PHP dan Javascript.<br>
            Menggunakan Boostrap untuk membuat tampilan system.
        </p>
    </div>
    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>16</span>
        <h3>Sistem Inventori Nusantara Motor Pekanbaru.
        </h3>
        <p>
            Menggunakan Bahsa Pemograman PHP dan Javascript.<br>
            Menggunakan Boostrap untuk membuat tampilan system.
        </p>
    </div>
    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>17</span>
        <h3>Profil yayasan aksara melati Pekanbaru.
        </h3>
        <p>
            Menggunakan Bahsa Pemograman PHP dan Javascript.<br>
            Menggunakan Boostrap untuk membuat tampilan system.
        </p>
    </div>
    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>18</span>
        <h3>Sistem Analisis Kata Positif dan Negatif.
        </h3>
        <p>
            Menggunakan Bahsa Pemograman PHP dan Javascript.<br>
            Menggunakan Boostrap untuk membuat tampilan system.
        </p>
    </div>
    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>19</span>
        <h3>Sistem Akademik SMK 5 Agustus Pekanbaru.
        </h3>
        <p>
            Menggunakan Bahsa Pemograman PHP dan Javascript.<br>
            Menggunakan Boostrap untuk membuat tampilan system.
        </p>
    </div>
</div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading"> <span>Kontak</span> Saya </h1>

<div class="row">

    <div class="content">

        <h3 class="title">contact info</h3>

        <div class="info">
            <h3 style="text-transform: lowercase;"> <i class="fas fa-envelope"></i> jakfarshodiq230@gmail.com </h3>
            <h3> <i class="fas fa-phone"></i> 0812-6862-7460 </h3>
            <h3> <i class="fas fa-map-marker-alt"></i> Jl. Tukiman RT001/RW004 Desa Mengkirau, Kec. Tasik Putri Puyu, Kab. Kepulauan Meranti Provinsi Riau</h3>
        </div>

    </div>

    <form action="" method="post">

        <input type="text" placeholder="name" class="box" id="name" nama="nama" required>
        <input type="email" placeholder="email" class="box" id="email" nama="email" required>
        <input type="text" placeholder="subject" class="box" id="subject" nama="subject" required>
        <textarea name="pesan" id="pesan" cols="30" rows="10" class="box message" placeholder="message" required></textarea>
        <button type="submit" class="btn" onclick="sendEmail()"> send <i class="fas fa-paper-plane"></i> </button>
        
    </form>
</div>

</section>

<!-- contact section ends -->


<!-- scroll top button  -->

<a href="#home" class="top">
    <img src="dist/icon/home.png" alt="" class="imgmelayang" >
</a>















<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="dist/script.js"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script type="text/javascript">
    function sendEmail() {
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var subject = document.getElementById('subject').value;
        var massage = document.getElementById('pesan').value;
        var body = 'nama: '+ name +'<br/> email: '+ email +'<br/> Subject: '+ subject + '<br/> Massage: ' + massage;
        Email.send({
            Host : "smtp.gmail.com",
            Username: "jakfarshodiq1496@gmail.com",
            Password: "krsuarchnojmljbe",
            // Password: "jakfar1996",
            To: 'jakfarshodiq230@gmail.com',
            From : email,
            Subject : subject,
            Body : body
        })
        // .then(
        //     alert("mail sent successfully")
        // );
    }
</script>
<script>
    var isNS = (navigator.appName == "Netscape") ? 1 : 0;
    if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
    function mischandler(){
    return false;
    }
    function mousehandler(e){
    var myevent = (isNS) ? e : event;
    var eventbutton = (isNS) ? myevent.which : myevent.button;
    if((eventbutton==2)||(eventbutton==3)) return false;
    }
    document.oncontextmenu = mischandler;
    document.onmousedown = mousehandler;
    document.onmouseup = mousehandler;
</script>

</body>
</html>