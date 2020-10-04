# REST

* REST is an architectual style or design pattern for APIs, created by Roy Fielding
* It is one way to send data over HTTP
* It is considered to be the traditional approach to sending and retrieving data over HTTP
* The newer approach is through the use of GraphQL whose philosophy is quite different to that of REST's.
* REST stands for Representational State Transfer - meaning that when an API is called, the server transfers a representation of 
the state of the resource to the client
* REST is therefore said to be resource-based
* The representation of the state of the resource can be in JSON format, XML or HTML - most often JSON.
* Resources are the objects that the API can provide information about .e.g a post, a user, a photo
* Each resource has its own address which identifies it e.g.
/users/20 - a unique identifier
* All operations done to the resource are done with HTTP requests to its URL
* The action depends on the HTTP method used
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

While this resource-based approach works in a lot of cases, there are other situations where it would be preferable
to use GraphQL, because the use of REST can be awkward:

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


<hr>

# GraphQL

GraphQL is an API design architecture, developed by Facebook but with a different approach to REST which is
much more flexible.
* It has become a popular means of communication between web applications server
* The GraphQL philosophy is very different from the resource-based approach of REST.
* A GraphQL server can help us to overcome the challenges associated with a REST-based approach
* If there were a situation where the developer were using a REST API, and would have
to make multiple HTTP requests from the browser before they had all the data that they 
needed, using a GraphQL server would be better.
* The main diference between REST and GraphQL is that GraphQL doesn't deal with resources.
* Everything with GraphQL is regarded as a graph and is thus connected, meaning that the developer
can tailor the request (query) to their exact needs by using GraphQL query language and 
describing what they'd like to get as an answer.
* Different entities can be combined in one query and it is possible to specify which attributes
should be included in the response on every level e.g.

```

{
     post(id: 1) {
        title
        user {
            name
            email
            courses {
                title
            }
        }
     }
}
```


The main principle of GraphQL is that the code in the browser forms a query describing the 
data wanted and sends it to the API with an HTTP POSt request
* Unlike REST, all GraphQL queries are sent to the same address and their type is always POST

```

query FetchBlogQuery {
  user(username: "lucylas) {
    followedUsers {
      blogs {
        comments {
          user {
            blogs {
              title
            }
          }
        }
      }
    }
  }
}

```


GraphQL applications have a schema which defines the query fields e.g. String - a scalar type
* These schemas describe what queries the client can send to the server, what kinds of parameters
the queries can have, and the kind of data that the queries return
* ! can be added to a field to show that the fields must be given a value
* ID fields are strings, but they are unique
* Almost all GraphQL schemas describe a Query, which explains what kind of queries can be made to the 
API
```
type Person {
  name: String!
  phone: String
  street: String!
  city: String!
  id: ID! 
}

type Query {
  personCount: Int!
  allPeople: [Person!]!
  findPerson(name: String!): Person
}
```

In the above query - personCount returns an integer
allPeople - returns a list of people
findPerson - returns a Person object


A query:
```
query {
  personCount
}
```

A response:
```
{
  "data": {
    "personCount": 3
  }
}
```

Another query:
```
query {
  allPeople{
    name
    phone
  }
}
```

Reponse:
```
  "data": {
    "allPeople": [
      {
        "name": "Giselle Bone",
        "phone": "12346583838"
      },
      {
        "name": "Benjamin Bing",
        "phone": "2737729439483"
      },
      {
        "name": "Amal Rooney",
        "phone": null
      }
    ]
  }
}
```

There is a direct link betwen a GraphQL query and the returned JSON object.
* The query can describe what sort of data it wants as a response
* This is different to the resource-based approach of REST, whereby the type of request and the URL
don't describe the data that is expected to be returns






