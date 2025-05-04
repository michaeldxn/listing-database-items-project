# listing-database-items-project
Lists jokes from a MySQL database using PHP (PDO), with proper error handling and XSS protection, as part of an assignment on database interaction.

Project instructions:
1. Write and include a SELECT query
2. Catch an exception with a try-catch statement.
3. Send error output to an error html PHP file.  
4. Use a while loop with a fetch method of the PDO Statement object.  
5. Use an associative array naming the table columns in the result set. Example $row['joketext'] is the value in the joketext column of that row.  
6. Send output to jokes.html.php file that includes:  
  a. A foreach loop  
  b. Html blockquotes  
  c. Use htmlspecialchars in case code is used for cross site scripting (XXS).  
7. Output should have a result-set containing a list of all the rows (entries) returned from the query.
