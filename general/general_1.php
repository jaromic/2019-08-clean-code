<input type="text" id="username" name="username"
    <?php

    if (isset($_GET['username'])) {
        echo "value='{$_GET['username']}'";
    }
    ?>>

<?php
echo "<script>
var username = document.getElementById('username').value;
console.log('username is: '+username);
</script>";