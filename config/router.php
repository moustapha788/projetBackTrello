<?php

/***
 *! LE ROUTEUR ( Il  permet de définir les routes constituées d'informations qu'il commnuniquent au CONTROLLER )
***/

if (isset($_REQUEST['controller'])) {
    if ($_REQUEST['controller'] === "task") {
        require_once(PATH_SRC . 'controllers' . DIRECTORY_SEPARATOR . 'task.controllers.php');
    } else {
        
    }
} else {
    require_once(PATH_SRC . 'controllers' . DIRECTORY_SEPARATOR . 'task.controllers.php');
}
