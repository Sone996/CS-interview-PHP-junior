<?php 
    session_start();

    function destroy()
    {
        @session_destroy();

        header ("Location: ../Pages/main.php");
    }
    destroy();
?>