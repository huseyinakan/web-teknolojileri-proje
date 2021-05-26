<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="css/style.css">
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
                <h2 style="color: white;"><b>HOŞGELDİNİZ b201210027</b></h2>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-12 col-md-12 col-lg-12 col-xl-12" id="beyaz">s</div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
                <div id="iletisim" class="col-sm-12 col-12 col-md-12 col-lg-12 col-xl-12">
                <table border="1" style="background-color: gray; color:white; border-style:dashed; width:100%;" >
						<tr>
                        <div class="container">
			
                        <?php 

                        include("kullanicilar.php");


                        if (($_POST["email"] == $user) && ($_POST["password"] == $pass))
                        {

                        echo("SİTEYE GİRİŞ YAPTINIZ !!");

                        }
                        else
                        return false;

                        ?>
                            
                        </div>
						</tr>
                </table>
            </div>
        </div>
    </div>  











</body>
</html>
