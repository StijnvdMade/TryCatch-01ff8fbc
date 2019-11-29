<?php
$nul = 0;
try {
    throw new Exception();
} catch (Exception $e) {
    print "oeps";
}
?>