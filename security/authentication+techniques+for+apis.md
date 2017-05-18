
Authentication Techniques for APIs 

# HTTP Basic Auth 
* user name and password with every request

# Stateless Session Cookie 
* Signed or Encrypted cookie with user information. 
* Usally handled by web framework.

# JWT ( Json Web Token ) 
* Signed or encrypted user info in an encoded json string. 
* Handled by well tested libraries in every language. (?)

# Stateful Session Cookie 
* Standard session cookie, supported by most web frameworks and browsers

# Random Token 
* A Strong, secure random token that does not have any data in it, and cannot be guessed. 
* This is equivalent to session id.

# Full Request Signature OAuth 
* Popularized by AWS authentication.

#OAuth 
* Only Use this when you have three parties - You, Your users and third party app developers that need your user data. 
* If you don't have third party developers, OAuth is overkill.

https://docs.google.com/spreadsheets/d/1tAX5ZJzluilhoYKjra-uHbMCZraaQkqIHl3RIQ8mVkM/htmlview?sle=true#gid=0
