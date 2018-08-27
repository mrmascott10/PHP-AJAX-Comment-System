# Disqus Inspired Comment System
A simple comment system inspired by Disqus. Dynamically working without the need for page redirection by using AJAX. Also inserting comments into a database for use later.

## How to Use
It's super easy to use this comment system. The hardeset part will be setting up the database for your site to connect to. Other than that all this code can simply be copied into your page.

### The Database
To start you will need to make a database and table for the comments to be stored in. This isn't essential and I have written another program that will just email you about the comment so that you can upload it to your website manually. You should create the database yourself with whatever name you like and then use the SQL code on the 'addComment.sql' document to set up the table exactly as it should be. You can alter this table and the way it is set up but be sure to alter the PHP code accordingly to ensure it still works.

### Database Connection
The next step is to connect the program to the database housing the table created above. The code in the 'db_connection.php' file will do this. In this file you will have to fill out the login details. If you are using this system offline then you can use a servername of 'localhost' and a username of 'root'. If you are using this online then you should know the login details.

### index.php & addComment.php
These two files don't need to be changed at all, they can simply be plugged in to the relevant folder and document. The only change you might find useful to make is to put the CSS and JS code in their respective documents.
