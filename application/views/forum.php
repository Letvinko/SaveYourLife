<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="E:\Test codingan\HTML\TUBES MBD\Logo.png">
    <title><?=$judul?></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style  type="text/css">
      #navs{
        justify-content:center;
        background-color:white;
        margin-top:10px;
        padding:5px;
      }

    </style>
  </head>
  <body>
    <nav id="navs" class="navbar navbar-expand-sm navbar-light" style=" border-bottom:1px solid #cccccc; font-family:Devanagari Sangam MN; margin-top:-20px; ">
      <a class="navbar-brand" href="<?= base_url();?>/C_syl/index" style="margin-right:50px;  margin-bottom:30px;"><img src="<?=base_url();?>/assets/Logo.png" alt="" style="width:70px; padding-top:20px; "></a>
      <a class="navbar-brand" href="<?= base_url();?>/C_syl/pertolongan" style="margin-right:50px; margin-bottom:10px; margin-top:15px;"><b>PENCEGAHAN</b></a>
      <a class="navbar-brand" href="<?= base_url();?>/C_syl/forum" style="margin-right:50px; margin-bottom:10px; margin-top:15px;"><b>FORUM</b></a>
      <a class="navbar-brand" href="<?= base_url();?>/C_syl/gabung" style="margin-right:50px; margin-bottom:10px; margin-top:15px;"><b>GABUNG</b></a>
      <a class="navbar-brand" href="<?= base_url();?>/C_syl/tenagaahli" style="margin-right:50px; margin-bottom:10px; border-right:1px solid black; width:200px; margin-top:15px;"><b>TENAGA AHLI</b></a>
      <button type="button" class="btn btn-danger btn-sm" style=" margin-bottom:10px; margin-top:15px;" name="button">YUK NGOBROL</button>
    </nav>

    <div style="background-image:url(https://heroichollywood.com/wp-content/uploads/2018/09/dark-phoenix-trailer.jpg); z-index:-1; border-bottom:1px solid grey;">
      <div style="background-color:rgba(39, 212, 226,0.6); padding:200px; z-index:-1;">
        <div class="container" style="opacity:1">
          <div class="row" style="margin-top:-120px;">
            <div class="col">
              <h1 style="color:rgba(255, 255, 255, 1); font-size:60px;">Ceritakan Kisahmu</h1>
              <h1 style="color:rgba(255, 255, 255, 1); font-size:60px;">Disini</h1>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <p style="color:rgba(255, 255, 255, 1); line-height:80%; Margin-top:90px; font-size:20px;">Forum ini dibuat untuk menampung semua kisah hidupmu,</p>
              <p style="color:rgba(255, 255, 255, 1); line-height:80%; font-size:20px;">biarkan orang lain membantu menyelesaikan masalahmu.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <h3 style="width:200px; margin-top:40px; margin-left: 70px; margin-bottom:40px;">Tulis Kisahmu</h3>

    <center>
      <form action="<?=base_url();?>/C_syl/postingan" method="post">
        <div style="width:90%;">
          <input type="text" class="form-control" id="usr" width="90px;" placeholder="Tulis Judul .." style="border-color:rgb(255, 56, 107);" name="judul">
          <textarea class="form-control" rows="5" id="comment" width="90px;" placeholder="Tulis Kisahmu Disini" style="border-color:rgb(255, 56, 107);" name="posting"></textarea>
          <button type="submit" class="btn btn-danger" name="button" style="Margin-top:20px; margin-left:1050px; position:relative;">Unggah</button>
        </div>
      </form>
    </center>

    <?php foreach ($tulis as $xxx):?>
    <div style="width:90%; margin-top:40px; left:70px; position:relative;">
      <div class="row">
        <div class="col">
          <h5 style="border:1px solid #27D4E2; padding:9px; border-radius:4px;"><?=$xxx['judul'];?></h5>
        </div>
      </div>

      <div class="row" style="margin-top:-10px;">
        <div class="col">
          <p style="border:1px solid #27D4E2; padding:30px; border-radius:4px;">
            <?= $xxx['post'];?>
          </p>
        </div>
      </div>
    </div>
  <?php endforeach;?>

    <div class="jumbotron" style="background-color:#59dbff; margin-top:40px; ">
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
            <a href="#"><img src="https://image.flaticon.com/icons/png/512/69/69881.png" alt="" style="width:85px; margin-right:10px;"></a>
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
