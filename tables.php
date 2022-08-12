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
    <h4>Text Fields</h4>
    <ul>
        <li>have a character set - paragraphs or HTML pages</li>
        <li>TINYTEXT up to 255 characters</li>
        <li>TEXT up to 65k</li>
        <li>MEDIUMTEXT up to 16M</li>
        <li>LONGTEXT up to 4G</li>
        <li>Generally not used with indexing or sorting - and only then limited to a prefix</li>
    </ul>
    <h4>Binary Types (rarely used)</h4>
    <ul>
        <li>Character = 8-32 bits of information depending on character set</li>
        <li>Byte - 8 bits of information</li>
        <li>BYTE(n) - up to 255 bytes</li>
        <li>VARBINARY(n) - up to 65k bytes</li>
        <li>Small images - data</li>
        <li>Not indexed or sorted</li>
    </ul>
    <h4>Binary Large Object (BLOB)</h4>
    <ul>
        <li>Should be used for 2-5M</li>
        <li>Large raw data, files images, word documents, PDF, movies, etc.</li>
        <li>BNo transition, indexing, or character set/li>
        <li>TINYBLOB(n) - up to 255</li>
        <li>BLOB(n) - up to 65k</li>
        <li>MEDIUMBLOB - up to 16M</li>
        <li>LONGBLOB(n) - up to 4G</li>
    </ul>
    <h4>Dates</h4>
    <ul>
        <li>TIMESTAMP - 'YYYY-MM-DD HH:MM:SS' (1970, 2037)</li>
        <li>DATETIME - 'YYYY-MM-DD HH:MM:SS'</li>
        <li>DATE - 'YYYY-MM-DD'</li>
        <li>TIME - 'HH:MM:SS'</li>
        <li>Built-in MySQL function NOW()</li>
    </ul>
    <h4>Integers</h4>
    <ul>
        <li>Numbers are very efficient, little storage, easy to process because CPU's can
            compare them often with a single instruction
        </li>
        <li>TINYINT (-128, +128)</li>
        <li>SMALLINT (-32768, +32768)</li>
        <li>INT or INTEGER (2 billion)</li>
        <li>BIGINT - (10**18 ish)</li>
    </ul>
    <h4>Floating Point Numbers</h4>
        <ul>
            <li>Floating point numbers can represent a wide range of values but accuracy is limtied</li>
            <li>FLOAT (32-bit) - 10**38 with seven digits of accuracy</li>
            <li>DOUBLE (64-bit) - 10**308 with 14 digits of accuracy</li>
        </ul>
    <h4>AUTO_INCREMENT</h4>
    <p>Often as we make multiple tables and need to JOIN them together we need an integer,
        primary key for each row so we can efficiently add a reference to a row in a table,
        in some other table as a foreign key</p>
    <h3>MYSQL Index Types</h3>
    <ul>
        <li><b>PRIMARY KEY</b> - very little space, very fast, exact match, requires no duplicates,
            extremely fast for integer fields
        </li>
        <li><b>INDEX</b> - good for individual row lookup and sorting/grouping results - works
    best with exact matches or prefix lookups can suffest HASH or BTREE</li>
        <li>FULLTEXT - costly to maintain on insert of new data, can handle substrings and the 
            LIKE clause
        </li>
    </ul>
    <h3>Hashes</h3>
    <p>A hash function is any algorithm or subroutine that maps large data sets to smaller data sets,
        called keys. For example, a single integer can serve as an index to an array (associative array).
        The values returned by a hash function are called hash values, hash codes, hash sums, checksums, or
        simple hashes.</p>
    <p>Hash functions are mostly used to accelerate table lookup or data comparison tasks such as finding items
        in a database.</p>
    <h3>B-Trees</h3>
    <p>A B-tree is a tree data structure that keeps data sorted and allows searches, sequential access, insertions, 
        and deletions in logarthmic amortized time. The B-tree is optimized ofr systems that read and write large blocks of data. It is commonly
        used in databases and file systems.</p>
    <h3>Building a Data Model</h3>
    <ul>
    <li>Drawing a picture of the data objects for our application and then figuring out how to 
        represent the obkects and their relationships
    </li>
    <li>Basic rule: don't put the same string data in twice - use a relationship instead</li>
    <li>When there is one thing in the "real world" there should be one copy of that thing in the database</li>
    </ul>

    <h3>Database Normalization (3NF)</h3>
    <ul>
        <li>Do not replicate data - reference/point at data instead</li>
        <li>Use integers for keys and references</li>
        <li>Add a special "key" column to each table which we will make references to</li>
    </ul>
    <h4>Integer Reference Pattern</h4>
    <p>We use integer columns in one table to reference rows in another table (ID column)</p>
    <h3>Three Kinds of Keys</h3>
</body>
</html>