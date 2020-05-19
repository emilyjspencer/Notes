# Mongoose

* Mongoose is an ODM (Object Document Mapper) for MongoDB
which can be used to interact with a database, rather than using a query language
* It is similar to an ORM(Object-Relational Mapper) that would be used with a relational 
database like PostgreSQL.
* Both - ODMs and ORMs exist to make developers' lives easier by providing
built-in structure and methods 
* It represents the website’s data as JavaScript objects, which are then mapped on to the underlying database
* It acts as a frontend to MongoDB and provides a straightforward and schema-based solution
to model application data 
* MongoDB and Mongoose are commonly used together because the document storage and 
query system looks very much like JSON 

**Mongoose schema and models**

* Each Mongoose schema maps to a specific MongoDB collection
* A 'collection' is akin to tables and rows in relational databases
* Model instances represent MongoDB documents, which can be saved and retrieved from the database
* Document creation and retrieval is handled by a model

* Install Mongoose

```html
npm install mongoose
```

**Connecting to MongoDB**

* Mongoose requires a connection to a MongoDB database.
* Use mongoose.connection() to connect to a locally hosted database

```html
var mongoose = require('mongoose');

// Establish connection
var mongoDB = 'mongodb://127.0.0.1/database_name';
mongoose.connect(mongoDB, { useNewUrlParser: true});

// Get the default connection
var db = mongoose.connection;

// Bind connection to error event (to get notification of connection errors)
db.on('error', console.error.bind(console, 'MongoDB connection error: '));

``` 
**Defining and creating models**

* Models are defined using the Schema interface
* The Schema allows developers to define the fields stored in each document along with their validation requirements
* Schemas are compiled into models using the **mongoose.model()** method
* Once the models have been created, CRUD actions can be performed on them 


**Defining schema**

```html
const mongoose = require(‘mongoose’);
// define a schema
const Schema = mongoose.Schema

let bookSchema = new Schema({
  title: {
      type: String
  },
    author: String
}, 
  genre: String
}
}, {
    collection: 'books'
})

module.exports = mongoose.model('Book;, bookSchema)
```
The above defines the schema for the Book Model 
