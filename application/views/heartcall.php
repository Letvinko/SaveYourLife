<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="<?=base_url();?>/assets/Logo.png">
    <title><?=$judul;?></title>

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
      div.sticky {
      position: -webkit-sticky;
      position: sticky;
      top: 0;
    }
    </style>

  </head>
  <body>
    <!-- BATASE SETELAH HEADER -->
    <nav id="navs" class="navbar navbar-expand-sm navbar-light" style=" border-bottom:1px solid #cccccc; font-family:Devanagari Sangam MN;">
      <a class="navbar-brand" href="<?= base_url();?>/C_syl/index" style="margin-right:50px;  margin-bottom:30px;"><img src="<?=base_url();?>/assets/Logo.png" alt="" style="width:70px; padding-top:20px; "></a>
      <a class="navbar-brand" href="<?= base_url();?>/C_syl/pertolongan" style="margin-right:50px; margin-bottom:10px; margin-top:15px;"><b>PENCEGAHAN</b></a>
      <a class="navbar-brand" href="<?= base_url();?>/C_syl/forum" style="margin-right:50px; margin-bottom:10px; margin-top:15px;"><b>FORUM</b></a>
      <a class="navbar-brand" href="<?= base_url();?>/C_syl/gabung" style="margin-right:50px; margin-bottom:10px; margin-top:15px;"><b>GABUNG</b></a>
      <a class="navbar-brand" href="<?= base_url();?>/C_syl/tenagaahli" style="margin-right:50px; margin-bottom:10px; border-right:1px solid black; width:200px; margin-top:15px;"><b>TENAGA AHLI</b></a>
      <button type="button" class="btn btn-danger btn-sm" style=" margin-bottom:10px; margin-top:15px;" name="button">YUK NGOBROL</button>
    </nav>

    <div class="container">
      <div class="row" >
        <div class="col-sm-4" >
          <div class="sticky">
            <div class="jumbotron" style="background-color:#59dbff; padding:100px; margin-top:20px;">
              <div class="container">
                <h4 style="text-align:center">HeartCall</h4>
                <img src="<?= base_url();?>/assets/Hotline.png" alt="" style="width:250px; margin-left:-65px; border:1px solid bkack;">
              </div>
            </div>

            <div class="row" style="justify-content:center;">
              <div class="col-sm-4">
                <hr style="background-color:black; ">
              </div>
              <button type="button" class="btn btn-light" name="button" data-toggle="collapse" data-target="#sidebar" >INFO</button>
              <div class="col-sm-4">
                <hr style="background-color:black; ">
              </div>
            </div>

              <div class="row" style="justify-content:center;">
                <div class="collapse" id="sidebar">
                    <div class="col-sm-12" >
                      <div class="jumbotron" style="background-color:#59dbff; padding:50px; margin-top:20px; widht:200px;">
                        <div class="container">
                          <p>24/7 free, confidential phone line that connects individuals in crisis with trained counselors across the United States. People do not have to be suicidal to call – reasons to call include: substance abuse, economic worries, relationships, sexual identity, illness, getting over abuse, depression mental and physical illness, and loneliness.</p>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
          </div>
        </div>
        <!-- After sidebar  -->
        <div class="col-sm-8">
          <div class="row">
            <div class="col-sm-10">
              <div class="jumbotron" style="margin-top:20px;">
                <div class="container">
                  <h4 style="margin-bottom:20px;">Apa Yang Terjadi Ketika Anda Menghubungi HeartCall?</h4>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="jumbotron" style="background-color:white; width:250px; border-left:2px solid black; ">
                          First, you’ll hear an automated message featuring additional options while your call is routed to your local Lifeline network crisis center.
                      </div>
                    </div>
                    <div class="col-sm-1">
                      <div class="jumbotron" style="background-color:white; width:250px; height:295px; border-left:2px solid black;">
                          We’ll play you a little music while we connect you to a skilled, trained crisis worker.
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="jumbotron" style="background-color:white; width:250px; height:295px; border-left:2px solid black;">
                          A trained crisis worker at your local center will answer the phone..
                      </div>
                    </div>
                    <div class="col-sm-1">
                      <div class="jumbotron" style="background-color:white; width:250px; height:295px; border-left:2px solid black;">
                          This person will listen to you, understand how your problem is affecting you, provide support, and get you the help you need.
                      </div>
                    </div>
                  </div>
                  <div class="row" style="justify-content:center;">
                    <div class="col-sm-4">
                      <p>Layanan ini gratis tanpa ada pemungutan biaya sepeserpun</p>
                    </div>
                    <div class="col-sm-4">
                      <img src="https://www.theworkstation.co.uk/wp-content/uploads/2016/07/phone-icon-vector-telephone-icon-vector-png.png" alt="" width="100px">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <hr>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-10">
                <div class="jumbotron">
                  <div class="container">
                    <h4>Dalam keadaan apa saja kah saya boleh mengunakan HeartCall?</h4>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="jumbotron" style="background-color:white; width:400px; padding:30px; border-bottom:2px solid black;">
                          <div class="container">
                            No matter what problems you’re dealing with, whether or not you’re thinking about suicide, if you need someone to lean on for emotional support, call the Lifeline.
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <h5 style="text-align:center;">Percayalah tidak ada orang yang di takdirkan untuk sendiri di dunia ini</h5>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!--
    <div class="row" style="justify-content:left; margin-top:-30px;">
      <div class="col-sm-1">
        <hr style="background-color:black;">
      </div>
        <button type="button" class="btn btn-primary" name="button" data-toggle="collapse" data-target="#US" >V</button>
      <div class="col-sm-1">
        <hr style="background-color:black;">
      </div>
    </div>

    <div id="info" class="collapse">
      <div class="jumbotron" style="background-color:#59dbff; padding:100px;">
        <div class="container">

        </div>
      </div>
    </div>-->
    <div class="jumbotron" style="background-color:#59dbff; margin-top:40px;">
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
            <a href="<?= base_url();?>/C_syl/gabung"><img src="https://image.flaticon.com/icons/png/512/69/69881.png" alt="" style="width:85px; margin-right:10px;"></a>
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
