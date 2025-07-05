<?php
DEFINE('DBHost', 'localhost');
DEFINE('DBUser', 'root');
DEFINE('DBPass', '');
DEFINE('DBName', 'abugu');
DEFINE('DBCharset', 'utf8mb4');
DEFINE('DBCollation', 'utf8_general_ci');
DEFINE('DBPrefix', '');
// Site Name
define('SITENAME', 'ST. MARY');
// URL Root
define('URLROOT', 'http://localhost/abugu');
date_default_timezone_set("Africa/Lagos");
session_start();

// Flash message helper
function flash($name = '', $message = '', $class = 'alert alert-success')
{
  if (!empty($name)) {
    //No message, create it
    if (!empty($message) && empty($_SESSION[$name])) {
      if (!empty($_SESSION[$name])) {
        unset($_SESSION[$name]);
      }
      if (!empty($_SESSION[$name . '_class'])) {
        unset($_SESSION[$name . '_class']);
      }
      $_SESSION[$name] = $message;
      $_SESSION[$name . '_class'] = $class;
    }
    //Message exists, display it
    elseif (!empty($_SESSION[$name]) && empty($message)) {
      $class = !empty($_SESSION[$name . '_class']) ? $_SESSION[$name . '_class'] : 'success';
      echo '<div class="' . $class . '" id="msg-flash">' . $_SESSION[$name] . '</div>';
      unset($_SESSION[$name]);
      unset($_SESSION[$name . '_class']);
    }
  }
}

// Simple page redirect
function redirect($page)
{
  header('location: ' . URLROOT . '/' . $page);
}
