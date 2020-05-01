# MongoDB

# Notes

* To install mongoDB:

```html
brew tap mongodb/brew

brew install mongodb-community@4.2
```

* to run mongodb:

```html
brew services start mongodb-community@4.2
```

* to stop mongodb:

```html
brew services stop mongodb-community@4.2
```

* to restart mongodb:

```html
brew services restart mongodb-community
``` 


Mongod process - refers to the running of Mongodb

* To run MongoDB (i.e. the mongod process) manually as a background process, issue the following:
```html
mongod --config /usr/local/etc/mongod.conf --fork
```


**Mongo commands**

* **insert**
* **find**
* **update**
* **remove**
* **mongod**
* **mongo**
* **help**
* **show dbs**

* To open the mongo shell, type:

```html
mongo
```
* This shell is similar to the JS concole 

**help** - returns the basic features of mongo

**show dbs** - returns all databases, like 'l' in postgres does

* Mongodb's default databases: admin and local 

* To create a database:

```html
use database_name
```

* To use an already existing database: 
```html
use database_name
```
example:
create a database called books
```html
use books
```

* To add data/items/resources to the database, we create collections
e.g. historical fictions

```html
db.fiction.insert({title: "Frankenstein", author: "Mary Shelley"})
```
* To check that the collection was indeed created:

```html
show collections
```

* To return data from the database, use **find()**

```html
db.fiction.find()
{ "_id" : ObjectId("5eac8239ba5368267cbf2ff3"), "title" : "Frankenstein", "author" : "Mary Shelley" }
```
**find()** will return all data

* to return specific data/items/resources, we can pass arguments to find()

```html
db.fiction.find({title: "Frankenstein"})
```
```html
// { "_id" : ObjectId("5eac8357ba5368267cbf2ff4"), "title" : "Frankenstein", "author" : "Mary Shelley" }
```

* To update data, use **update():**

```html
> db.fiction.insert({title: "Wonder", author: "R.J.Palacio"})
WriteResult({ "nInserted" : 1 })
> db.fiction.insert({title: "Frankenstein", author: "Mary Shelley"})
WriteResult({ "nInserted" : 1 })
> db.fiction.update({title: "Frankenstein"}, {$set: {title: "The Last Man"}})
WriteResult({ "nMatched" : 1, "nUpserted" : 0, "nModified" : 1 })
> db.fiction.find()
{ "_id" : ObjectId("5eac8b59bbe91fccfd7d150b"), "title" : "Wonder", "author" : "R.J.Palacio" }
{ "_id" : ObjectId("5eac8b72bbe91fccfd7d150c"), "title" : "The Last Man", "author" : "Mary Shelley" }
> 
```

* First arg = data to select
* Second arg = what we want to change the data to

* To delete data, use **remove**:

```html
> db.fiction.remove({title: "The Last Man"})
WriteResult({ "nRemoved" : 1 })
> db.fiction.find()
{ "_id" : ObjectId("5eac8b59bbe91fccfd7d150b"), "title" : "Wonder", "author" : "R.J.Palacio" }
```
