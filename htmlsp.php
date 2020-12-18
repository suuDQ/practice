<form method="post" action="htmlsp.php">
  <input type="text" name="text">
  <input type="submit">
</form>
<?php
echo htmlspecialchars($_POST['text'],ENT_QUOTES,'UTF-8');
?>