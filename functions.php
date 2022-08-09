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
        <li>Call by value (the variable within the function is an "alias" to the actual variable, 
            which is a copy of the actual variable in the function call) - the passed in variable isn't changed
        <li>Call by reference with & (change argument)</li>
    </ul>
    <h3>Including code from other files</h3>
        <pre>
            require_once "nav.php"
        </pre>
    <h3>Greet function</h3>
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
    <h3>Optional arguments</h3>
        <pre>
            function howdy($lang='en') {
                if ( $lang == 'en') return "Howdy!";
                if ( $lang == 'rus') return "Привет!";
            }

            echo howdy();
            echo howdy('rus');
        </pre>
        <?php
        function howdy($lang='en') {
            if ( $lang == 'en') return "Howdy!";
            if ( $lang == 'rus') return "Привет!";
        }
        
        echo howdy().'<br />';
        echo howdy('rus');
        ?>
</body>
</html>