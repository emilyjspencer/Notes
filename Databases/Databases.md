# Databases

* A database forms the persistence layer
* Two types of database: relational and non-relational or SQL or noSQL
* SQL databases are tabular and flat. Less flexible
* noSQL don't have any relations. Things can be nested - not flat. Flexible structure


* Relational databases are made up of multiple tables.
* Column names are called attributes

* Tables can be linked using a foreign-key

* An example of this could be a **user_id** column in a posts table, which makes the link between a particular user in a users table.

* The id columns in the users table would be automatically generated.

* CRUD operations - create read update delete
Refer to the four ways to interact with data. 

* A query language is required to talk to the database for the application to perform CRUD operations.
The most commonly used language is **SQL.**

Database management systems that use SQL include: PostGreSQL Microsoft SQL Server Oracle

### Active Record

**Rails** uses an **ORM** called **Active Record** to communicate between the rails code and the database
* ORM stands for **Object Relational Mapper**
* Using an ORM means that we don't have to construct SQL queries ourselves to perform operations with the database
Ruby code gets translated into SQL queries

### SQL
SQL stands for **Structured Query Language**
SQL is used to store, manipulate and retrieve data in a database
Single quotes (' ') must be used with SQL
SQL statements end with a ;
SQL can:

* execute queries against a database
* retrieve data from a database
* insert records in a database
* update records in a database
* delete records from a database
* create new databases
* create new tables in a database
* create stored procedures in a database
* create views in a database
* set permissions on tables, procedures, and views

### Relational Database Management Systems

* The data in **RDBMS** is stored in database objects called tables. A table is a collection of related data entries and it consists of columns and rows. A row is also called a 
record - which is a horizontal entity in a table

* SQL keywords are **NOT** case sensitive

**SQL Operations**

**SELECT** - extracts data from a database
**UPDATE** - updates data in a database
**DELETE** - deletes data from a database
**INSERT INTO** - inserts new data into a database
**CREATE DATABASE** - creates a new database
**ALTER DATABASE** - modifies a database
**CREATE TABLE** - creates a new table
**ALTER TABLE** - modifies a table
**DROP TABLE** - deletes a table
**CREATE INDEX** - creates an index (search key)
**DROP INDEX** - deletes an index
**SELECT DISTINCT** - only shows one from all duplicate values

**WHERE** clause is used to filter records.

* Used to extract only those records that fulfill a specified condition.
* Operators used with WHERE clause:

```html
SELECT * FROM Customers
WHERE Country='Canada';
```
```html
SELECT * FROM Customers
WHERE City = 'Berlin';
```

**BETWEEN** Between a certain range 
**LIKE** Search for a pattern IN To specify multiple possible values for a column

**WHERE** can be used with AND, OR, and NOT AND and OR used to filter records based on more than one condition:

AND shows a record if all the conditions separated by AND are TRUE. OR shows a record if any of the conditions separated by OR is TRUE. NOT shows a record if the condition(s) is NOT TRUE.

**Use of AND**

```html
SELECT
 * FROM Customers
WHERE City = 'Berlin'
AND Item = 'Lamp';
```

**Use of OR**

```html
SELECT * FROM Customers
WHERE City = 'Paris'
OR City 'NYC';
```

**Use of NOT**

```html
SELECT * FROM Customers
WHERE NOT Country='Germany';
```

**ORDER BY**

Order By is used to sort results in asc/ desc order ASC is the default DESC to sort in descending order

```html
SELECT * FROM Customers
ORDER BY Country;
```
```html
SELECT * FROM Customers
ORDER BY Country DESC;
```

* **Order by several columns:**

```html
SELECT * FROM Customers
ORDER BY Country, Item;
```

* **INSERT INTO** - to insert data into the database

```html
INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country)
VALUES ('Helen','Helen Byrne','Worple Road','Wimbledon','SW19','England');
```

* **NULL**

* Insert a new record into a table without adding a value to the field by using NULL

* **Using IS NULL**

```html
SELECT CustomerName, Item, Country
FROM Customers
WHERE Item IS NULL;
```

* **Using IS NOT NULL**

```html
SELECT CustomerName, Item, Country
FROM Customers
WHERE Item IS NOT NULL;
```

* **Edit records using UPDATE**

Change the details of the customer in the table whose id is 5:

```html
UPDATE Customers
SET CustomerName = 'Emily', City= 'London'
WHERE CustomerID = 5;
```

* **Edit multiple records using UPDATE and WHERE**

Sets the name of all Japanese-based customers to Ayako

```html
UPDATE Customers
SET CustomerName='Ayako'
WHERE Country='Japan';
```

* **DELETE records from tables using the DELETE keyword**

Delete ALL records:

```html
DELETE FROM Customers;
Delete specific records:
```

Delete the customer with name of Minnie Mouse

```html
DELETE FROM Customers WHERE CustomerName='Minnie Mouse';
```

* **LIKE operator** 

* **LIKE** is used in a **WHERE** clause to search for a **specified** pattern in a column.

* There are two wildcards often used in conjunction with the LIKE operator:

* % - The percent sign represents zero, one, or multiple characters _ - The underscore represents a single character

**SQL Injection** - web hacking technique
