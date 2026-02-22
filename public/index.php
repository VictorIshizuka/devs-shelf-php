<?php

require "../models/User.php";
require "../models/Book.php";
require "../models/Evaluation.php";

session_start();

require "../core/Flash.php";

require "../core/functions.php";

$config = require '../core/config.php';

require "../core/Database.php";

require '../core/Validation.php';

require "../core/routes.php";

?>