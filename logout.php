<?php
  setcookie("id", "", time() - (86400 * 30), "/");
  setcookie("name", "", time() - (86400 * 30), "/");
  setcookie("year", "", time() - (86400 * 30), "/");
  setcookie("div", "", time() - (86400 * 30), "/");
  setcookie("type", "", time() - (86400 * 30), "/");
  header('Location: login');
?>