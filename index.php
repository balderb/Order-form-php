<!DOCTYPE html>
<html>

<body>

<form method="GET">
	<input type= "hidden" name="name" value="Daniel">
	<button type="submit"> PRESS ME! </button>
</form>

</body>
</html>

<?php

$x = 5;

function something() {
    $y = 10;
    echo $GLOBALS['x'];
}

something();


