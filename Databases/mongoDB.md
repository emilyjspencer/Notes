# Mongodb

# Notes

* To install mongodb:

```html
brew tap mongodb/brew

brew install mongodb-community@4.2
```

* to run mongodb:

```html
brew services start mongodb-community@4.2
```

* to stop mongoldb:

```html
brew services stop mongodb-community@4.2
```


Mongod process - refers to the running of Mongodb

To run MongoDB (i.e. the mongod process) manually as a background process, issue the following:
copy
copied
mongod --config /usr/local/etc/mongod.conf --fork


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
use database name
```
example:
create a database called books
```html
use books
```

* To add things to the database, we create collections
e.g. historical fictions

```html
db.fiction.insert({title: "Frankenstein", author: "Mary Shelley"})
```
* T check that the collection was indeed created:

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