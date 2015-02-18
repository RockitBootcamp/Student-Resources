MySQL Exercises
===================
Key Objectives
* Demonstrate Select Statements
* Demonstrate Selecting fields from multiple tables
* Demonstrate Aggregate Functions (Count, Max, Sum)
* Demonstrate Sorting Data (Asc, Desc)
* Demonstrate Aliases (Table, Column)
* Demonstrate GROUP BY Keyword
* Demonstrate LIMIT Keyword
* Demonstrate Filtering Data
* Demonstrate Filtering Data with Multiple Columns

Exercise 1
-------
What is the last Region?

Exercise 2
-------
How many suppliers are there?

Exercise 3
-------
Who is the Third Shipper?

Exercise 4
-------
What City Does Employee Nancy Live in?

Exercise 5
-------
What City is Order 11061 going to?

Exercise 6
-------
What Country is Order 11056 going to?

Exercise 7
---------
What is the Title of Customer `TRAIH`?

Exercise 8
---------
What is the UnitPrice of Product 44?

Exercise 9
---------
What is the ProductName of Product 43?

Exercise 10
---------
What is the Company name that supplies Product 43?

Exercise 11
---------
What is the Region Description for Phoenix?

Exercise 12
---------
What is Employe Janet's Address?

Exercise 13
---------
What Product has the Highest Unit Price?

Exercise 14
---------
Who' the boss?

Exercise 15
---------
Who has the most Sales in terms of Number of Orders?

Exercise 16
---------
Who made the highest sales in terms of dollars? 

# Bonus
- a. Who made the highest sales in terms of dollars in 1997?
- b. What region had the most sales
- c. What region has the most suppliers
- d. Where do most customers live (What state)
- e. Which Supplier supplies the most products
- f. Which Employees are in he Southern Territory?
- g. Which Territory has the most Employees

# Answers
1. Southern  `SELECT * FROM Regions;`
2. 29  `SELECT COUNT(*) FROM suppliers;`
3. Federal Shipping  `SELECT * FROM Shippers;`
4. Seattle  `SELECT City FROM Employees WHERE FirstName = 'Nancy';`
5. Eugene  `SELECT ShipCity FROM Orders WHERE OrderId = 11061;`
6. UK  `SELECT ShipCountry FROM Orders WHERE OrderId = 11056;`
7. Sales Associate  `SELECT ContactTitle FROM Customers WHERE CustomerID='TRAIH';`
8. 19.4500  `SELECT UnitPrice FROM Products  WHERE ProductID = 44;`
9. Ipoh Coffee  `SELECT ProductName FROM Products  WHERE ProductID = 43;`
10. Leka Trading  
```sql
SELECT CompanyName 
FROM Suppliers s, Products p  
WHERE s.SupplierID = p.SupplierID 
AND p.ProductID = 43;
```
11. Westerns
```sql
SELECT RegionDescription 
FROM Region r, Territories t 
WHERE r.RegionID = t.RegionID 
AND t.TerritoryDescription = "Phoenix";
```
12. 722 Moss Bay Blvd. Kirkland, WA, 98033
```sql
SELECT Address, City, Region, PostalCode 
FROM Employees 
WHERE FirstName = "Janet";
```
13. Cte de Blaye
```sql
SELECT ProductName, unitprice 
FROM products 
ORDER BY unitprice DESC 
LIMIT 1;
```
14. Andrew Fuller Vice President, Sales
```sql
SELECT Firstname, Lastname, Title 
FROM Employees 
WHERE ReportsTo is NULL;
```
15. Margaret Peacock
```sql
SELECT 
    COUNT(o.EmployeeId) AS cnt, 
    firstname, 
    lastname
FROM 
    orders o,
    employees e
WHERE 
    o.employeeid = e.employeeid
GROUP BY e.employeeid
ORDER BY cnt DESC
LIMIT 1;
``` 
16. Margaret Peacock $250,187.45
```sql
SELECT     
  e.firstname, e.lastname,
  o.employeeId, 
  SUM(od.unitprice * od.quantity) AS subtotal 
FROM 
    orderdetails od,
    orders o,
    employees e
WHERE od.orderid = o.orderid
    and o.employeeid = e.employeeid
GROUP BY o.employeeId
ORDER BY subtotal DESC;
```
##Bonus Answers
a. Margaret Peacock with $139,477.70
```sql
SELECT FirstName, LastName, EmployeeID, SUM(unitprice * quantity) AS subtotal 
FROM orderdetails 
JOIN orders USING(OrderID) 
JOIN employees USING(EmployeeID) 
WHERE OrderDate BETWEEN '1997-01-01' AND '1997-12-31' 
GROUP BY EmployeeID 
ORDER BY subtotal DESC;
```

  
