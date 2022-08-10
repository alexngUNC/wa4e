<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="index.php">Home</a>
    <h1>Relational Databases</h1>
    <p>Relational databases model data by storing rows and columns in tables. The power of the
        relational database lies in its ability to efficiently retrieve data from those tables
        and in particular where there are multiple tables and the relationships between those
        tables involved in the query.
    <h3>Terminology</h3>
    <ul>
        <li>Database - contains many tables</li>
        <li>relation (or table) - contains tuples and attributes</li>
        <li>Tuple (or row) - a set of fields that generally represent an "object" 
            like a person or a music track</li>
        <li>Attribute (also a column or field) - one of possibly many elements of data corresponding
            to the object represented by the row</li>
    </ul>
    <h2>SQL</h2>
    <p>Mac: /Applications/MAMP/Library/bin/mysql -uroot -proot</p>
    <p>Windows: c:\xampp\mysql\bin\mysql.exe -u root -p</p>
    <ul>
        <li>Structured Query Language is the language we use to issue commands
            to the database</li>
        <li>Create a table</li>
        <li>Retrieve some data</li>
        <li>Insert data</li>
        <li>Delete data</li>
    </ul>
    <h3>Insert/Update</h3>
    <p>INSERT INTO Users (name, email) VALUES ('Ted', 'ted@umich.edu');</p>
    <p> UPDATE Users SET name='Charles' WHERE email='csev@umich.edu';
    <h3>The LIMIT Clause</h3>
    <ul>
        <li>The LIMIT clause can request the first "n" rows, or the first "n" rows or some starting row
        (the first row is 0)</li>
        <li>WHERE and ORRDER BY clauses happen <b>before</b> the LIMIT is applied</li>
        <li>The limit can be a count or a starting row and count (starts from 0)</li>
    </ul>
    <p>SELECT * FROM Users ORDER BY email DESC Limit 2;</p>
    <h3>Counting Rows with SELECT</h3>
    <ul>
        <li>You can requesnt to receive the count of the rows that would be 
            retrieved instead of the rows:</li>
        </li>
    </ul>
    <p>SELECT COUNT(*) FROM Users WHERE email='csev@umich.edu';
    <h3>Common Database Systems</h3>
    <ul>
        <li>Oracle - large, commercial, enterprise-scale, very tweakable</li>
        <li>MySQL - simpler but very fast and scalable - commercial open source</li>
        <li>SQLServer - very nice - from Microsoft (also Access)</li>
        <li>Other small, free, and open source projects: HSQL SQLite, Postgress</li>
    </ul>
    <h3>Data Types</h3>
    <ul>
        <li>Text fields (small and large)</li>
        <li>Binary fields (small and large)</li>
        <li>Numeric fields</li>
        <li>AUTO_INCREMENT fields</li>
    </ul>
    <h4>String Fields</h4>
    <ul>
        <li>Understand character sets and indexable for seraching</li>
        <li>CHAR allocates entire space (faster for small strings where length is known)</li>
        <li>VARCHAR allocates variable amount of space depending on the data length (less space)</li>
    </ul>
</body>
</html>