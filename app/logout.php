<?php
require_once 'core/init.php';

$session->destroySession();
Redirect::to($_domain);
