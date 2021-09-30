# Bondstein
PHP
  1. A string = “(‘apple’,’orange’,’banana’), ”
    a. Remove the trailing “, ”
    b. Then add “;”
  2. How can we modify the value of a constant?
  3. Explain how you can pass the variable by the navigation between the pages in PHP?
  4. How to get a data from a php variable into javascript variable?
  5. How to receive or extract values from a http request?
  6. How to submit a form and what happens after that submitting a form?
  7. Definition
    a. Session
    b. AJAX?
    c. SQL injection?
    d. Dynamic websites?
  8. How to read contents from a file and write contents in a file.
  9. Have an array of [first_name, last_name, age]
    a. $array = [
          ['Joe', 'joe@hmail.com', 24],
          ['Doe', 'doe@hmail.com', 25],
          ['Dane', 'dane@hmail.com', 20]
    ];
    b. Print this array in html table
    
MySQL
  1. What is Relational Database Management System (RDBMS)?
  2. A table (person) of columns (name, dob, city)
  a. Find total number of person per city
  b. Where city name starts with a letter ‘D’
  3. Tables; person (person_id, person_name, person_dob, salary_per_annum) and person_address
     (address_id, person_id, address_line, city)
    a. List the names of persons who lives in the city ‘Manhattan’ and salary is more than
       40,000 per year## Authenticate User
       
### Task 1.
 Create a database table for user information, where user name, user login id and user password will
  be stored. Note that password will be stored using the simple encryption (e.g. MD5) method.
 Next create a login page, where user will insert their ‘Login ID’ and ‘Password’. System will check
  the authentication against the user’s ‘Login ID’ and ‘Password’.
 On success, provide the home page to the user, and On failure, display a failure message.

### Task 2
 Add another column ‘UserCategory’ to the user table, value for that column will be either ‘Admin’
  or ‘Customer’.
 Create a simple php page, where a new user can be made.
 Create a button on the home page, which will take the user to this User creation page. And this
  button and the page will be accessible only to the user who are admin.
