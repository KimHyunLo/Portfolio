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
                <h1>Vue Api <em>Site</em></h1>
              </div>
              <div class="box__bottom">
                <div class="intro__info">
                  <ul>
                    <li>
                      <div class="gray">Period:</div>
                      <div>22/09 ~ 22/10</div>
                    </li>
                    <li>
                      <div class="gray">Framework:</div>
                      <div>Vue</div>
                    </li>
                    <li>
                      <div class="gray">Libraries:</div>
                      <div>Swiper</div>
                    </li>
                    <li>
                      <div class="gray">API:</div>
                      <div>Youtube, TMDB, Unsplash</div>
                    </li>
                  </ul>
                </div>
                <div class="intro__btn">
                  <button>
                    <a
                      href="https://github.com/KimHyunLo/VUE-API"
                      target="_blank"
                      rel="noopener noreferrer"
                    >
                      View Code
                    </a>
                  </button>
                  <button>
                    <a
                      href="https://vueapi.netlify.app/"
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
                Vue Api Site는 React프레임워크를 이용해 여러 API소스를 활용하여
                만든 프로젝트입니다. Vue 프레임워크의 장점을 활용해 페이지간
                이동이 빠르고, API를 이용해 다채로운 컨텐츠를 만들었습니다.
              </p>
            </li>
            <li>
              <p>
                Youtube, TMDB, Unsplash 등 다양한 API소스를 fetch 방식으로
                불러서 게시물 검색, 슬라이더, 바로가기 등의 기능을 만들었다.
              </p>
            </li>
            <li>
              <p>Swiper 라이브러리를 이용해 간단한 슬라이더를 구현했다.</p>
            </li>
            <img src="./assets/img/project/embosing.png" alt="image" />
          </div>
          <div class="box webCont">
            <img src="./assets/img/project/vueweb.png" alt="image" />
          </div>
          <div class="last__box">
<?php
  include "include/menu.php";
?>
            <img src="./assets/img/project/exVue.png" alt="image" />
            <a name="perfect" class="next__btn link"></a>
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
