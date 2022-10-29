<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfect Plan</title>
    <link rel="stylesheet" href="../assets/css/head.css">
    <link rel="stylesheet" href="../assets/css/pageLoad.css" />
    <script src="../js/jquery.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="../js/common.js"></script>
    <script src="../js/projTrans.js"></script>
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
        name="index"
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
        <section id="banner" class="container section">
            <h2 class="blind">회원가입 축하합니다.</h2>
            <div class="banner__inner style2">
                <div class="img">
                    <img src="./banner_img03.svg" alt="배너 이미지">
                </div>
                <div class="desc">
                    어떤 일이라도 <em>노력</em>하고 즐기면 그 결과는 <em>빛</em>을 바란다고 생각합니다.<br>
<?php 
  include "../connect/connect.php";

  $youEmail = $_POST["youEmail"];
  $youName = $_POST["youName"];
  $youPass = $_POST["youPass"];
  $youPassC = $_POST["youPassC"];
  $youPhone = $_POST["youPhone"];
  $regTime = time();

  // 메세지 출력
  function msg($alert) {
    echo "<p>{$alert}</p>";
    echo "<a class='btn btn_style1 mt30 link' name='login' href='login.php'>로그인</a>";
  }

  // 유효성 검사
  // 이메일 체크(정규식  표현)
  // $check_email = preg_match("/^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i", $youEmail);
  
  // if($check_email == false) {
  //   echo "이메일이 잘못되었습니다.<br>올바른 이메일을 작성해주세요.";
  //  exit;
  // }

  // 이메일 검사(내장 함수)
  $check_email = filter_var($youEmail, FILTER_VALIDATE_EMAIL);

  if($check_email == false) {
    msg("이메일이 잘못되었습니다.<br>올바른 이메일을 작성해주세요.");
    exit;
  }


  // 이름 유효성 검사(정규식 표현): 한글, 2~5글자
  $check_name = preg_match("/^[가-힣]{2,15}$/", $youName);

  if($check_name == false) {
    msg("이름은 한글로만 작성할 수 있습니다.<br>올바른 이름을 작성해주세요.");
    exit;
  }


  // 비밀번호 유효성 검사
  if($youPass !== $youPassC) {
    msg("비밀번호가 일치하지 않습니다.<br>다시 한 번 확인해주세요.");
    exit;
  }


  // 비밀번호 암호화
  // $youPass = sha1($youPass);


  // 휴대폰번호 유효성 검사
  $check_number = preg_match("/^01([0|1|6|7|8|9]?)-?([0-9]{3,4})-?([0-9]{4})$/", $youPhone);

  if($check_number == false) {
    msg("번호가 정확하지 않습니다.<br>올바른 번호(000-0000-0000)를 작성해주세요.");
    exit;
  }


  // 회원가입 데이터 입력 --> 유혀성 검사 --> 이메일주소/핸드폰번호 중복 검사(o) --> 데이터베이스 입력
  // 회원가입 데이터 입력 --> 유혀성 검사 --> 이메일주소/핸드폰번호 중복 검사(x) --> 로그인 유도

  // 이메일 중복 검사
  $isEmailCheck = false;

  $sql = "SELECT youEmail From reMember WHERE youEmail = '$youEmail'";
  $result = $connect -> query($sql);

  if($result) {
    $count = $result -> num_rows;
    if($count == 0) {
      // 회원가입 가능
      $isEmailCheck = true;
    } else {
      // 회원가입 불가능
      msg("이미 회원가입이 되어 있습니다. 로그인 해주세요.");
      exit;
    }
    } else {
      msg("에러발생1 : 관리자에게 문의하세요.");
      exit;
  }

    
  // 핸드폰 중복 검사
  $isPhoneCheck = false;

  $sql = "SELECT youPhone FROM reMember WHERE youPhone = '$youPhone'";
  $result = $connect -> query($sql);

  if($result) {
    $count = $result -> num_rows;
    if($count == 0) {
      // 회원가입 가능
      $isPhoneCheck = true;
    } else {
      // 회원가입 불가능
      msg("이미 회원가입이 되어 있습니다. 로그인 해주세요.");
    }
  } else {
    msg("에러발생2 : 관리자에게 문의하세요.");
    exit;
  }


  // 회원가입
  if($isEmailCheck == true && $isPhoneCheck == true) {
    $sql = "INSERT INTO reMember(youEmail, youName, youPass, youPhone, regTime) VALUES('$youEmail', '$youName', '$youPass', '$youPhone', '$regTime')";
    $result = $connect -> query($sql);

    if($result) {
      msg("회원가입을 축하합니다. 로그인 해주세요.");
    } else {
      msg("에러발생3 : 관리자에게 문의하세요.");
      exit;
    }
  } else {
    msg("이미 가입된 회원입니다. 로그인 해주세요.");
    exit;
  }
?>
                </div>
            </div>
        </section>
    </main>
</body>
</html>