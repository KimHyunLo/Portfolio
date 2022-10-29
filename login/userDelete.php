<?php
  include "../connect/connect.php";
  include "../connect/session.php";

  $memberID = $_GET["memberID"];
  $memberID = $connect -> real_escape_string($memberID);

  $sql = "DELETE FROM reMember WHERE memberID = {$memberID}";
  $connect -> query($sql);
?>

<script>
  location.href="../index.php";
</script>