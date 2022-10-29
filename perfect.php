<?php
  include "./connect/connect.php";
  include "./connect/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
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
                <h1>Perfect Plan <em>Site</em></h1>
              </div>
              <div class="box__bottom">
                <div class="intro__info">
                  <ul>
                    <li>
                      <div class="gray">Period:</div>
                      <div>22/08 ~ 22/10</div>
                    </li>
                    <li>
                      <div class="gray">Language:</div>
                      <div>Javascript</div>
                    </li>
                    <li>
                      <div class="gray">Framework:</div>
                      <div>Vanilla Javascript</div>
                    </li>
                    <li>
                      <div class="gray">Libraries:</div>
                      <div>jQuery, GSAP, Locomotive</div>
                    </li>
                  </ul>
                </div>
                <div class="intro__btn">
                  <button>
                    <a
                      href="https://github.com/KimHyunLo/phpReport"
                      target="_blank"
                      rel="noopener noreferrer"
                    >
                      View Code
                    </a>
                  </button>
                  <button>
                    <a
                      href="https://phpreport.netlify.app/"
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
                Perfect Plan 사이트는 순수 자바스크립트를 이용해 만든 포트폴리오
                프로젝트다. 다양한 프레임워크와 라이브러리를 활용한 작업물들과
                나에 대한 간단한 소개를 담고 있다.
              </p>
            </li>
            <li>
              <p>
                GSAP 라이브러리를 이용해 슬라이드 이펙트, 스크롤 이벤트 등의
                부드러운 애니메이션을 만들었다.
              </p>
            </li>
            <li>
              <p>
                Locomotive 라이브러리를 이용해 부드러운 스크롤 효과와 가로
                스크롤 기능을 만들었다.
              </p>
            </li>
            <img src="./assets/img/project/embosing.png" alt="image" />
          </div>
          <div class="box webCont">
            <img src="./assets/img/project/perfectweb.png" alt="image" />
          </div>
          <div class="last__box">
<?php
  include "include/menu.php";
?>
            <img src="./assets/img/project/exPerfect.png" alt="image" />
            <a name="phpblog" class="next__btn link"></a>
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
