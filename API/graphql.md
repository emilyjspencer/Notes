# GraphQL

GraphQL is an API design architecture, developed by Facebook but with a different approach to REST which is
much more flexible.
* It has become a popular means of communication between web applications and servers
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


Creating a project:

```
npm init
```

```
npm install apollo-server graphql
```

Save the file with an extension of .js

Create a new instance of Apollo Server which is passed two parameters:
- typeDefs - contains the GraphQL schema
- sn object which contains the resolvers of the server


These are the code which define how GraphQL queries are responded to

```
npm filename.js
```

The above starts a GraphQL-playground, at http://localhost:4000/graphql. 
* Useful for making queries to the server.

If I enter the following query:

```
query {
  allPeople{
    name
    phone
  }
}# Write your query or mutation here
```

I get the following back:
![apollo](apollo.png)