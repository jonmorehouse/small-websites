SQL Injection
=

Overview
-

SQL Injection is the practice of injecting code into forms to compromise a website. One could potentially send in an sql CRUD (Create, Read, Update, Delete) command to potentially gain access to a system. This is a hack that has been known about for many years. Most backend systems now incorporate libraries for ORM (object relational management) which essentially abstracts away pure sql from backend input. This allows for safer inputs throughout an application by a less experienced developer. 

Form escaping is one way of getting rid of the dangers of SQL escaping but sometimes it can be compromised depending upon the backend langauge's escape methods and the developers implementation of them. Some applications rely on a recursive function that will recursively remove all characters that are not whitelisted. This essentially means that only good characters, that are declared by the application, are allowed by the application can be used for sql queries. 

Application SQL Injection
-

Since this application uses CodeIgniter, most of the database logic is abstracted into views. This means that data is input in the controllers by the headers sent (post/get). This application relies on the CodeIgniter escaping system which does not necessarily allow a white list of characters. This means that unless I manually escape and cleanse the values I'm putting in, I could potentially insert a bad command and compromise the database.
