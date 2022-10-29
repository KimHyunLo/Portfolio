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
        <section class="board">
          <div class="board__search">
            <div class="left">
<?php
  // 총 게시글 갯수
  $sql = "SELECT count(boardId) FROM myBoard";
  $result = $connect -> query($sql);

  $boardTotalCount = $result -> fetch_array(MYSQLI_ASSOC);
  $boardTotalCount = $boardTotalCount["count(boardId)"]; 
  echo "* 총 <em>".$boardTotalCount."</em>건의 게시물이 등록되어 있습니다.";
?>
            </div>
            <div class="right">
              <form action="board.php" name="boardSearch" method="get">
                <fieldset>
                  <input type="search" name="searchKeyword" id="searchKeyword" class="input_style2" placeholder="검색어를 입력하세요!"
                      aria-label="search" required>
                  <select name="searchOption" id="searchOption" class="select_style1">
                    <option value="boardTitle">제목</option>
                    <option value="boardContents">내용</option>
                    <option value="youName">등록자</option>
                  </select>
                  <button type="submit" class="btn btn_style3">검색</button>
                  <a href="boardWrite.php" name="boardWrite" class="btn btn_style4 link">글쓰기</a>
                </fieldset>
              </form>
            </div>
          </div>
          <div class="board__table">
            <table>
              <colgroup>
                <col style="width: 5%">
                <col>
                <col style="width: 10%">
                <col style="width: 10%">
                <col style="width: 7%">
              </colgroup>
              <thead>
                <tr>
                  <th>번호</th>
                  <th>제목</th>
                  <th>등록자</th>
                  <th>등록일</th>
                  <th>조회수</th>
                </tr>
              </thead>
              <tbody>
                            
<?php
  if(isset($_GET["page"])) {
    $page = (int) $_GET["page"];
  } else {
    $page = 1;
  }
  $viewNum = 8;
  $viewLimit = $viewNum*$page-$viewNum;

  if(isset($_GET["searchKeyword"]) && isset($_GET["searchOption"])) {
    $searchKeyword = (string) $_GET["searchKeyword"];
    $searchOption = (string) $_GET["searchOption"];
    if($searchOption == "youName") {
      $sql = "SELECT b.boardID, b.boardTitle, m.youName, b.regTime, b.boardView, b.boardContents FROM myBoard b JOIN reMember m ON(m.memberID = b.memberID) WHERE m.{$searchOption} LIKE '%{$searchKeyword}%' ORDER BY boardID DESC LIMIT {$viewLimit}, {$viewNum}";
    } else {
      $sql = "SELECT b.boardID, b.boardTitle, m.youName, b.regTime, b.boardView, b.boardContents FROM myBoard b JOIN reMember m ON(m.memberID = b.memberID) WHERE b.{$searchOption} LIKE '%{$searchKeyword}%' ORDER BY boardID DESC LIMIT {$viewLimit}, {$viewNum}";
    }
  } else {
  // boardID, boardTitle, youName, regTime, boardView: myMember && myBoard => JOIN
    $sql = "SELECT b.boardID, b.boardTitle, m.youName, b.regTime, b.boardView FROM myBoard b JOIN reMember m ON(b.memberID = m.memberID) ORDER BY boardID DESC LIMIT {$viewLimit}, {$viewNum}";
  }
  $result = $connect -> query($sql);

  if($result) {
    $count = $result -> num_rows;

    if($count > 0) {
      for($i=1; $i<=$count; $i++) {
        $info = $result -> fetch_array(MYSQLI_ASSOC);

        echo "<tr>";
        echo "<td>".$info['boardID']."</td>";
        echo "<td><a href='boardView.php?boardID={$info['boardID']}'>".$info['boardTitle']."</a></td>";
        echo "<td>".$info['youName']."</td>";
        echo "<td>".date('Y-m-d', $info['regTime'])."</td>";
        echo "<td>".$info['boardView']."</td>";
        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='4'>게시글이 없습니다.</td></tr>";
    }
  }
?>
              </tbody>
            </table>
          </div>
          <div class="board__pages">
            <ul>
<?php
  // 총 게시글 갯수
  $sql = "SELECT count(boardId) FROM myBoard";
  $result = $connect -> query($sql);

  $boardTotalCount = $result -> fetch_array(MYSQLI_ASSOC);
  $boardTotalCount = $boardTotalCount["count(boardId)"];

  // 총 페이지 갯수
  $boardTotalCount = ceil($boardTotalCount/$viewNum);

  $pageView = 5;
  $startPage = $page - $pageView;
  $endPage = $page + $pageView;

  // 처음페이지 초기화
  if($startPage < 1) $startPage = 1;

  // 마지막페이지 초기화
  if($endPage > $boardTotalCount) $endPage = $boardTotalCount;

  // 처음
  if($page != 1) {
    echo "<li><a href='board.php?page=1'>처음으로</a></li>";
  }

  // 이전
  if($page != 1) {
    $prevPage = $page - 1;
    echo "<li><a href='board.php?page={$prevPage}'>이전</a></li>";
  }

  // 페이지
  for($i=$startPage; $i<=$endPage; $i++) {
    $active = "";
    if($i == $page) {
      $active = "active";
    }
    echo "<li class={$active}><a href='board.php?page={$i}'>{$i}</a></li>";
  }

  // 다음
  if($page != $boardTotalCount) {
    $prevPage = $page + 1;
    echo "<li><a href='board.php?page={$prevPage}'>다음</a></li>";
  }

  // 마지막
  if($page != $boardTotalCount) {
    echo "<li><a href='board.php?page={$boardTotalCount}'>마지막으로</a></li>";
  }
?>
            </ul>
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
