<?php
  include "connect/connect.php";
  include "connect/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perfect Plan</title>
    <link rel="stylesheet" href="assets/css/board.css" />
    <link rel="stylesheet" href="assets/css/pageLoad.css" />
  </head>
  <body>
<?php
  include "include/common.php";
?>
<?php
  include "include/header.php";
?>
    <div id="main">
      <div id="main__inner">
        <section id="title">
          <span>My<em>Board</em></span>
        </section>
<?php
  include "include/menu.php";
?>
        <section id="board" class="container section">
          <div class="board__inner">
            <div class="board__write">
              <form action="board/boardWriteSave.php" name="boardWrite" method="post">
                <fieldset>
                  <div>
                    <label for="boardTitle">제목</label>
                    <input type="text" name="boardTitle" id="boardTitle">
                  </div>
                  <div>
                    <label for="boardContents">내용</label>
                    <textarea name="boardContents" id="boardContents" rows="20"></textarea>
                  </div>
                  <button type="submit" class="btn">저장하기</button>
                </fieldset>
              </form>
            </div>
          </div>
        </section>
      </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="./js/scrollTrigger.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.js"></script>
    <script src="js/projTrans.js"></script>
    <script src="js/common.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
