<?php
// page2.php
error_reporting(0);

session_start();

// sprawdzam, czy mam język w zmiennej podesłany [ czy user chce zmienić ]
if ( isset( $_GET['lang'] ) )
        {
           // jak mam, to sprawdzam, czy jest dobry język podany
            if ( $_GET['lang'] == 'pl' ||  $_GET['lang'] == 'en' || $_GET['lang'] == 'de'  )
            {
                // dodaje go do zmiennej lokalnej i sesyjnej
                $lang = $_GET['lang'];
                $_SESSION['lang'] = $_GET['lang'];
            }
            // jak zły język, to sprawdzam, czy mam język w sesji
            elseif ( isset( $_SESSION['lang'] ) && ( $_SESSION['lang'] == 'pl' ||  $_SESSION['lang'] == 'en' ||  $_SESSION['lang'] == 'de') )
            {
                // dodaje język do zmiennej lokalnej
                $lang = $_SESSION['lang'];
            }
            // jak nie mam języka, ani w zmiennej, ani w sesji, to dodaje domyślny
            else
            {
                $lang = 'pl';
                $_SESSION['lang'] = 'pl';
            }
        }
        // jak nie mam linku w zmiennej, to
        else
        {
           // szukam go w sesji
            if ( isset( $_SESSION['lang'] ) && ( $_SESSION['lang'] == 'pl' ||  $_SESSION['lang'] == 'en' ||  $_SESSION['lang'] == 'de' ) )
            {
               // jak znajde, to dodaje do zmiennej lokalnej
                $lang = $_SESSION['lang'];
            }
           // jak nie mam, to dodaje odmyślną wartość do obu
            else
            {
                $lang = 'pl';
                $_SESSION['lang']= 'pl';
            }
        }
		require_once( './languages/'.$lang.'/napisy.txt');

?>


<!doctype html>
	<html>
	<head>
		<title><?php echo $tytul ?></title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="css/style.css" rel="stylesheet" type="text/css">
            <link href="css/witamy.css" rel="stylesheet" type="text/css">
            <link href="css/opak.css" rel="stylesheet" type="text/css">
            <link href="css/posm_t.css" rel="stylesheet" type="text/css">
            <link href="css/kontakt.css" rel="stylesheet" type="text/css">
            <link href="css/posm_k.css" rel="stylesheet" type="text/css">
            <link href="css/druk_cyfrowy.css" rel="stylesheet" type="text/css">
            <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="css/orangebox.css" type="text/css" />
            <link rel="shortcut icon" href="images/ikona.ico">
            <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
				<script src="//code.jquery.com/jquery-1.10.2.js"></script>
                <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
                <script src="js/hover.js" type="text/javascript" charset="utf-8"></script>
                <script src="js/slider.js" type="text/javascript" charset="utf-8"></script>
                <script src="js/klik.js" type="text/javascript" charset="utf-8"></script>
                <script src="js/menu.js" type="text/javascript" charset="utf-8"></script>
                <script src="js/widok.js" type="text/javascript" charset="utf-8"></script>
                <script src="js/angular.min.js"></script>
                <script type="text/javascript" src="js/orangebox.min.js"></script>
                  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
        <script type="text/javascript" src="js/mapa.js">
        </script>
 
	</head>

