Select all the names of users who are students

```sql
SELECT first_name
FROM user
JOIN student USING (user_id)
```

Select all the emails of users who are instructors

```sql
SELECT email
FROM user
JOIN instructor USING (user_id)
```

Select all the users who are students who have a user_id bigger than 2

```sql
SELECT *
FROM user
JOIN instructor USING (user_id)
WHERE user_id > 2
```

Select all the users who are taking classes

```sql
SELECT *
FROM user
JOIN user_course USING (user_id)
```

Select the names that each student is taking

```sql
SELECT
  user.first_name, 
  course.name AS course_name
FROM user
JOIN user_course USING (user_id)
JOIN course USING (course_id)
```

Select the names of each student taking programming

```sql
SELECT user.first_name
FROM user
JOIN user_course USING (user_id)
JOIN course USING (course_id)
WHERE course_id = 2
```

