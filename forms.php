<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms</title>
</head>
<body>
<h1>Forms in PHP</h1>
<ul>
    <li>GET - parameters are placed on the URL, which is retrieved</li>
    <li>POST - the URL is retrieved and parameters are appended to the request in the HTTP connection</li>
</ul>
<h3>Using GET vs. POST</h3>
<ul>
    <li>POST is used when data is being created or modified</li>
    <li>GET is used when you are reading or searching things</li>
    <li>Web search spiders will follow GET URLs but generally not POST URLs</li>
    <li>GET URLs should be "idempotent" - the same URL should give the "same thing"
        each time you access it</li>
    <li>GET has an upper limit of the number of bytes of parameters and values (~2k)</li>
</ul>
<h3>User input (Get)</h3>
<p>Forms are created with input HTML tags.</p>
<p>Parameters:</p>
    <ul>
        <li>type - type of input/action (e.g. text, submit, checkbox)</li>
        <li>name - part of key-value pair for the server (name=value)</li>
        <li>id - for CSS styling</li>
    </ul>
<p>Key-value pair:</p>
    <form>
        <p><label for="guess">Guess:</label>
        <input type="text" name="guess" id="guess" /></p>
        <input type="submit" />
    </form>

<pre>
    $_GET:
    <?php
        print_r($_GET);
    ?>
</pre>

<h3>Post request</h3>
<p>Just add method="post" on the form.</p>

<h3>Persisting for data across requests</h3>
<pre>
$oldGuess = isset($_POST['guess']) ? $_POST['guess'] : '';
</pre>

<p>Be cautious because the user can enter text with meaning to HTML (HTML injection).</p>

<h3>Escaping user-inputted data</h3>
<p>htmlentities() - converts HTML symbols to their entity versions.)</p>

<h3>Incoming data validation</h3>
<p>Make sure all user data is present and in the correct format before proceeding.</p>
<ul>
    <li>strlen($var) > 0 - non-empty string</li>
    <li>is_numeric($var) - a number is numeric</li>
    <li>strpos($var, '@') > 0 - validating an email address by making sure the 
        @ character is in the input after the first position.</li>
</ul>
</body>
</html>