<body ng-app="">
<!-- MENU BOCZNE - DOMYŚLNIE UKRYTE -->
<div class="menuboczne" style="background:#4d4d4f; height:100%; width:200px; position:fixed; right:0%; max-width:260px; z-index:10000;" margin-top:-5%;>
  <div class="tresc" > <br/>
    <br/>
    <br/>
    <p><a href="#" id="home_back" style="color:#FFF !important;"><?php echo $home ?></a></a></p>
    <p><a href="#" style="color:#FFF !important;" id="opakowania"><?php echo $opakowania ?></a></p>
    <p><a href="#"  style="color:#FFF !important;" id="posmy" class="target"><?php echo $tektura_falista ?></a></p>
    <p><a style="color:#FFF !important;" href="#" id="posm_k"><?php echo $displaye_k ?></a></p>
    <p><a href="#" id="trwale" style="color:#FFF !important"><?php echo $posmy_trwale ?></a></p>
    <p><a  href="#" class="target" style="color:#FFF !important" id="druk_cyfrowy"><?php echo $druk_cyfrowy ?></a></p>
    <p><a  href="#" class="target" style="color:#FFF !important" id="nowoscii"><?php echo $nowosci ?></a></p>
    <p><a style="color:#FFF !important;" href="#" id="kontakt"><?php echo $kontakt ?></a></p>
    <br/>
    <p><a href="?lang=pl" style="color:#FFF !important"><?php echo $polski ?></a></p>
    <p><a href="?lang=de" style="color:#FFF !important"><?php echo $deutsch ?></a></p>
    <p><a href="?lang=en" style="color:#FFF !important"><?php echo $english ?></a></p>
    <div class='kontainer'> </div>

  </div>
</div>
<!-- TOP NAWIGACJA  -->
<div class="container container-one">
  <div class="widoczne"> <a href="#" id="h_logo"><img src="images/logo.png" class="logo"></a> <a href="#"><img src="images/menu.png" class="menu" id="show"></a> <span class="slogan">ADVANTAGE THANKS TO CREATION</span></div>
</div>

<!-- MAIN CONTENT - RZĄD PIERWSZY -->
<div class="container container-two"> 
  <!--PIERWSZY BOX -->
  <div class="pierwsza_linia">
    <div class="mob_a">
      <div class='square-box' id="top-one">
        <div class='square-content'>
          <div><span><?php echo $welcome ?></span></div>
        </div>
      </div>
      <!--PIERWSZY BOX HOVER -->
      <div class='square-box' id="top-one-hover"><a href="#">
        <div class='square-content'>
          <div><span><?php echo $opis_welcome ?></span></div>
          </a> </div>
      </div>
      
      <!--PIERWSZY BOX CLICK-C-->
      
      <div class='square-box' id="top-one-c"><a href="#">
        <div class='square-content'>
          <div><span><?php echo $posmy_kartonowe ?></span></div>
          </a> </div>
      </div>
    </div>
    <div class="mob_b"> 
      <!--DRUGI BOX -->
      <div class='square-box top-two-efekt' id="top-two">
        <div class='square-content'>
          <div><span><?php echo $opakowania ?></span></div>
        </div>
      </div>
      <!--DRUGI BOX HOVER-->
      <div class='square-box' id="top-two-hover"><a href="#">
        <div class='square-content'>
          <div><span><?php echo $opis_opakowania ?></span></div>
          </a> </div>
      </div>
      
      <!--DRUGI BOX SLIDER A-->
      <div class='square-box top-two-efekt' id="top-two-a">
        <div class='square-content'>
          <div><span><?php echo $opakowania ?></span></div>
        </div>
      </div>
      <!--DRUGI BOX SLIDER B-->
      
      <div class='square-box top-two-efekt' id="top-two-b">
        <div class='square-content'>
          <div><span><?php echo $opakowania ?></span></div>
        </div>
      </div>
      <!--DRUGI BOX SLIDER B-->
      
      <div class='square-box top-two-efekt' id="top-two-b-b">
        <div class='square-content'>
          <div><span><?php echo $opakowania ?></span></div>
        </div>
      </div>
      <!--DRUGI BOX CLICK C-->
      <div class='square-box top-two-efekt' id="top-two-c"><a href="#">
        <div class='square-content'>
          <div><span><?php echo $posmy_trwale ?></span></div>
          </a> </div>
      </div>
    </div>
  </div>
  
  <!-- MAIN CONTENT - RZĄD DRUGI -->
  
  <div class="druga"> 
    
    <!--TRZECI BOX-->
    <div class="mob_c">
      <div class='square-box' id="bottom-one">
        <div class='square-content'>
          <div><span><?php echo $posm_y ?></span></div>
        </div>
      </div>
      <!--TRZECI BOX HOVER-->
      
      <div class='square-box' id="bottom-one-hover"><a href="#">
        <div class='square-content'>
          <div><span><?php echo $posmy_opis ?></span></div>
          </a> </div>
      </div>
      <!--TRZECI BOX SLIDER A-->
      
      <div class='square-box' id="bottom-one-a">
        <div class='square-content'>
          <div><span><?php echo $posm_y ?></span></div>
        </div>
      </div>
      <!--TRZECI BOX SLIDER B-->
      
      <div class='square-box' id="bottom-one-b">
        <div class='square-content'>
          <div><span><?php echo $posm_y ?></span></div>
        </div>
      </div>
      <!--TRZECI BOX SLIDER B-->
      
      <div class='square-box' id="bottom-one-b-b">
        <div class='square-content'>
          <div><span><?php echo $posm_y ?></span></div>
        </div>
      </div>
    </div>
    <!--CZWARTY BOX-->
    <div class="mob_d">
      <div class='square-box' id="bottom-two">
        <div class='square-content'>
          <div><span><?php echo $druk_cyfrowy ?></span></div>
        </div>
      </div>
      <!--CZWARTY BOX HOVER-->
      
      <div class='square-box' id="bottom-two-hover"><a href="#">
        <div class='square-content'>
          <div><span><?php echo $druk_cyfrowy_opis ?></span></div>
          </a> </div>
      </div>
      <!-- KONIEC BOXÓW --> 
      
    </div>
  </div>
