# CMS with Doctrine ORM and MVC architecture   

A custom content management system created with raw PHP using Doctrine ORM, Composer and MVC architecture.

## Preparation

- Clone repository to www folder inside root AMPPS directory
- Create mycms(or any other name, but then update bootstrap.php file with right name) database on MySQL Workbench
- Run these commands in PHP_CMS repository folder on terminal:
    * php composer.phar install
    * vendor\bin\doctrine orm:schema-tool:update --force --dump-sql (if you are using windows CMD)
    * vendor/bin/doctrine orm:schema-tool:update --force --dump-sql (if you are using git bash / mac / linux terminals)
    *  "[OK] Database schema updated successfully!" -> This message should appear if DB was created succesfully!
    * php composer.phar dump-autoload


## Access file
    htpasswd is used to create and update the flat-files used to store usernames and password for basic authentication
    of HTTP users. If htpasswd cannot access a file, such as not being able to write to the output file or not
    being able to read the file in order to update it, it returns an error status and makes no changes.

 To access the website You need to copy .htpasswd file from PHP_CMS/admin directory into /Users/*.htpasswd(You can change directory in .htaccess folder(AuthUserFile /*******/.htpasswd etc)
 
 - **Enter this URL to browser to see CMS:  http://localhost/PHP_CMS**
 - **Enter this URL to browser to enter ADMIN area: http://localhost/PHP_CMS/admin**
 
Add a new page from admin area in order to update/delete or view it from user page. All fields are necessary!

Logging in for the first time authorization form will pop out. (Username- **benas**, password- **benas123**)
 
 
