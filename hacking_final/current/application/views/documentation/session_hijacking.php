<h1>Session Hijacking</h1>

<h2>Overview</h2>

<p>Sessions are an easy way that applications can keep track of who is logged in and where they are logged in at. A good application will have a hard encryption method on the session id, sometimes generating it from a time string that is encrypted with a hashing function such as mcrypt or a SALT SHA1 combination etc. When a user logs in, they should have a limited number of times to block an application before being locked out of the system. When they do login, this session id should be stored in a database and stored in the user's header. Whenever the user requests something from the server, all requests should be validated by ensuring that this session id is not only valid but validated and logged in with the system. </p>

<h2>Application Session Hijacking</h2>

<p>In this particular application, I am using md5 encryption on the username to generate the session id and state that a user is logged in. I essentially store the username in an md5 encrypted form.</p>

<p>A user could easily hack this by using tools online to decrypt the cookie's session id. For instance, if the user had a valid login, they could login, capture the session id that is linked to their account. By going through the popular hashing functions, they could attempt to decrypt the session id into something readable. In this particular application, since the application just hashes the username as the session id, they could easily change their cookie to the hashed version of the username they wanted.</p>
