<?php

    session_start();

    session_unset();

    session_destroy();

    echo"Session telah dihapus. <a href='set_session.php'>Set ulang Session</a>";

?>