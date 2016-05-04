<?php

$output = shell_exec("git fetch --all; git reset --hard origin/stable;");

?>

<pre>
<?=$output?>
</pre>