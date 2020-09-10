UML

* UML is a standard language for specifying, visualizing, constructing & documenting the components of software systems
* It is a pictorial language used to make software blueprints
* OOP concepts existed long before the emergence of UML. At that point, there were no standard methodologies to organize and consolidate the OOP developments
Until UML
* UML diagrams aren't only used by developers
* The three main building blocks of UML are:
* Structural
* Relationship
* Diagrams

### Structural - define the static part of the model - the physical and conceptual elements

- class - a set of objects having similar responsibilities(methods)
- Interface - the set of operations/methods/functions defined on a class - which specify the responsibilities of a class
- Collaboration - defines an interaction between elements
- Use-case - represents a set of actions performed by a system for a specific goal
- Component - describes the physical part of a system
- Node - can be defined as a physical element that exists at run time

### Behavioural  - consists of the dynamic part of UML modles

- Interaction - defined as behaviour that consists of a group of messages exchanged among elements to accomplish a specific task
- State machine - useful when the state of an object in its lifecycle is importnat
It defines the sequence of states can object goes through in response to events
Events are external factors responsible for state change

### Grouping things - package

### Annotational things - can be defined as a mechanism to capture remark,s descriptions and comments of UML model elements


Relationship - another most important building block of UML
It shows how the elements are associated with each other and this association describes the functionality of an application

There are four kinds of relationships

- Dependency - a relationship between two things in which change in one element affects the other - when one class depends on another

- Association - a set of links that connects the elements of a UML model. Also describes those involved in the relationship

- Generalization - a relationship which connects a specialized element with a generalized element - inheritance relationship

- Realization - a relationship in which two elements are connected. One element describes some responsibility, which is not implemented and the other one implements them. This relationship exists in case of interfaces


Some types of UML diagram:

* class diagram
* object diagram
* use case diagram
* sequence diagram
* collaboration diaram
* activity diagram
* statechart diagram
* deployment diagram
* component diagram

<hr>

* UML has become a standard modeling language because it is programming-language independent

* The most useful, standard UML diagrams are: 
* use case diagrams
* class diagrams
* sequence diagrams
* statechart diagrams
* activity diagrams
* component diagrams
* deployment diagrams

# Use-case diagram

* A use case illustrates a unit of functionality provided by the system.
* Helps development teams to visualize the functional requirements of a system, including the relationship of 'actors' to essential processes, as well as the relationships among different use cases
* Use-case diagrams generally show groups of use cases - either all use cases for the complete system, or a breakout of a particular group of use cases with related funcitonality - e.g. all security administration-related use cases.
* Use-cases are depicted as ovals
* Actors/system users are represented as stick people :)
* Use simple lines to depict relationships between actors and use cases

# Class diagrams

Class diagrams show the different entities, people, things and data - how they relate to one another.
In other words, it shows the static structure of a system

* Draw boxes for each class
* Split the boxes into three parts
* The top part contains the class' name
* The middle part contains the class' data
* The bottom part contains the class' methods
* You can have inheritance realationships and association relationships
* Inheritances relationship are represented using a complete arrowhead
* Assocation relationships where only one side knows about the association are represented by a solid black line
* Association relationships where both sides know about the association are represented by an open arrowhead ------->


# Sequence diagrams

Sequence diagrams have 2 dimensions:
1 - vertical - lifelines
2 - horizontal - order that the methods are called
* A sequence diagram is an example of a behaviour diagram, and more specifically, an interaction diagram
* Sequence diagrams show a detailed flow for a specific use case or even just part of a specific use case
* They are almost self-explanatory; they show the calls between the different objects in their sequence and can show at a detailed level, different calls to different objects

* Represent a class using a block
* Represent a lifeline using a vertical dotted line
* Represent a method call using an open arrowhead and solid line
* Represent a return value using an open arrowhead and a dashed line
* Represent an activation using a solid block/rectangle
* Represent a self-invocation using a half loop
* Represent a private method simply by not including it (implementation)