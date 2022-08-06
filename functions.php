<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functions.php</title>
</head>
<body>
    <h1>Functions</h1>
    <ul>
        <li>Do not start with $</li>
        <li>Start with letter or underscore - consist of letters, numbers, and underscores (_)</li>
        <li>Case does <em>not</em> matter (do <strong>NOT</strong> take advantage of this)</li>
    </ul>
    <h2>Greet function</h2>
        <pre>
        function greet() {
            print "Hello\n";
        }

        greet();
        </pre>
        <?php
        function greet() {
            print "Hello\n";
        }

        greet();
        ?>
</body>
</html>