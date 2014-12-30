# MySQL Objectives

## Database Design Basics
Identifier   | Objectives
-------------|------------
MySQL: 1.1   | Explain table structure:
             | &bull; rows (records)
             | &bull; columns (fields)
             | &bull; primary-keys
             | &bull; Every table must have a column that has a unique value for every row
MySQL: 1.2   | Explain/Illustrate ERD diagrams
MySQL: 1.3   | Explain common data-types:
             | &bull; `int`
             | &bull; `varchar`
             | &bull; `text`
             | &bull; `date` "YYYY-MM-DD"
             | &bull; `datetime` "YYYY-MM-DD HH:MM:SS"
MySQL: 1.4   | Explain foreign keys (table linking)
MySQL: 1.5   | Explain Signed vs Unsigned numeric values

## SQL Basics
Identifier   | Objectives
-------------|------------
MySQL: 2.1   | Demonstrate use of MySQL's command line client
MySQL: 2.2   | Use built-in functions:
             | &bull; `NOW()`
             | &bull; `CURDATE()`
             | &bull; `SHA1()`
             | &bull; `PASSWORD()`
MySQL: 2.3   | Use `CREATE TABLE` syntax
MySQL: 2.4   | Use `INSERT` syntax
MySQL: 2.5   | Use `SELECT` syntax
MySQL: 2.6   | Use `WHERE` syntax
MySQL: 2.7   | Use `UPDATE` syntax
MySQL: 2.7   | Use `DELETE` syntax

## Normalization
Identifier   | Objectives
-------------|------------
MySQL: 3.1   | Explain basic normalization concepts:
             | &bull; Eliminate duplicative columns from the same table.
             | &bull; Reduce Redundancies
             | &bull; Create separate tables for each group of related data and identify each row with a unique column or set of columns (the primary key).
             | &bull; Create relationships between these new tables and their predecessors through the use of foreign keys.
             | &bull; Don't store derived data such as "age"
MySQL: 3.2   | Explain Anomalies:
             | &bull; Insert Anomaly
             | &bull; Delete Anomaly
             | &bull; Update Anomaly
MySQL: 3.3   | Explain table partitioning (abstractions)
MySQL: 3.4   | Explain Composite Primary Keys

## SQL Joins I
Identifier   | Objectives
-------------|------------
MySQL: 4.1   | Demonstrate joining of two tables
             | &bull; Using comma delimited syntax
MySQL: 4.2   | Use "many-to-many" joins and use a join-table
MySQL: 4.3   | Use `AS` syntax to Alias

## SQL Joins II
Identifier   | Objectives
-------------|------------
MySQL: 5.1   | Demonstrate alternative syntax for joins
             | &bull; Using `JOIN` and `USING` syntax
MySQL: 5.2   | Describe the purpose of Left Joins
MySQL: 5.3   | Use `LEFT JOIN` syntax
MySQL: 5.4   | Use `ON()` syntax

## Grouping
Identifier   | Objectives
-------------|------------
MySQL: 6.1   | Explain Grouping
MySQL: 6.2   | Use `GROUP BY` syntax
MySQL: 6.3   | Use grouping functions:
             | &bull; `COUNT()`
             | &bull; `SUM()`
             | &bull; `MAX()`
             | &bull; `MIN()`
MySQL: 6.4   | Explain the `DISTINCT` keyword
MySQL: 6.5   | Use `HAVING` syntax

## Sub Queries
Identifier   | Objectives
-------------|------------
MySQL: 7.1   | Demonstrate Sub Queries
MySQL: 7.2   | Use `IN()` syntax
