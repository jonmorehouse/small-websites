Jon Morehouse
=

Overview ITP 425 Final Project 
=

Basic Login System
-

For this project I built a basic web page that is connected to a database backend. The idea behind this application is to explain how some security flaws work and show some of the ways that modern web-backend frameworks help to alleviate some of the risks associated with web-software.

I used the popular PHP framework CodeIgniter for this project to help show how a mainstream framework can take out alot of the security flaws in a website, but still keeping them open to many threats such as access control hacking, session hijacking and sql injection.

I am going to display how access control hacking, sql injection and session hijacking could be used in this application to help show how such a framework could be compromised

Quick Introduction to CodeIgniter
-

CodeIgniter is a MVC (Model View Controller) framework built on php. It has many features built in such as session encryption, sql escaping and many other security features.

Components
-

-	Controllers:
	-	Linked to urls
	-	Links uris to functions to display php view code
	-	Responsible for calling the proper models for certain uris
	-	Located in the application/controllers/ directory

-	Views:
	-	Responsible for recieving data and templating this out into html for the site
	-	Located in the application/views directory

-	Models:
	-	Responsible for handling database crud operations
	-	Located in the application/models section

