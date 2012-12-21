<h1>Jon Morehouse</h1>

<h1>Overview ITP 425 Final Project </h1>

<h2>Basic Login System</h2>

<p>For this project I built a basic web page that is connected to a database backend. The idea behind this application is to explain how some security flaws work and show some of the ways that modern web-backend frameworks help to alleviate some of the risks associated with web-software.</p>

<p>I used the popular PHP framework CodeIgniter for this project to help show how a mainstream framework can take out alot of the security flaws in a website, but still keeping them open to many threats such as access control hacking, session hijacking and sql injection.</p>

<p>I am going to display how access control hacking, sql injection and session hijacking could be used in this application to help show how such a framework could be compromised</p>

<h2>Quick Introduction to CodeIgniter</h2>

<p>CodeIgniter is a MVC (Model View Controller) framework built on php. It has many features built in such as session encryption, sql escaping and many other security features.</p>

<h2>Components</h2>

<ul>
<li><p>Controllers:</p>

<ul>
<li>Linked to urls</li>
<li>Links uris to functions to display php view code</li>
<li>Responsible for calling the proper models for certain uris</li>
<li>Located in the application/controllers/ directory</li>
</ul></li>
<li><p>Views:</p>

<ul>
<li>Responsible for recieving data and templating this out into html for the site</li>
<li>Located in the application/views directory</li>
</ul></li>
<li><p>Models:</p>

<ul>
<li>Responsible for handling database crud operations</li>
<li>Located in the application/models section</li>
</ul></li>
</ul>
