<!DOCTYPE HTML>
<html lang="en">
   <head>
   <?php
include 'functions.php';
?>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
      <!----------------- STYLES ---------------->
      <link rel="stylesheet" href="main/main.css">
      <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">

      <title><?php getdata('sitename');?></title>
      <link rel="icon" type="image/png" href=<?php getdata('favicon');?>>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'><link rel="stylesheet" href="./style.css">

      </div>
      <!--------------------------------->
      
   </head>
   <body>
      <!----------------- Head ---------------->
      <?php 
         include 'main/header.php'; 
      ?>

      <!--------------------------------->

      <!-------------------------- HOME PAGE SLIDER ------------------------>

      <div class="wrapper">

<div class="content">
  <!--<div class="bg-shape">
    <img src="https://i.ibb.co/Mny6jT6/logo.png" alt="">
  </div>
-->
  
  <div class="product-img">

    <div class="product-img__item" id="img1">
      <img src="<?php lspdslider('character');?>" alt="star wars" class="product-img__img">
    </div>

    <div class="product-img__item" id="img2">
      <img src="<?php bcsoslider('character');?>" alt="star wars" class="product-img__img">
    </div>

    <div class="product-img__item" id="img4">
      <img src=<?php getsliderdata('logo');?> alt="star wars" class="product-img__img">
    </div>


  </div>



  <div class="product-slider">
    <button class="prev disabled">
      <span class="icon">
        <svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-left"></use></svg>
      </span>
    </button>
    <button class="next">
      <span class="icon">
        <svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg>
      </span>
    </button>

    <div class="product-slider__wrp swiper-wrapper">
      <div class="product-slider__item swiper-slide" data-target="img4">
        <div class="product-slider__card">
          <img src="https://i.ibb.co/6R6NN1h/backgroundimage.jpg" alt="star wars" class="product-slider__cover">
          <div class="product-slider__content">
            <h1 class="product-slider__title">
              WELCOME <i class="fas fa-play"></i>
            </h1>
            <span class="product-slider__price"></span>
            <div class="product-ctr">
              <div class="product-labels">
                <div class="product-labels__title">DEPARTMENTS</div>

                <div class="product-labels__group">
                  <label class="product-labels__item">
                    <input type="radio" class="product-labels__checkbox" name="type5" >
                    <span class="product-labels__txt"><?php getsliderdata('department1');?></span>
                  </label>

                  <label class="product-labels__item">
                    <input type="radio" class="product-labels__checkbox" name="type5" checked>
                    <span class="product-labels__txt"><?php getsliderdata('department2');?></span>
                  </label>

                  <label class="product-labels__item">
                    <input type="radio" class="product-labels__checkbox" name="type5" >
                    <span class="product-labels__txt"><?php getsliderdata('department3');?></span>
                  </label>


                </div>

              </div>

              <span class="hr-vertical"></span>

              <div class="product-inf">
                <div class="product-inf__percent">
                  <div class="product-inf__percent-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                      <defs>
                        <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                          <stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
                          <stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
                        </linearGradient>
                      </defs>
                      <circle cx="50" cy="50" r="47" stroke-dasharray="240, 300" stroke="#cb2240" stroke-width="4" fill="none"/>
                    </svg>
                  </div>
                  <div class="product-inf__percent-txt">
                  <?php getsliderdata('playergrowth');?>%
                  </div>
                </div>

                <span class="product-inf__title">PLAYERS GROWTH RATE</span>
              </div>

            </div>

            <div class="product-slider__bottom">
              <button id="homediscord" class="product-slider__cart"><i class="fab fa-discord"></i> DISCORD</button>
            <script>
              document.getElementById("homediscord").onclick = function () {
                location.href = "<?php getsliderdata('discord');?>";
              };
            </script>
              
            </div>
          </div>
        </div>
      </div>
      <div class="product-slider__item swiper-slide" data-target="img1">
        <div class="product-slider__card">
          <img src="https://res.cloudinary.com/muhammederdem/image/upload/v1536405222/starwars/item-1-bg.jpg" alt="star wars" class="product-slider__cover">
          <div class="product-slider__content">
            <h1 class="product-slider__title">
            <?php lspdslider('dptfullname');?> <i class="fas fa-briefcase"></i>
            </h1>
            <button class="opeappbut">APPLICATIONS <i class="<?php lspdslider('openorclosed');?>"></i></button>
            <div class="product-ctr">
              <div class="product-labels">
                <div class="product-labels__title">LEOS OF THE MONTH</div>

                <div class="product-labels__group">
                  <label class="product-labels__item">
                    <input type="radio" class="product-labels__checkbox" name="type1" checked>
                    <span class="product-labels__txt"><?php lspdslider('leosofthemonth1');?></span>
                  </label>

                  <label class="product-labels__item">
                    <input type="radio" class="product-labels__checkbox" name="type1">
                    <span class="product-labels__txt"><?php lspdslider('leosofthemonth2');?></span>
                  </label>
                  </div>

                  <div class="product-labels__title">MUST BE</div>
                <div class="product-labels__group">
                  <label class="product-labels__item">
                    <input type="radio" class="product-labels__checkbox" name="type2" >
                    <span class="product-labels__txt"><?php lspdslider('mustbe');?> <i class="fas fa-plus-square"></i></span>
                  </label>
              </div>
              </div>


              <span class="hr-vertical"></span>

              <div class="product-inf">
                <div class="product-inf__percent">
                  <div class="product-inf__percent-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                      <defs>
                        <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                          <stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
                          <stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
                        </linearGradient>
                      </defs>
                      <circle cx="50" cy="50" r="47" stroke-dasharray="225, 300" stroke="#cb2240" stroke-width="4" fill="none"/>
                    </svg>
                  </div>
                  <div class="product-inf__percent-txt">
                  <?php lspdslider('depgrowth');?>%
                  </div>
                </div>

                <span class="product-inf__title">DEPARTMENT GROWTH</span>
              </div>

            </div>

            <div class="product-slider__bottom">
              <button id="lspdapplynow" class="product-slider__cart">APPLY NOW <i class="fas fa-paperclip"></i></button>
              <script>
                document.getElementById("lspdapplynow").onclick = function () {
                location.href = "<?php lspdslider('applylink');?>";
                };
              </script>

            </div>
          </div>
        </div>
      </div>

      <div class="product-slider__item swiper-slide" data-target="img2">
        <div class="product-slider__card">
          <img src="https://res.cloudinary.com/muhammederdem/image/upload/v1536405222/starwars/item-2-bg.jpg" alt="star wars" class="product-slider__cover">
          <div class="product-slider__content">
            <h1 class="product-slider__title">
            <?php bcsoslider('dptfullname');?> <i class="fas fa-briefcase"></i>
            </h1>
            <button class="opeappbut">APPLICATIONS <i class="<?php bcsoslider('openorclosed');?>"></i></button>
            <div class="product-ctr">
              <div class="product-labels">
                <div class="product-labels__title">LEOS OF THE MONTH</div>

                <div class="product-labels__group">
                  <label class="product-labels__item">
                    <input type="radio" class="product-labels__checkbox" name="type3" checked>
                    <span class="product-labels__txt"><?php bcsoslider('leosofthemonth1');?></sup></span>
                  </label>

                  <label class="product-labels__item">
                    <input type="radio" class="product-labels__checkbox" name="type3">
                    <span class="product-labels__txt"><?php bcsoslider('leosofthemonth2');?></sup></span>
                  </label>
                </div>

                <div class="product-labels__title">MUST BE</div>

                <div class="product-labels__group">
                  <label class="product-labels__item">
                    <input type="radio" class="product-labels__checkbox" name="type2" >
                    <span class="product-labels__txt"><?php bcsoslider('mustbe');?> <i class="fas fa-plus-square"></i></span>
                  </label>

                </div>

              </div>

              <span class="hr-vertical"></span>

              <div class="product-inf">
                <div class="product-inf__percent">
                  <div class="product-inf__percent-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                      <defs>
                        <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                          <stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
                          <stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
                        </linearGradient>
                      </defs>
                      <circle cx="50" cy="50" r="47" stroke-dasharray="240, 300" stroke="#cb2240" stroke-width="4" fill="none"/>
                    </svg>
                  </div>
                  <div class="product-inf__percent-txt">
                  <?php bcsoslider('depgrowth');?>%
                  </div>
                </div>

                <span class="product-inf__title">DEPARTMENT GROWTH</span>
              </div>

            </div>

            <div class="product-slider__bottom">
            <button id="bcsoapplynow" class="product-slider__cart">APPLY NOW <i class="fas fa-paperclip"></i></button>
            <script>
                document.getElementById("bcsoapplynow").onclick = function () {
                location.href = "<?php bcsoslider('applylink');?>";
                };
              </script>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>

