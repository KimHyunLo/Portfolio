<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfect Plan</title>
  <link rel="stylesheet" href="../assets/css/head.css">
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
        <span class="none">Portfolio</span>
        <span id="header__burger" class="res">
          <div></div>
          <div></div>
        </span>
      </div>
    </header>
    <main id="main">
        <section id="login" class="container section">
            <h2>로그인</h2>
            <p>
                로그인을 하시면 게시글 및 댓글 작성이 가능합니다.<br>
                회원가입을 하면 로그인을 할 수 있습니다.
            </p>
            <div class="login__inner">
                <div class="login__contents">
                    <form name="login" action="loginSave.php" method="post">
                        <fieldset>
                            <legend class="blind">로그인 입력폼</legend>
                            <div>
                                <label class="blind" for="youEmail">이메일</label>
                                <input type="email" name="youEmail" id="youEmail" class="input_style1" placeholder="이메일" class="input__style" required>
                            </div>
                            <div>
                                <label class="blind" for="youPass">비밀번호</label>
                                <input type="password" name="youPass" id="youPass" class="input_style1" placeholder="비밀번호" class="input__style" required>
                            </div>
                            <button type="submit" class="btn_style1 mt20">로그인</button>
                        </fieldset>
                    </form>
                </div>
                <div class="login__footer">
                    
                    <div class="desc">
                        <ul>
                            <li>회원가입을 하지 않았다면 회원가입 먼저 해주세요! <a href="#" name="join" class="link">회원가입</a></li>
                            <!-- <li>아이디가 기억이 나지 않는다면. <a href="#" class="link">아이디 찾기</a></li>
                            <li>비밀번호가 기억이 나지 않는다면. <a href="#" class="link">비밀번호 찾기</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- //login -->
    </main>
    <script src="../js/jquery.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.js"></script>
    <script src="../js/projTrans.js"></script>
    <script src="../js/common.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>