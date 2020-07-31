# R

* R is a programming language and environment commonly used in statistical computing,
data analytics and scientific research
* Open source
* Works well with data
* Could be argumed that it is more of a tool to understand data than a programming language used to build 
software applications. 
* Used by statisticians, data analysts, researcher & marketers
to analyse, clean, present retrieve, and visualise data
* Built on top of the programming language S
* Commonly-used constructs in R include:
* vectors
* frames
* data tables
* matrices
* lists
- allow you to perform transformations on data in bulk

* allows for the creation of charts - can plot data and create visualizations from that dataset
And

* Has an extensive set of functions for classical and modern statistical data and modelling
* Provides numerical analysis tools for linear algebra, differential equations and stochastics,
* Offers Graphics functions for visualizing data and model output

Programming langs like R allow data scientists to collect data in
realtime, performing statistical and predictive analysis, create visulizations and communicating 
results to stakeholders. 

### Use of R in machine learning

* Linear and non-linear regression
* decision trees, 
* linear and non-linear classicification

R can be used to implement machine learning algorithms in various fields - genetics, marketing, health care etc.

### Installing R

The main source for R is the CRAN - Comprehensive R Archive Network

Execute r in the command line

Stopping r by typing q()

### Files in R

Files extension .Rmd format

This format allows you to group blocks of code with common logic, see their output,
and then render all of it together as an HTML file that can be viewed on a browser as a static website


```
---
title: "Testing
---
```{r}
24 * 5 + 8/2
```


The above is an r block
The calculations must be enclosed in the r block

### Comments

Comments in R are written using #


### Data types in R

**Numeric** - any number with or without a decimal point 
29
0.02
NA - null

**Character** - any grouping of characters on your keyboard

**Logical** - booleans - TRUE FALSE

**Vectors** - a list of related data that is all the same type

**NA** - represents the absence of a value


### Printing

print()
```
print(‘Emily’)
```


### Variables

Assign variables using the assignment operator,  < -


full_name <-”Emily Jane Spencer"

```
# Hi
message <- “Salut”
print(message)

# Bye
message<- “Au revoir”
print(message)
```

```

### Vectors

Vectors are a list-like structure that contains items of the same data type

```
days_of_the_week<- c(“Monday”, “Tuesday”,”Wednesday”,”Thursday”, "Friday", "Saturday", "Sunday")
```

**typeof(vector_name)**
can be used to check the type of elements in a vector by using typeof(vector_name)

**length(vector_name)**
can be used to check the length of a vector by using length(vector_name)

Access individual elements in the vector by using []:
vector_name[6]

R is NOT zero-based indexed 


### Conditionals

```
if (TRUE) {
  print(‘Send help’)
} 
```

```
if (TRUE) {
   print(“Don't send help”)
} else {
   print(“Send help”)
}
```

```{r}
message <- ‘hello’
if (TRUE) {
   message <- ‘Hi - true’
} else {
   message <- ‘Hi - false’
}

print(message)
```

### Comparison operators

<
>
<=
>= == 
!=


& - logical AND
| - logical OR
! - logical NOT or bang operator


`