</div>

<div class="social">
</div>

</div>
<svg class="hidden" hidden>
<symbol id="icon-arrow-left" viewBox="0 0 32 32">
  <path d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z"></path>
</symbol>
<symbol id="icon-arrow-right" viewBox="0 0 32 32">
  <path d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z"></path>
</symbol>
</svg>
<div>
</div>

<div class="blog-headertext">
<h1> OUR SERVERS <i class="fas fa-server"></i></h1>
</div>


<aside>
<div class="blog-slider">
  <div class="blog-slider__wrp swiper-wrapper">
    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">
        
        <img src="<?php getservers('serverlogo');?>" alt="">
      </div>
      <div class="blog-slider__content">
        <span class="blog-slider__code"><?php getservers('released');?></span>
        <div class="blog-slider__title"><?php getservers('servername');?></div>
        <div class="blog-slider__text"><?php getservers('description');?></div>
        <a href="fivem://connect/<?php getservers('serverip');?><?php getservers('serverport');?>" class="blog-slider__button">START PLAYING</a>
        <!----------------------------------------------------------------------- DEAD LINE ----------------------->


        <!------------------------------------------------- END DEAD LINE -------------------------->
      </div>
    </div>
  
    
  </div>
  <div class="blog-slider__pagination"></div>
</div>
</aside>

        <!------------------------------------------------- Server Status -------------------------->
        <!------------------------------------------------- Server Status -------------------------->
        <!------------------------------------------------- Server Status -------------------------->

