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
        margin-top:10px;
        padding:5px;
      }
      #info1{
        background-color:white;
        padding:12px;
        border:1px solid #27D4E2;
        border-radius:3px;
        width:500px;
      }
      #info2{
        background-color:white;
        padding:12px;
        border:1px solid #27D4E2;
        border-radius:3px;
        width:500px;
      }
      #info3{
        background-color:white;
        padding:12px;
        border:1px solid #27D4E2;
        border-radius:3px;
        width:500px;
      }
  </style>
  </head>
  <body>
    <nav id="navs" class="navbar navbar-expand-sm navbar-light" style=" border-bottom:1px solid #cccccc; font-family:Devanagari Sangam MN;">
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
              <h1 style="color:rgba(255, 255, 255, 1); font-size:60px;">Kita Semua Peduli Akan</h1>
              <h1 style="color:rgba(255, 255, 255, 1); font-size:60px;">Dirimu</h1>
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

    <!-- Batas Setelah Navbar  -->
    <div class="container">
      <div class="row" style="margin-top:10px">
        <div class="col-sm-7">
          <div class="row">
            <div class="col">
              <h1 style="font-size:35px;">Pertologan untuk mencegah bunuh diri</h1>
              <br>
              <div class="row">
                <div class="sol-sm-8" style="margin-left:15px;">
                  <button class="btn btn-light" type="button" name="button" style="display:inline-block" data-toggle="collapse" data-target="#info1">Diri Sendiri</button>
                  <button class="btn btn-light" type="button" name="button" style="display:inline-block" data-toggle="collapse" data-target="#info2">Orang Lain</button>
                  <button class="btn btn-light" type="button" name="button" style="display:inline-block" data-toggle="collapse" data-target="#info3">Merasa Kehilangan</button>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8" style="margin-top:30px;">
                  <div id="info1" class="collapse">
                    <h4>Untuk Menolong Diri Sendiri</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                  <div id="info2" class="collapse">
                    <h4>Untuk Menolong Orang Lain</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                  <div id="info3" class="collapse">
                    <h4>Untuk Menolong Orang Yang Merasa Kehilangan</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
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
