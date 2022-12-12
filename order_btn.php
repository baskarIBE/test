<?php
if(isset($_SESSION['email']))
{
  echo "<script>
  function reply_click(clicked_id)
  {
  window.location.href='user-history.php';
  }
  </script> ";
}
else
{
  echo "<script>
  window.location.href='user.php';
  </script>";
}
?>