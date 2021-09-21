<!-- take 2 different arrays and put them next to each other -->
<!DOCTYPE html>
<html>
    <head>
        <style>
            table, th, td {
            border: 2px solid black;
            border-collapse: collapse;
            }
            th, td {
            padding: 5px;
            text-align: left;
            }
        </style>
    </head>
<body>

<?php

$questions = array(
    "Which country gifted the Statue of Liberty to the US?", 
    "What is the rarest blood type?", 
    "What sport does Cristiano Ronaldo play?",
    "What does Na stand for on the periodic table?",
    "How many points are a touchdown worth?",
    "Which fictional city is the home of Batman?"
);

$answers = array(
    "France",
    "AB-Negative",
    "Soccer/football",
    "Sodium",
    "6",
    "Gotham City"
);

echo "<table class='sample-questions'>";

foreach($answers as $dato2 => $dato1)
{
    echo "<tr>";
        echo "<th><b>".$questions[$dato2].": </b></th>";
        echo "<td>".$dato1."</td>";
    echo "</tr>"; 
};

echo "</table>";

?>

</body>
</html>
