

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>iletisim</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="css/style.css">        
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>

<body class="bodywhite">

    <div class="container-fluid" id="ust">
        <div class="row">
            <div class="col-sm-9 col-9 col-md-9 col-lg-9 col-xl-9"></div>
                <div class="col-sm-2 col-2 col-md-2 col-lg-2 col-xl-2">
                <img class="img-fluid" src="images/ask.jpg">
                </div>
                    <div class="col-sm-1 col-1 col-md-1 col-lg-1 col-xl-1"></div>
        </div>
    </div>

    <div class="container-fluid" id="backlink">
        <div class="row">
            <div class="col-sm-12 col-12 col-md-12 col-lg-12 col-xl-12" id="links">
                <hr color="blue">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="hakkinda.html">HAKKIMDA</a></li>
                    <li class="breadcrumb-item"><a href="ozgecmis.html">ÖZGEÇMİŞİM</a></li>
                    <li class="breadcrumb-item"> <a href="iletisim.html">İLETİŞİM</a></li>
                    <li class="breadcrumb-item"><a href="takimim.html">TAKIMIM</a></li>
                    <li class="breadcrumb-item"><a href="sehrim.html">ŞEHRİM</a></li>
                    <li class="breadcrumb-item"><a href="index.html">ÇIKIŞ</a></li>

                </ul>
                <hr color="blue">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-12 col-md-12 col-lg-12 col-xl-12" id="baslik">
                <h1 style="color: white;"><b>İLETİŞİM</b></h1>
            </div>
            <div class="col-sm-12 col-12 col-md-12 col-lg-12 col-xl-12" id="beyaz">
                s
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
                <div id="iletisim" class="col-sm-12 col-12 col-md-12 col-lg-12 col-xl-12">
                <table border="1" style="background-color: gray; color:white; border-style:dashed; width:100%;" >
						<tr>
                            <td width="20%"></td>
                            <td>
							<label>ADI SOYADI : </label>
                            <?php
                            if(isset($_POST["adsoyad"]))
                               echo $_POST["adsoyad"];
                            ?><br>

							<label>E POSTA ADRESİ : </label>
                            <?php
                            if(isset($_POST["mail"]))
                               echo $_POST["mail"];
                            if($_POST["whatmail"]=="g") echo "@gmail.com";
                            if($_POST["whatmail"]=="h") echo "@hotmail.com";
                            if($_POST["whatmail"]=="o") echo "@outlook.com";
                            ?><br>

							<label>TELEFON NO : </label>
                            <?php
                            if(isset($_POST["tel"]))
                               echo $_POST["tel"];
                            ?><br>
                            
							<label>CİNSİYET : </label>
                            <?php
                            if(isset($_POST["cinsiyet"]))
                            if($_POST["cinsiyet"]=="e") echo "Erkek";
                               else echo "Kadın";
                            ?><br>
                            
                            <label>BULUNDUĞU İL PLAKA : </label>
                            <?php
                            if(isset($_POST["il"]))
                               echo $_POST["il"];
                            ?><br>

							<label>İLGİ ALANLARI : </label>
                            <?php
                            if(isset($_POST["muzik"])) echo "Müzik<br>";
                            if(isset($_POST["spor"])) echo "Spor<br>";
                            if(isset($_POST["tv"])) echo "Televizyon<br>";
                            if(isset($_POST["dans"])) echo "Dans<br>";
                            ?><br>
                            
                            <label>ÜNİVERSİTE : </label>
                            <?php
                            if(isset($_POST["uni"]))
                            if($_POST["uni"]=="kou") echo "Kocaeli Üniversitesi";
                            if($_POST["uni"]=="sau") echo "Sakarya Üniversitesi";
                            if($_POST["uni"]=="subu") echo "Sakarya Uyg. Bil. Üniversitesi";
                            if($_POST["uni"]=="itu") echo "İstanbul Teknik Üniversitesi";
                            if($_POST["uni"]=="su") echo "Selçuk Üniversitesi";
                            if($_POST["uni"]=="ytü") echo "Yıldız Teknik Üniversitesi";
                            if($_POST["uni"]=="esogu") echo "Eskişehir Osmangazi Üniversitesi";
                            if($_POST["uni"]=="akdü") echo "Akdeniz Üniversitesi";
                            if($_POST["uni"]=="odtü") echo "Ortadoğu Teknik Üniversitesi";
                            if($_POST["uni"]=="boün") echo "Boğaziçi Üniversitesi";



                            ?>
                            </td>
                            <td width="20%"></td>
						</tr>
                </table>
            </div>
        </div>
    </div>  
</body>
</html>
