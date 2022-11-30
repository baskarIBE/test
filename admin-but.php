<?php
if(isset($_SESSION['ad_email']))
{
  echo "<script>
  function reply_click(clicked_id)
  {
  window.location.href='admin.php';
  }
  </script> ";
}
else
{
  echo "<script>
  window.location.href='ad-login.php';
  </script>";
}
?>