<?php
    setcookie("username", "", time() - 3600);

    if (!isset($_COOKIE["username"])) {
        echo "Cookie 'username' deleted successfully.";
    } else {
        echo "Cookie still exists: " . $_COOKIE["username"];
    }
    echo "Program by Aryan(0221BCA161)";
?>