<section>

<div class="blog-headertext2">
<h1> SERVER STATUS <i class="fas fa-server"></i></h1>
</div>



<?php
$settings['ip'] = $ip;
$settings['port'] = $port;
$settings['max_slots'] = $max_slots;

@$content = json_decode(file_get_contents("http://".$settings['ip'].":".$settings['port']."/info.json"), true);
@$img_d64 = $content['icon'];
if($content) {
$gta5_players = file_get_contents("http://".$settings['ip'].":".$settings['port']."/players.json");
$content = json_decode($gta5_players, true);
$pl_count = count($content);
                                    ?>
 <div class="card">
  <div class="product-image"><img src="<?php getservers('serverlogo');?>" alt="" /></div>
  <div class="product-info">
    <h2 class="server-online">ONLINE</h2>
    <h3 class="product-slogan"> <a class="playerson-text"> ONLINE PLAYERS:</a> <?= $pl_count ?> / <?= $settings['max_slots'] ?></h3>

  </div>
</div>
<?php } else { ?>
  <div class="card">
  <div class="product-image"><img src="<?php getservers('serverlogo');?>" alt="" /></div>
  <div class="product-info">
    <h2 class="server-offline">OFFLINE</h2>
    <h3 class="product-slogan"> <a class="playerson-text"> ONLINE PLAYERS:</a> 0 / 0</h3>

  </div>
</div>
<?php
          } ?>
          
</section>

<?php 
         include 'main/footer.php'; 
      ?>
        <!------------------------------------------------- END OF Server Status -------------------------->
        <!------------------------------------------------- END OF Server Status -------------------------->
        <!------------------------------------------------- END OF Server Status -------------------------->

<!--------------- SCRIPTS ------------>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script><script  src="./script.js"></script>
<script type="text/javascript" src="main/main.js"></script>
<!--------------------------->
   </body>
</html>

