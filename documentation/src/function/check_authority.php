<?php
function check_authority($page)
{
  if ($GLOBALS['level'] == "guest") {
    if (in_array($page, $GLOBALS['guest'])) {
      return true;
    } else {
      return false;
    }
  } else if ($GLOBALS['level'] == "user") {
    if (in_array($page, $GLOBALS['user'])) {
      return true;;
    } else {
      return false;
    }
  } else if ($GLOBALS['level'] == "admin") {
    if (in_array($page, $GLOBALS['admin'])) {
      return true;;
    } else {
      return false;
    }
  }
}
