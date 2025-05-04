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

## Features

- Retrieves jokes from a MySQL database using a `SELECT` query
- Uses **PDO** with a `try-catch` block to handle database connection and query errors
- Sends error messages to a separate `error.html.php` page for user-friendly error handling
- Outputs data securely using `htmlspecialchars()` to protect against Cross-Site Scripting (XSS)
- Separates logic (controller) and presentation (view) using an MVC-style structure
- Displays results in the `jokes.html.php` file using `foreach` and HTML `<blockquote>` tags
