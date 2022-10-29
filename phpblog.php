<?php
  include "./connect/connect.php";
  include "./connect/session.php";
?>
<!DOCTYPE html>
<ht lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perfect Plan</title>
    <link rel="stylesheet" href="./assets/css/project.css" />
    <link rel="stylesheet" href="assets/css/pageLoad.css" />
  </head>
  <body>
<?php
  include "include/common.php";
?>
<?php
  include "include/header.php";
?>
    <div class="container">
      <section id="sectionPin">
        <a name="works" class="leave__btn link"></a>
        <div class="pin-wrap">
          <div class="int">
<?php
  include "include/menu.php";
?>
            <div class="box intro">
              <div class="project__title">
                <h1>PHP Blog <em>Site</em></h1>
              </div>
              <div class="box__bottom">
                <div class="intro__info">
                  <ul>
                    <li>
                      <div class="gray">Period:</div>
                      <div>22/09 ~ 22/10</div>
                    </li>
                    <li>
                      <div class="gray">Language:</div>
                      <div>PHP</div>
                    </li>
                    <li>
                      <div class="gray">Framework:</div>
                      <div>Vanilla PHP</div>
                    </li>
                    <li>
                      <div class="gray">Libraries:</div>
                      <div>None</div>
                    </li>
                  </ul>
                </div>
                <div class="intro__btn">
                  <button>
                    <a
                      href="https://github.com/KimHyunLo/PHP-Blog"
                      target="_blank"
                      rel="noopener noreferrer"
                    >
                      View Code
                    </a>
                  </button>
                  <button>
                    <a
                      href="http://leeas016.dothome.co.kr/php/main/main.php"
                      target="_blank"
                      rel="noopener noreferrer"
                    >
                      Visit Site
                    </a>
                  </button>
                </div>
              </div>
            </div>
            <div class="box infoImg">
              <img src="./assets/img/project/infoImg.png" alt="image" />
            </div>
          </div>
          <div class="box info">
            <li>
              <p>
                PHP Blog 사이트는 순수 PHP로 작업한 첫 풀스텍 프로젝트다.
                myAdmin 데이터베이스를 이용한 로그인, 회원가입, 게시판 등의
                기능을 가지고 있다.
              </p>
            </li>
            <li>
              <p>
                PHP와 myAdmin을 통해 백엔드에 대한 이해와 데이터베이스에서
                데이터를 활용하는 방법 등을 익혔다.
              </p>
            </li>
            <li>
              <p>또한 로그인과 회원가입의 원리를 이해하고 정리했다.</p>
            </li>
            <img src="./assets/img/project/embosing.png" alt="image" />
          </div>
          <div class="box webCont">
            <img src="./assets/img/project/phpweb.png" alt="image" />
          </div>
          <div class="last__box">
<?php
  include "include/menu.php";
?>
            <img src="./assets/img/project/exPhp.png" alt="image" />
            <a name="planner" class="next__btn link"></a>
          </div>
        </div>
      </section>
    </div>
    <script src="./js/scrollTrigger.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.js"></script>
    <script src="./js/project.js"></script>
    <script src="./js/jquery.js"></script>
    <script src="./js/common.js"></script>
    <script src="./js/projTrans.js"></script>
  </body>
</html>
