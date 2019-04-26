<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="E:\Test codingan\HTML\TUBES MBD\Logo.png">
    <title><?=$data['judul'];?></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
      #navs{
        justify-content:center;
        background-color:white;
      }
      #cek{
        margin-left:150px;
      }
      #cek > .card{
        border-radius:5px;
        text-align:center;
        border:8px solid white;
      }
      #cek > .card > .card-header{
          background-color:#59dbff;
          border-radius:3px;
      }
      #foter{
        background-color:#59dbff;
        color:white;
        border-radius:3px;
      }
      #card{
        font-family:Devanagari Sangam MN;
      }
    </style>

  </head>
  <body>
    <div class="jumbotron" style="background-color:#59dbff; border-bottom:1px solid #59dbff;">
      <div class="container">
        <div class="row" style="justify-content:center">
          <img src="<?=base_url();?>/assets/Logo.png" alt="icon">
        </div>
        <div class="row" style="justify-content:center; margin-top:40px; color:white;">
          <p style="font-size:40px; font-family:Devanagari Sangam MN;">S A V E   Y O U R   L I F E</p>
        </div>
        <div class="row" style="justify-content:center">
          <img src="<?=base_url();?>/assets/Hotline.png" alt="icon">
        </div>
      </div>
    </div>
    <!-- BATASE SETELAH HEADER -->
    <nav id="navs" class="navbar navbar-expand-sm navbar-light" style="padding: .1rem 1rem; border-bottom:1px solid #cccccc; font-family:Devanagari Sangam MN;">
      <a class="navbar-brand" href="<?= base_url();?>/C_syl/index" style="margin-right:50px;  margin-bottom:30px;"><img src="<?=base_url();?>/assets/Logo.png" alt="" width="90px;"> </a>
      <a class="navbar-brand" href="<?= base_url();?>/C_syl/pertolongan" style="margin-right:50px;  margin-bottom:30px;"><b>PERTOLONGAN</b></a>
      <a class="navbar-brand" href="<?= base_url();?>/C_syl/forum" style="margin-right:50px;  margin-bottom:30px;"><b>FORUM</b></a>
      <a class="navbar-brand" href="<?= base_url();?>/C_syl/gabung" style="margin-right:50px;  margin-bottom:30px;"><b>GABUNG</b></a>
      <a class="navbar-brand" href="<?= base_url();?>/C_syl/tenagaahli" style="margin-right:50px;  margin-bottom:30px; border-right:1px solid black; width:200px;"><b>TENAGA AHLI</b></a>
      <input class="btn btn-danger" type="buttom" name="chat" value="YUK NGOBROL" style=" margin-bottom:30px;">
    </nav>
    <!-- BATASE SETELAH NAVBAR -->
    <div class="jumbotron" style="background-color:white; margin-top:50px; margin-bottom:50px;">
      <div class="container">
        <div class="row" >
          <div class="col-sm-3">
            <img src="<?=base_url();?>/assets/Logo.png" alt="" width=350px; style="border-right:3px solid black; padding:50px;">
          </div>
          <div class="col">
            <pre style="font-size:20px; ">
              <span style="font-size:40px; font-family:'Century Gothic', 'MS Sans Serif', arial;"><b>Save Your Life</b></span>

              Atau secara singkat bisa disebut dengan SYL merupakan
              forum Yang selain itu bisa juga menjadi teman curhat
              untuk mencurahkan keluh kesah sehari-hari. Dengan
              program Yuk Ngobrol dan HeartCall yang dibangun,
              kami harap dapat mengurangi masalah kesehatan mental
              yang terjadi di Indonesia.
            </pre>
          </div>
        </div>
      </div>
    </div>
    <!-- BATASE SETELAH INFO PRODUCT -->
    <div id="card" class="jumbotron" style="background-color:#a3253e;">
      <div class="container">
          <pre>
            <h1 style="text-align:center; color:white; font-family:'Century Gothic', 'MS Sans Serif', arial;">Apa sih yang bisa kami lakukan</h1>
            <h1 style="text-align:center; color:white; font-family:'Century Gothic', 'MS Sans Serif', arial; margin-top:-35px;">untuk kamu?</h1>
          </pre>
        <div class="row" style="margin-right:65px;">
            <div id="cek" class="col-sm-2">
              <div class="card" style="border-radius:10px;">
                <div class="card-header" style="border-radius:10px;"> <img src="<?=base_url();?>/assets/YukNgobrol.png" alt="icon" width="83px;"> </div>
                <div class="card-body"><b>YukNgobrol</b></div>
                <div id="foter" class="card-footer" style="border-radius:10px;"><a href="#" style="color:white">MULAI</a></div>
              </div>
          </div>

          <div id="cek" class="col-sm-2">
            <div class="card" style="border-radius:10px;">
              <div class="card-header" style="border-radius:10px;"> <img src="<?=base_url();?>/assets/HeartCall.png" alt="icon" width="100px;"> </div>
              <div class="card-body"><b>HeartCall</b></div>
              <div id="foter" class="card-footer" style="border-radius:10px;"><a href="<?= base_url();?>/C_syl/heartcall" style="color:white">022-001-007</a></div>
            </div>
          </div>

          <div id="cek" class="col-sm-2">
            <div class="card" style="border-radius:10px;">
              <div class="card-header" style="border-radius:10px;"> <img src="<?=base_url();?>/assets/Forum.png" alt="icon" width="100px;"> </div>
              <div class="card-body"><b>Forum</b></div>
              <div id="foter" class="card-footer" style="border-radius:10px;"><a href="<?= base_url();?>/C_syl/forum" style="color:white">BUKA</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Setelah card  -->
    <div class="jumbotron" style="background-color:white;">
      <div class="container">
        <pre style="text-align:center; font-size:20px; margin-left:-80px; font-family:'Century Gothic', 'MS Sans Serif', arial;">
          Belivie in life, when you stare on Your
          reflection your life is precious and
          there are still people out there expecting you
        </pre>
      </div>
    </div>
    <!-- Setelah Tag Line  -->
    <div class="jumbotron" style="background-color:#59dbff;">
      <div class="container">
        <h1 style="font-family:'Century Gothic', 'MS Sans Serif', arial; text-align:center; margin-top:-50px;">Tentang Kita</h1>
        <div class="row" style="justify-content:center;">
          <div class="col-sm-5">
            <hr style="background-color:black;">
          </div>
            <button type="button" class="btn btn-light" name="button" data-toggle="collapse" data-target="#US" >V</button>
          <div class="col-sm-5">
            <hr style="background-color:black;">
          </div>
        </div>
        <div id="US" class="collapse" style="margin-top:50px; ">
          <center>
            <a href="#" ><img src="http://www.logospng.com/images/0/logos-facebook-icon-ios-7-iconset-icons8-198.png" alt="" style="width:85px; margin-right:10px;"></a>
            <a href="#" ><img src="https://cdn3.iconfinder.com/data/icons/transparent-on-dark-grey/500/icon-04-512.png" alt="" style="width:85px;  margin-right:10px;"></a>
            <a href="#" ><img src="https://tai.com.ph/wp-content/uploads/2019/03/23681.png" alt="" style="width:85px;  margin-right:10px;"></a>
            <a href="<?= base_url();?>/index.php/gabung"><img src="https://image.flaticon.com/icons/png/512/69/69881.png" alt="" style="width:85px; margin-right:10px;"></a>
          </center>
        </div>
        <div class="row">
          <div class="col">
            <center><p style="margin-top:60px;">Save your life organization is found by student and funded by our own  wallet</p></center>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
