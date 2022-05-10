<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,400;1,600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-black fixed-top">
            <div class="container">
                <a class="navbar-brand" href="hakkimda.html" title="Hakkımda"><img src="img/logo2.png" class="logo" alt="LOGO"></a>
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-0 mb-lg-0">

                        <li class="nav-item me-4">
                            <a class="nav-link" href="hakkimda.html">HAKKIMDA</a>
                            <div class="line"></div>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="ozgecmisim.html">ÖZGEÇMİŞİM</a>
                            <div class="line"></div>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="sehrim.html">ŞEHRİM</a>
                            <div class="line"></div>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="takimimiz.html">TAKIMIMIZ</a>
                            <div class="line"></div>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link " href="ilgiAlanım.html">İLGİ ALANIM</a>
                            <div class="line"></div>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="iletisim.html">İLETİŞİM</a>
                            <div class="line"></div>
                        </li>

                    </ul>
                </div>
                <a class="nav-link login" href="index.html" title="Çıkış Yap"><img src="icon/logout-32.png"></a>
            </div>
        </nav>
    </header>

    <div class="container-fluid">
        <div class="row">
            <div id="iletisim" class="col-8 mx-auto">
                <table class="table-responsive iletisimBilgiTablo">
                    <tr>
                        <td>
                            <label>ADI SOYADI : </label>
                            <?php
                            if (isset($_POST["adsoyad"]))
                                echo $_POST["adsoyad"];
                            ?><br>

                            <label>E POSTA ADRESİ : </label>
                            <?php
                            if (isset($_POST["mail"]))
                                echo $_POST["mail"];
                            if ($_POST["whatmail"] == "g") echo "@gmail.com";
                            if ($_POST["whatmail"] == "h") echo "@hotmail.com";
                            if ($_POST["whatmail"] == "o") echo "@outlook.com";
                            ?><br>

                            <label>TELEFON NO : </label>
                            <?php
                            if (isset($_POST["tel"]))
                                echo $_POST["tel"];
                            ?><br>

                            <label>CİNSİYET : </label>
                            <?php
                            if (isset($_POST["cinsiyet"]))
                                if ($_POST["cinsiyet"] == "e") echo "Erkek";
                                else echo "Kadın";
                            ?><br>

                            <label>BULUNDUĞU İL PLAKA : </label>
                            <?php
                            if (isset($_POST["il"]))
                                echo $_POST["il"];
                            ?><br>


                            <label>ÜNİVERSİTE : </label>
                            <?php
                            if (isset($_POST["uni"]))
                                if ($_POST["uni"] == "kou") echo "Kocaeli Üniversitesi";
                            if ($_POST["uni"] == "sau") echo "Sakarya Üniversitesi";
                            if ($_POST["uni"] == "subu") echo "Sakarya Uyg. Bil. Üniversitesi";
                            if ($_POST["uni"] == "itu") echo "İstanbul Teknik Üniversitesi";
                            if ($_POST["uni"] == "ytü") echo "Yıldız Teknik Üniversitesi";
                            if ($_POST["uni"] == "odtü") echo "Ortadoğu Teknik Üniversitesi";
                            if ($_POST["uni"] == "boün") echo "Boğaziçi Üniversitesi";

                            ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <footer class="bg-black footer">
        <p class="text-center text-muted">&copy; 2022 Web Programlama ~ Mahmut Eğribacak</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
