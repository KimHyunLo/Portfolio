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
    <link rel="stylesheet" href="assets/css/work.css" />
    <link rel="stylesheet" href="assets/css/pageLoad.css" />
  </head>
  <body>
<?php
  include "include/common.php";
?>
<?php
  include "include/header.php";
?>
    <div id="container">
      <section id="title">
        <span>My<em>Work</em></span>
      </section>
<?php
  include "include/menu.php";
?>
      <section class="top-space"></section>
      <div id="work__inner">
        <section id="work__box">
          <div id="work__bg">
            <div class="rocket__box" data-scroll data-scroll-speed="2">
              <img
                class="rocket"
                src="./assets/img/work/rocket.png"
                alt="image"
              />
            </div>
            <img
              class="rocketLine"
              src="./assets/img/work/rocketLine.svg"
              alt="image"
            />
            <img
              class="cloudMotion"
              src="./assets/img/work/cloudMotion.svg"
              alt="image"
            />
            <img class="cloud" src="./assets/img/work/cloud.png" alt="image" />
            <img class="lines" src="./assets/img/work/lines.svg" alt="image" />
            <img
              class="shapes"
              src="./assets/img/work/shapes.svg"
              alt="image"
            />
          </div>
          <div id="work__cards">
            <div>
              <a name="react" class="card left__card link">
                <div class="front">
                  <li data-scroll data-scroll-speed="2">
                    <h1>React Api</h1>
                  </li>
                </div>
                <div name="react" class="back">
                  <li data-scroll data-scroll-speed="2">
                    <img src="./assets/img/work/react.png" alt="image" />
                  </li>
                </div>
              </a>
              <a name="vue" class="card right__card link">
                <div class="front">
                  <li data-scroll data-scroll-speed="2">
                    <h1>Vue Api</h1>
                  </li>
                </div>
                <div name="vue" class="back">
                  <li data-scroll data-scroll-speed="2">
                    <img src="./assets/img/work/vue.PNG" alt="image" />
                  </li>
                </div>
              </a>
              <a name="perfect" class="card left__card link">
                <div class="front">
                  <li data-scroll data-scroll-speed="2">
                    <h1>Perfect Plan</h1>
                  </li>
                </div>
                <div name="perfect" class="back">
                  <li data-scroll data-scroll-speed="2">
                    <img src="./assets/img/work/perfectPlan.PNG" alt="image" />
                  </li>
                </div>
              </a>
              <a name="phpblog" class="card right__card link">
                <div class="front">
                  <li data-scroll data-scroll-speed="2">
                    <h1>PHP Blog</h1>
                  </li>
                </div>
                <div name="phpblog" class="back">
                  <li data-scroll data-scroll-speed="2">
                    <img src="./assets/img/work/phpdb.png" alt="image" />
                  </li>
                </div>
              </a>
              <a name="planner" class="card left__card link">
                <div class="front">
                  <li data-scroll data-scroll-speed="2">
                    <h1>Spotify</h1>
                  </li>
                </div>
                <div name="planner" class="back">
                  <li data-scroll data-scroll-speed="2">
                    <img src="./assets/img/work/spotify.PNG" alt="image" />
                  </li>
                </div>
              </a>
            </div>
          </div>
<?php
  include "include/menu.php";
?>
        </section>
      </div>
    </div>
    <script src="./js/jquery.js"></script>
    <script src="./js/scrollTrigger.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.js"></script>
    <script src="./js/works.js"></script>
    <script src="./js/common.js"></script>
    <script src="./js/pageTrans.js"></script>
  </body>
</html>
