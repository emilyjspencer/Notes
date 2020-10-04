# REST

* REST is an architectual style or design pattern for APIs, created by Roy Fielding
* It is one way to send data over HTTP
* It is considered to be the traditional approach to sending and retrieving data over HTTP
* The newer approach is through the use of GraphQL
* REST stands for Representational State Transfer - meaning that when an API is called, the server transfers a representation of 
the state of the resource to the client
* The representation of the state of the resource can be in JSON format, XML or HTML - most often JSON.
* Resources are the objects that the API can provide information about .e.g a post, a user, a photo
* Each resource has a unique identifier
* A RESTful API is one that adheres to a set of constraints
* A RESTful application allows the client to access and manipulate textual representations of the resources by using
a uniform and predefined set of stateless operations
* A RESTful web application allows the developer to take actions on the resources - the CRUD actions e.g. 
create a new resource, read/show an existing resource, update an existing resource,  delete an existing resource
* When making a call to an API, the developer must provide the following:
- an endpoint - the url for the resource (a unique identifer for the resource)
- an HTTP verb - representing the operation the developer wants the server to perform on that resource e.g.
GET, PUT, PATCH, DELETE, POST

### RESTful constraints

In order for an API to be considered RESTFul, it must adhere to six constraints:

* Stateless
* Uniform interface
* Client - server separation
* Layered system
* Cacheable
* Code on demand

* Stateless - the server doesn't remember anything about the user who is using the API  (doesn't remember any past API calls etc)
Each request contains the information the server needs to perform the request and return a response

* Uniform interface

* The request to the server must include a resource identifier - the url - endpoint
* The response from the server must contain all the information required to modify the resource
* The request must contain all the information the server needs to perform the request

The uniform interface means that requests from different clients look the same



* Client/server separation

The client and server communicate via requests and responses.
* The client (browser) makes a request
* The server is listening for requests and makes an appropriate response 

* Layered system

Between the client and the server wthere could be a multiple servers providing a security layer, a caching layer, a load-balancing layer etc


* Cacheable

The data in the response could be cacheable and contain a version number which is what makes caching possible - informing the client of which version of the data is already has. 

* Code-on-demand

The client can request code from the server, and the response will contain code.



### The limitations of REST

* Multiple requests for related resources

Getting information about a user and the post by that same user can't be combined into one request - it requires two different requests
e.g. two different HTTP GET requests - one to fetch the post object and the other to fetch the user object


* Over fetching/under fetching

It is impossible to fetch very specific data through the use of endpoints e.g.

url.com/books/:id - to get the id
url.com/books/:title - to get the title
url.com/books/:author - to get the author

Making a call to each of these three endpoints will return all the information about that particular books - you can't just fetch the author
or the title. A complete set of data is returned for that particular resource.



