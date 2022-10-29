<header id="header">
  <div id="header__left" class="header__item">
    <div class="item__left">
      <img src="assets/img/main/megaphone.svg" alt="megaphone" />
    </div>
    <div class="item__left">Highflier Developer</div>
  </div>
  <a
    href="index.php"
    id="header__mid"
    name="index"
    class="header__item link"
  >
    <span>perf<em>an</em></span>
  </a>
  <div id="header__right" class="header__item">
    <span class="none">
<?php if(isset($_SESSION['memberID'])) {?>
  <button>
      <a href="login/myPage.php" name="login/myPage" class="link"><?=$_SESSION['youName']?>님 환영합니다.</a></a>
    </button>
    /
    <button>
      <a href="login/logout.php" name="login/logout" class="link">로그아웃</a>
    </button>
<?php } else { ?>
      <button>
      <a href="login/login.php" name="login/login" class="link">로그인</a>
    </button>
    /
    <button>
      <a href="login/join.php" name="login/join" class="link">회원가입</a>
    </button>
<?php } ?>
    </span>
    <span id="header__burger" class="res">
      <div></div>
      <div></div>
    </span>
  </div>
</header>