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
            <div class="board__view">
              <table>
                <colgroup>
                  <col style="width: 20%">
                  <col style="width: 80%">
                </colgroup>
                <tbody>
<?php
  $boardID = $_GET["boardID"];

  $sql = "SELECT b.boardTitle, m.youName, b.regTime, b.boardView, b.boardContents FROM myBoard b JOIN reMember m ON(m.memberID = b.memberID) WHERE b.boardID = {$boardID}";
  $result = $connect -> query($sql);

  if($result) {
    $info = $result -> fetch_array(MYSQLI_ASSOC);

    echo "<tr><th>제목</th><td>".$info['boardTitle']."</td></tr>";
    echo "<tr><th>이름</th><td>".$info['youName']."</td></tr>";
    echo "<tr><th>날짜</th><td>".date('Y-m-d', $info['regTime'])."</td></tr>";
    echo "<tr><th>조회수</th><td>".$info['boardView']."</td></tr>";
    echo "<tr><th>내용</th><td class='height'>".$info['boardContents']."</td></tr>";
  }
?>
              </tbody>
            </table>
          </div>
          <div class="board__btn">
            <a href="boardModify.php?boardID=<?=$_GET['boardID']?>">수정하기</a>
            <a href="javascript:void(0);" onclick="delConfirm()">삭제하기</a>
            <a href="board.php">목록보기</a>
          </div>
        </section>
      </div>
    </div>
    <script>
    const delConfirm = () => {
      if(confirm("삭제 하시겠습니까?")){
        location.href="board/boardDelete.php?boardID=<?=$_GET['boardID']?>";
      }
    }
    </script>
    <script src="js/jquery.js"></script>
    <script src="./js/scrollTrigger.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.js"></script>
    <script src="js/projTrans.js"></script>
    <script src="js/common.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