</div>
</div>
</div>
<!-- MAIN CONTENT - PRZYCISKI DOLNE -->

<div class="koncowka">
  <div class="container container-three">
    <button type="button" class="btn btn-lg przycisk" id="btn1" ><?php echo $portfolio ?></button>
    <button type="button" class="btn btn-lg przycisk" id="btn2" ><?php echo $online ?> </button>
    <button type="button" class="btn btn-lg przycisk" id="btn3" ><?php echo $certyfikaty ?> </button>
    <button type="button" class="btn btn-lg przycisk" id="btn4" ><?php echo $pozostale ?> </button>
    <br/>
    <br/>
  </div>
</div>

<!-- KOLEJNA STRONY - WITAMY W TFP -->
<div class="count_witamy">
  <div class="top_witamy">
    <div class="opis_top_witamy"><?php echo $glowny_tekst_na_niebkieskim_kontenerze; ?></div>
  </div>
  <div class="middle_witamy">
    <div class="opis_middle_witamy"><?php echo $tekst_ponizej_lewa_strona_witamy_serdecznie ?></div>
    <div class="witamy_baner"></div>
  </div>
  <div class="bottom_witamy">
    <a href="http://www.youtube.com/watch?v=n_pyc7FhSUg" rel="lightbox" data-ob_share="false"><div class="box_witamy" id="w1">
        <div class="ww1"></div>
      <span class="w_datax"></span><div class="opis_box_witamy"> <span class="tytul_box_witamy" style="letter-spacing:0.1mm !important;"><?php echo $tytul_kwadrat_w_1 ?></span> </><br/>
       <div class="tresc_box_witamy"> <?php echo $opis_kwadrat_w_1 ?></div></div>
    </div></a>
  <a href="#" rel="lightbox" data-ob_share="false">  <div class="box_witamy" id="w2">
              <div class="ww1"></div>
