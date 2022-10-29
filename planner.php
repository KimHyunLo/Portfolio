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
                <h1>Spotify <em>Site</em></h1>
              </div>
              <div class="box__bottom">
                <div class="intro__info">
                  <ul>
                    <li>
                      <div class="gray">Period:</div>
                      <div>22/10 ~ 22/11</div>
                    </li>
                    <li>
                      <div class="gray">Language:</div>
                      <div>Javascript</div>
                    </li>
                    <li>
                      <div class="gray">Framework:</div>
                      <div>React</div>
                    </li>
                    <li>
                      <div class="gray">Libraries:</div>
                      <div>Redux</div>
                    </li>
                  </ul>
                </div>
                <div class="intro__btn">
                  <button>
                    <a
                      href="https://github.com/KimHyunLo/spotify"
                      target="_blank"
                      rel="noopener noreferrer"
                    >
                      View Code
                    </a>
                  </button>
                  <button>
                    <a
                      href="https://spotify-redux.netlify.app/"
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
                Spotify 사이트는 React.js를 이용해 만든 spotify 리뉴얼 프로젝트입니다. Rapid API를 사용해 탑 차트, 탑 아티스트, 노래가사 등을 가져와 사용했습니다.
              </p>
            </li>
            <li>
              <p>
                Node.js 모듈의 상태관리 라이브러리인 Redux를 사용했습니다. Redux를 통해 상태관리의 중요성을 인지하게 되었으며 Redux의 기본 개념에 대해 이해하게 되었습니다.
              </p>
            </li>
            <li>
              <p>
                Rapid API를 이용해 RESTful API를 작성할 수 있었고, API 활용 능력이 더 익숙해졌습니다.
              </p>
            </li>
            <img src="./assets/img/project/embosing.png" alt="image" />
          </div>
          <div class="box webCont">
            <img src="./assets/img/project/spotifyweb.png" alt="image" />
          </div>
          <div class="last__box">
<?php
  include "include/menu.php";
?>
            <img src="./assets/img/project/exSpotify.png" alt="image" />
            <a name="react" class="next__btn link"></a>
          </div>
        </div>
      </section>
    </div>
    <script src="./js/scrollTrigger.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.js"></script>
    <script src="./js/project.js"></script>
    <script src="./js/jquery.js"></script>
    <script src="./js/projTrans.js"></script>
    <script src="./js/common.js"></script>
  </body>
</html>
