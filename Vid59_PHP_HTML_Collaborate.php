<html>
    <head>
        <title>Calling function on click</title>
    </head>
    <body>
        <!-- action can be empty if bothphp+html in 1 file. -->
        <form action="" method="get">
<button name="button" value="btn1">Call Button</button>

        </form>
    </body>
</html>
<?php
if(isset($_REQUEST['button'])){
click();
}

function click(){
    echo "Function Called on button click";
}
?>