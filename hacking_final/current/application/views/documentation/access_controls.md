Access Control
=

Overview
-

Access control is the control system that helps to determine who can access which aspects of a particular web application. Most applications have a login system that allows people to create particular accounts with certain predefined privileges

Access control in this application refers to how the user logs into the system. In this particular application, this application, all login credentials are stored in a database backend. This database backend has a table for users and one for currently validated or logged in users.

Application Session Hijacking
-

This access control system could be breached through several different approaches. The first one would be a brute force attack. Since this application has no sort of built in block to keep people from guessing multiple passwords, one could theoretically create a program to attempt hundreds of thousands of password, username combinations to gain access. 

Secondly, this application shows all usernames when a bad name is put in. This is a big security flaw and a user could use this to help guess passwords and try to attempt to log in to the application.

Finally, if a user has a valid account, they could look into the cookie that is generated upon looking. They could potentially guess the session id to username relationship and attempt to infiltrate the system by changing their local session id.



