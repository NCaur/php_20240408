<?php
//die: stop code execution
//exit:stop execution
//return:stop code execution;limited use; get the output of code
//Examples

$a=10;$b=20;
echo ($a-$b)."<br>";
//die('Stop here');//stop execution here;also helpful for debugging;works with and without comments
echo ($a+$b)."<br>";
exit;//taken from c;php embeds C and PERL as base, hence 2 ways to stop execution;works with and without comments
echo ($a*$b)."<br>";
//return works same;however it can be used within functions and stop execution of function in whichever function we use it.
?>