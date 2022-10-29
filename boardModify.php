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
            <div class="board__modify">
              <form action="board/boardModifySave.php" name="boardModify" method="post">
                <fieldset>
<?php
  $boardID = $_GET["boardID"];

  $sql = "SELECT boardID, boardTitle, boardContents FROM myBoard WHERE boardID = {$boardID}";
  $result = $connect -> query($sql);

  if($result) {
    $info = $result -> fetch_array(MYSQLI_ASSOC);

    echo "<div style='display:none'><label for='boardID'>번호</label><input type='text' name='boardID' id='boardID' value='".$info['boardID']."'></div>";
    echo "<div><label for='boardTitle'>제목</label><input type='text' name='boardTitle' id='boardTitle' value='".$info['boardTitle']."'></div>";
    echo "<div><label for='boardContents'>내용</label><textarea name='boardContents' id='boardContents' rows='13'>".$info['boardContents']."</textarea></div>";
    echo "<div><label for='boardPass'>비밀번호</label><input type='password' name='boardPass' id='boardPass' placeholder='로그인 비밀번호를 입력해주세요!'autocomplete='off' required></input></div>";
  }
?>
                  <button type="submit" value="수정하기" class="btn">수정하기</button>
                  <a href="board.php" class="btn mr10">목록보기</a>
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
