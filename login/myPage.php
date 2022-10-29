<?php
  include "../connect/connect.php";
  include "../connect/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perfect Plan</title>
    <link rel="stylesheet" href="../assets/css/head.css" />
    <link rel="stylesheet" href="../assets/css/pageLoad.css" />
  </head>
  <body>
<?php
  include "../include/loginCommon.php";
?>
      <header id="header">
        <div id="header__left" class="header__item">
          <div class="item__left">
            <img src="../assets/img/main/megaphone.svg" alt="megaphone" />
          </div>
          <div class="item__left">Highflier Developer</div>
        </div>
        <a
          href="../index.php"
          id="header__mid"
          name="../index"
          class="header__item link"
        >
          <span>perf<em>an</em></span>
        </a>
        <div id="header__right" class="header__item">
          <span class="none">
<?php if(isset($_SESSION['memberID'])) {?>
        <button>
            <a><?=$_SESSION['youName']?>님 환영합니다.</a></a>
          </button>
          /
          <button>
            <a href="logout.php" name="logout" class="link">로그아웃</a>
          </button>
<?php } ?>
          </span>
          <span id="header__burger" class="res">
            <div></div>
            <div></div>
          </span>
        </div>
      </header>
    <main id="main">
      코딩중입니다!
    </main>
    <script src="../js/jquery.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.js"></script>
    <script src="../js/projTrans.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/common.js"></script>
  </body>
</html>
