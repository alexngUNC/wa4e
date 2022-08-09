<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="styles.css" rel="stylesheet" />
</head>
<body>
<a href="index.php">Home</a>
    <h1>Loops</h1>
    <pre>$stuff = array("name" => "Chuck", 
                        "course" => "SI664"); 
        foreach($stuff as $k => $v) { 
            echo "Key=",$k," Val=",$v,"\n"; 
        }
    </pre>
    <?php
        $stuff = array("name" => "Chuck",
                        "course" => "SI664");
        foreach($stuff as $k => $v) {
            echo "Key=",$k," Val=",$v,"<br />";
        }
    ?>

    <h2>Counted Loop Through an Array</h2>
    <pre>
    $stuff = array("Chuck", "SI664");
        for($i=0; $i < count($stuff); $i++) {
            echo "I=",$i,"Val=",$stuff[$i],"\n";
        }
    </pre>
    <?php
        $stuff = array("Chuck", "SI664");
        for($i=0; $i < count($stuff); $i++) {
            echo "I=",$i," Val=",$stuff[$i],"<br />";
        }
    ?> 
</body>
</html>