<span class="w_datax"></span><div class="opis_box_witamy"><span class="tytul_box_witamy"><?php echo $tytul_kwadrat_w_2 ?></span></><br/>
       <div class="tresc_box_witamy"> <?php echo $opis_kwadrat_w_2 ?></div></div>
    </div></a>
    <a href="http://www.youtube.com/watch?v=0TwBfrc0D-Y" rel="lightbox" data-ob_share="false"><div class="box_witamy" id="w3">
             <div class="ww1"></div>
 <span class="w_datax"></span><div class="opis_box_witamy"> <span class="tytul_box_witamy"><?php echo $tytul_kwadrat_w_3 ?></span></><br/>
       <div class="tresc_box_witamy"> <?php echo $opis_kwadrat_w_3 ?></div></div>
    </div></a>
    <div class="box_witamy" id="w4"><span class="w_datax"></span><span class="witamy_nowosci"><?php echo $tytul_kwadrat_w_4 ?></span>
      <div class="opis_box_witamy" style="visibility:hidden;"> <span class="tytul_box_witamy"><?php echo $tytul_kwadrat_w_4 ?></span></><br/>
       <div class="tresc_box_witamy"> <?php echo $opis_kwadrat_w_4 ?></div></div>
    </div>
    <div class="box_witamy" id="w5"><span class="w_data"><?php echo $data_kwadrat_w_5; ?></span>
      <div class="opis_box_witamy"> <span class="tytul_box_witamy"><?php echo $tytul_kwadrat_w_5 ?></span></><br/>
       <div class="tresc_box_witamy"> <?php echo $opis_kwadrat_w_5 ?></div></div>
    </div>
    <div class="box_witamy" id="w6"><span class="w_data"><?php echo $data_kwadrat_w_6; ?></span>
      <div class="opis_box_witamy"> <span class="tytul_box_witamy"><?php echo $tytul_kwadrat_w_6 ?></span></><br/>
       <div class="tresc_box_witamy"> <?php echo $opis_kwadrat_w_6 ?></div></div>
    </div>
    <div class="box_witamy" id="w7"><span class="w_data"><?php echo $data_kwadrat_w_7; ?></span>
      <div class="opis_box_witamy"> <span class="tytul_box_witamy"><?php echo $tytul_kwadrat_w_7 ?></span></><br/>
       <div class="tresc_box_witamy"> <?php echo $opis_kwadrat_w_7 ?></div></div>
    </div>
    <div class="box_witamy" id="w8"><span class="w_data"><?php echo $data_kwadrat_w_8; ?></span>
      <div class="opis_box_witamy"> <span class="tytul_box_witamy"><?php echo $tytul_kwadrat_w_8 ?></span></><br/>
       <div class="tresc_box_witamy"> <?php echo $opis_kwadrat_w_8 ?></div></div>
    </div>
    <div class="box_witamy" id="w9"><span class="w_data"><?php echo $data_kwadrat_w_9; ?> </span>
      <div class="opis_box_witamy"> <span class="tytul_box_witamy"><?php echo $tytul_kwadrat_w_9 ?></span></><br/>
       <div class="tresc_box_witamy" style="letter-spacing:0.2mm;"> <?php echo $opis_kwadrat_w_9 ?></div></div>
    </div>
  </div>
 <div class="end_witamy"></div>
</div>
</div>
<!-- KOLEJNA STRONY - OPAKOWANIA -->
  <div ng-include src="'inc/opak.php'"></div>  
<!-- KOLEJNA STRONY - DRUK CYFROWY -->
  <div ng-include src="'inc/druk_cyfrowy.php'"></div>
<!-- KOLEJNA STRONY - POSMY_TRWALE -->
  <div ng-include src="'inc/posm_t.php'"></div>
<!-- KOLEJNA STRONY - POSMY_TRWALE -->
  <div ng-include src="'inc/posm_k.php'"></div>  
  <!-- KOLEJNA STRONY - POSMY_TRWALE -->
  <div ng-include src="'inc/kontakt.php'"></div> 
  

<script>
czasoweprzewijanie();
</script> 

<!-- MAIN CONTENT - FOOTER -->

<div class="footer"> <span id="footer">TFP-Graﬁka sp. z o.o. | ul. 750-lecia 11, 63-100 Śrem </span> </div>
</body>
</html>
