<?php
 // -------------------- Video 28 Loops (Theory)
  // -------------------- Video 29 For Loop
  echo "For Loop Example <br>";
  $table = 17;
  for($i=0; $i<=10; $i++){
    echo $table *$i,"<br>";
  }

  
  // -------------------- Video 30 Break and continue statements
  echo "Break Example <br>";
  
  for($i=0; $i<=10; $i++){
    echo $i,"<br>";
    if($i==5){
        echo "Loop break here<br>";
        break;
    }
 
  }

  echo "Continue Example <br>";
  
  for($i=0; $i<10; $i++){
   
    if($i==3){
        echo "Loop continue after :".$i;
        echo "<br>";
        continue;
     }

     echo $i,"<br>";
 
  }
   // -------------------- Video 31 Nested Loops

   echo "Nested Loop Example <br>";
   for($i=0; $i<3; $i++){
    for($j=0; $j<3;$j++){
        echo  $i,$j,"<br>";
    }
     
   }
 

    // -------------------- Video 32 While Loop
    echo "While Loop Example <br>";
    $i=0;
    while($i<5){
     echo  $i,"<br>";
     $i++;
      
    }
     // -------------------- Video 33do-while Loop
     echo "Do While Loop Example <br>";
     $i=0;
   do{// execute atleast once
    echo $i, "<br>";
    $i++;
   }
    while ($i==0);
  // -------------------- Video 34 Go to Statement
  echo "Goto Statement <br>";
  $i=0;
  while($i<=5){
   echo  $i,"<br>";
   $i++;
   if($i==3){
   goto jump; // may result in infinite loop; if jump statemnet is above the goto statement;
   }
}
   jump:
   echo("Jumped after : ".$i); 
   

 
 
 ?>