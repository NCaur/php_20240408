<?php
// -------------------- Video 43 Arrays (Theory)
// Ways of calling array in php:
// $users= array("Peter",29,"Admin"); // 1st method
$users1 = ["Sam", 30, "Editor"]; // 2nd method
for ($i = 0; $i < count($users1); $i++) {
    echo $users1[$i] . "<br>";
}
// -------------------- Video 44 for Each loop
foreach ($users1 as $x) {
    echo $x . "<br>";
}

// --------------------  for Each loop with break statement
foreach ($users1 as $x) {
    echo $x . "<br>";
    if ($x === 30) {
        break;
    }
}

// --------------------  for Each loop with continue statement
foreach ($users1 as $x) {
    if ($x == 30) {
        continue;
    }
    echo $x . "<br>";
}

// --------------------  for Each loop 2nd method
foreach ($users1 as $x) :
    echo $x . "<br>";
endforeach;


// -------------------- Video 45 Associative Array
$userdetails = ["Emp_name" => "abc", "age" => "29", "dept" => "IT", "role" => "Assistant Developer"];
foreach ($userdetails as $key => $data) {
    echo $key . ": " . $data . "<br>";
}

// --------------------  Associative Array with 2nd method of for each

foreach ($userdetails as $key => $data) :
    echo $key . ": " . $data . "<br>";
endforeach;

// -------------------- Video 46 Multidimensional Array
$users = [[1, "abc", "IT"], [2, "def", "Sales"], [3, "xyz", "Finance"]];
echo  " <br><b>Displaying Multi-dimensional array using foreach</b><br>";
foreach ($users as $data) {
    foreach ($data as $j) {
        echo $j . "<br>";
    }
    echo "<hr>";
}

// -------------------- Multidimensional Array using for loop
echo  " <br><b>Displaying Multi-dimensional array using for loop</b><br>";
for ($i = 0; $i < count($users); $i++) {
    for ($j = 0; $j < count($users); $j++) {
        echo $users[$i][$j] . "<br>";
    }
    echo "<hr>";
}

// -------------------- Video 47 Multidimensional Array data in tabular form
echo  " <br><b>Displaying Multi-dimensional array data in tabular form</b><br>";
echo "<table border = 1>";
foreach ($users as $data) {
    echo "<tr>";
    foreach ($data as $j) {
        echo "<td>";
        echo $j . "<br>";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
// -------------------- Video 48 Multidimensional Associative Array
$empDetails = [
    ["Name" => "ABC", "Age" => "29", "Dept" => "IT", "Role" => "Assistant Developer"],
    ["name" => "DEF", "age" => "30", "dept" => "Sales", "role" => "Sales Associate"],
    ["name" => "XYZ", "age" => "29", "dept" => "IT", "role" => "Lead"],
    ["name" => "PQR", "age" => "35", "dept" => "Finance", "role" => "Accountant"]
];
echo "<table border = 1>";
// Add a row for headings
echo "<tr>";
foreach ($empDetails[0] as $key => $value) {
    echo "<th>$key</th>";
}
echo "</tr>";
foreach ($empDetails as $key => $data) {
    echo "<tr>";
    foreach ($data as $j) {
        echo "<td>";
        echo $j . "<br>";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";

// -------------------- Video 49 Adding and removing elements in array
$names = ["Anil", "Sam", "Raj"];
echo " Array without adding elements: <br>";
foreach ($names as $name) :
    echo $name . "<br>";
endforeach;
//to add new elemnts
array_push($names, "Ram", "Yug");
echo " Array after adding elements: <br>";
foreach ($names as $name) :

    echo  $name . "<br>";
endforeach;

//to remove single element
array_pop($names);
echo " Array after removing elements: <br>";
foreach ($names as $name) :
 echo  $name . "<br>";
endforeach;

//to remove multiple elements
array_splice($names,-3);
echo " Array after removing multiple elements: <br>";
foreach ($names as $name) :
 echo  $name . "<br>";
endforeach;


