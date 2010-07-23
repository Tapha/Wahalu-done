<?php

define("APPLICATION_PATH", realpath('../classes/'));
define("CURRENT_PATH", getcwd());

$paths = array(APPLICATION_PATH, CURRENT_PATH);

set_include_path(implode($paths, PATH_SEPARATOR));