# Notes 

* A core philosophy of react is to split applications into small pieces - separate, lean, reusable components
* Ideally, tasks should be delegated to other components
* There are two types of components - stateful(clever) components and presentational(dumb) componens
* The former manages state
* The latter have the responsibility for styling etc
* It is common to have far more presentational components in a React application than stateful components  

* Rendering content dynamically 

```html
import React from 'react';
import ReactDOM from 'react-dom'


 const App = () => {
   const now = new Date()
   const a = 10
   const b = 20

   console.log('Hello from component')
   return (
   <div>
     <p>Hello world</p>
     <p>
       {a} plus {b} is { a + b }
     </p>
   </div>
   )
 }

export default App;
```
**JSX**

* The layout of React components is mostly written using JSX>
* The JSX returned by React components is compiled into JavaScript, by Babel
* Projects created using create-react-app are configured to compile automatically 
* It is also possible to write React as "pure JavaScript" without using JSX.
* JSX is similar to HTML. However, with JSX< dynamic content can be embedded by writing appropriate JS within curly braces
* JSX is 'XML-like' in that every tag must be closed />


After compiling, the application looks like this:

```html
import React from 'react'
import ReactDOM from 'react-dom'

const App = () => {
  const now = new Date()
  const a = 10
  const b = 20
  return React.createElement(
    'div',
    null,
    React.createElement(
      'p', null, 'Hello world, it is ', now.toString()
    ),
    React.createElement(
      'p', null, a, ' plus ', b, ' is ', a + b
    )
  )
}

ReactDOM.render(
  React.createElement(App, null),
  document.getElementById('root')
)
```

**Components**

* Components should be capitalized 
* Writing components with React is easy, and by combining components, even a more complex application can be kept fairly maintainable. 
Indeed, a core philosophy of React is composing applications from many specialized reusable components.
* Oftentimes, the App component is the 'root' component. Sometimes, however, this is not the case

**props**

* Data can be passed to components using props

App.js

```html
import React from 'react';
import ReactDOM from 'react-dom';
import Hello from './Hello';


 const App = () => {

   return (
   <div>
     <p>Hello world</p>
     <Hello name="Emily" />
     <Hello name="Lucy" />
   </div>
   )
 }

export default App;
```

Hello.js

```html
import React from 'react';
import ReactDOM from 'react-dom'



const Hello = (props) => {
    return (
      <div>
        <p>Hello {props.name}</p>
      </div>
    )
    }

export default Hello
```

* In App.js:

```html
import React, { Component } from 'react';
import './App.css';


class App extends Component {
    render() {
      return (
        <div className="App">
          <h1>I am a H1</h1>
          <h3>I am a H3</h3>
          <h5>I am a H5</h5>
          <p>I am a p</p>
          <p>I am also a p</p>
          <h4>I am a H4</h4>
          <ul>
            <li>1.</li>
            <li>2.</li>
          </ul>
        </div>
      ) 
    }
}

export default App;
```

* The above outputs the following in the browser:

![output](react.png)


* Creating components
* Components can be class-based or functional

* The following is a class-based component:

```html


import React, {Component} from 'react';

class Photo extends Component {
    render() {
      const post = this.props.post
      return <figure className="captionAndPic">
        <img className="pic" src={post.imageLink} alt={post.description} />
        <figcaption> <p> {post.description} </p> </figcaption>
        <div className="container-button">
          <button className="delete-button">Delete</button>
        </div>
      </figure>
    }
}

 
export default 
```

The same written as a functional component:

```html

import React from 'react';

function Photo(props)
  const post = props.post
      return <figure className="captionAndPic">
        <img className="pic" src={post.imageLink} alt={post.description} />
        <figcaption> <p> {post.description} </p> </figcaption>
        <div className="container-button">
          <button className="delete-button">Delete</button>
        </div>
      </figure>
    }

    export default Photo
```


* The following code shows App.js. Three components - Cat, Dog and Rabbit
have been created and then rendered.

```html
import React, { Component } from 'react';

import Cat from './Cat/Cat'
import Dog from './Dog/Dog'
import Rabbit from './Rabbit/Rabbit'


class App extends Component {
    render() {
      return (
        <div className="App">
          <h1>I am a H1</h1>
          <h3>I am a H3</h3>
          <h5>I am a H5</h5>
          <p>I am a p</p>
          <p>I am also a p</p>
          <h4>I am a H4</h4>
          <ul>
            <li>1.</li>
            <li>2.</li>
          </ul>
          <Cat />
          <Dog />
          <Rabbit />
        </div>
      ) 
    }
}

export default App;

``` 

The above looks like this in the browser:

![output](components.png)

* **Props**

* **Props** allow the passing of data from a parent component to a child component
* This could be described as passing data down the component tree and triggering 
a re-render
Props provide access to the attributes we give to our components
* We can pass properties/attributes to our components in App.js
* Pass props into the individual components as an argument
* Reference these attributes by using JavaScript expressions, using {}

App.js

```html

import React, { Component } from 'react';

import Cat from './Cat/Cat'
import Dog from './Dog/Dog'
import Rabbit from './Rabbit/Rabbit'


class App extends Component {
    render() {
      return (
        <div className="App">
          <h1>I am a H1</h1>
          <h3>I am a H3</h3>
          <Cat favouriteFood = "fish" color="black" favouriteNeighbour = "Bob" />
          <Dog favouriteHuman = "Tim" />
          <Rabbit />
        </div>
      ) 
    }
}

export default App;

``` 

Cat.js

```html
import React from 'react';

const cat = (props) => {
    return <p>I'm a tabby. My favourite food is {props.favouriteFood} I'm super cute. I am {props.color} My favourite neightbour is {props.favouriteNeighbour}</p>
};
  
export default cat;
```
The above renders as folows:

![output](reactprops.png)

* **children**

* Children refers to elements that are passed between the opening and closing tags of the 
component. The embedded/nested components

App.js

```html
import React, { Component } from 'react';

import Cat from './Cat/Cat'
import Dog from './Dog/Dog'
import Rabbit from './Rabbit/Rabbit'


class App extends Component {
    render() {
      return (
        <div className="App">
          <h1>I am a H1</h1>
          <h3>I am a H3</h3>
          <Cat favouriteFood = "fish" color="black" favouriteNeighbour = "Bob" />
          <Dog favouriteHuman = "Tim">Owner: Matilda</Dog>
          <Rabbit />
        </div>
      ) 
    }
}

export default App;
```

Dog.js
```html
import React from 'react';

const dog = (props) => {
    return ( 
        <div>
    <p>I'm a terrier. My name is Toby I'm also super cute</p>
    <p>{props.children}</p>
    <h1>{props.children}</h1>
    <h6>{props.children}</h6>
    </div>
    )
};
  
export default dog;
```
The above renders as follows:

![output](reactprops.png)

* **State**

* **State** the state of a component is an object that holds some information that may change over the lifetime of the component
* It is used to change the component from within 
* It is a property of the Component class
* It can be accessed via this.state which is returned in the
lifecycle method - render() (for classical components)
* Changes to the state result in an update of the UI - when the state
changes, the component re-renders to reflect the new state in the browser

* With functional/function components, we can use useState() to manage state, otherwise known as a hook
* Any functions that start with 'use' in React are hook functions
*  useState() returns an array of exactly two elements

* 1 - latest state snapshot 

* 2 - a function that allows us to update that state and tell React that it should re-render - usually starts with 'set'


* useState only initialises that state when the component is rendered for the first time
* And for subsequent re-render cycles - it just pulls out the latest state snapshot and and ignores the initial value we set


App.js
```html

import React, { Component } from 'react';

import Cat from './Cat/Cat'
import Dog from './Dog/Dog'
import Rabbit from './Rabbit/Rabbit'

class App extends Component {
  state = {
    animals: [
      {name: 'Millie', age: 2},
      {name: 'Sally', age: 3},
      {name: 'Clover', age: 4}
    ]
  }
    render() {
      return (
        <div className="App">
          <h1>I am a H1</h1>
          <h3>I am a H3</h3>
          <Cat name ={this.state.animals[0].name} age ={this.state.animals[0].age} favouriteFood = "fish" color="black" favouriteNeighbour = "Bob" />
          <Dog name = {this.state.animals[1].name} age={this.state.animals[1].age} favouriteHuman = "Tim">Owner: Matilda</Dog>
          <Rabbit name={this.state.animals[2].name} age={this.state.animals[2].age} />
        </div>
      ) 
    }
}

export default App;
```
Cat.js

```html
import React from 'react';

const cat = (props) => {
    return <p>My name is {props.name} I am {props.age} years old. I'm a tabby. My favourite food is {props.favouriteFood} I'm super cute. I am {props.color} My favourite neighbour is {props.favouriteNeighbour}</p>
};
  

export default cat;
```

Dog.js
```html
const dog = (props) => {
    return ( 
        <div>
    <p>My name is {props.name} I am {props.age} years old. I'm a terrier. My name is Toby I'm also super cute</p>
    <p>{props.children}</p>
    </div>
    )
};
  
export default dog;
```
Rabbit.js
```html
import React from 'react';


const rabbit = (props) => {
    return <p>My name is {props.name} I am {props.age} years old I'm a dwarf house rabbit. I love carrots</p>
};
  

export default rabbit;
```

The above outputs the following in the browser:

![output](state.png)

**More component state**

App.js

```html
import React from 'react';
import Hello from './Hello';

const App = () => {
  const name = 'Marvin'
  const age = 20

  return (
    <div>
      <h1>Greetings</h1>
      <Hello name="Jess" age={16 + 10} />
      <Hello name={name} age={age} />
    </div>
  )
}

export default App;
``` 

Hello.js
```html
import React from 'react';

const Hello = (props) => {
    const yearBorn = () => {
        const yearNow = new Date().getFullYear()
        return yearNow - props.age
    }
  return (
    <div>
      <p>
        Hello {props.name}, you are {props.age} years old
      </p>
      <p>You were born in {yearBorn()}</p>
      </div>
  )
}

export default Hello
```

This outputs the following in the browser:

![output](greetings.png)

* The logic for guessing the person's birth year is separated into its own function that is called when the component is rendered.

T* he person's age needn't be passed as a param to the function, since it can directly access all props that are passed to the component.

* **State Manipulation**


* Only two things cause the DOM to be updated:
1. props
2. change of state 

App.js

```html
import React, { Component } from 'react';

import Cat from './Cat/Cat'
import Dog from './Dog/Dog'
import Rabbit from './Rabbit/Rabbit'


class App extends Component {
  state = {
    animals: [
      {name: 'Millie', age: 2, favouriteFood: 'Fish'},
      {name: 'Sally', age: 3, favouritefood: 'Peanut Butter'},
      {name: 'Clover', age: 4, favouriteFood: 'Carrots'}
    ]
  }

  changeFavouriteFood = () => {
  
    this.setState( {
      animals: [
        {name: 'Millie', age: 12, favouriteFood: 'Cabbage'},
        {name: 'Sally', age: 2, favouriteFood: 'Chocolate'},
        {name: 'Clover', age: 11, favouriteFood: 'peppers'}
      ]
    })
  }


    render() {
      return (
        <div className="App">
          <h1>I am a H1</h1>
          <h3>I am a H3</h3>
          <button onClick={this.changeFavouriteFood}>What else do they like to eat?</button>
          <Cat name ={this.state.animals[0].name} age ={this.state.animals[0].age} favouriteFood ={this.state.animals[0].favouriteFood} color="black" favouriteNeighbour = "Bob" />
          <Dog name = {this.state.animals[1].name} age={this.state.animals[1].age} favouriteFood={this.state.animals[1].favouriteFood} favouriteHuman = "Tim">Owner: Matilda</Dog>
          <Rabbit name={this.state.animals[2].name} age={this.state.animals[2].age} favouriteFood={this.state.animals[2].favouriteFood} />
        </div>
      ) 
    }
}

export default App;
```

Cat.js
```html
import React from 'react';

const cat = (props) => {
    return <p>My name is {props.name} I am {props.age} years old. I'm a tabby. My favourite food is {props.favouriteFood} I'm super cute. I am {props.color} My favourite neighbour is {props.favouriteNeighbour}</p>
};
  

export default cat;
```

Dog.js
```html
import React from 'react';

const dog = (props) => {
    return ( 
        <div>
    <p>My name is {props.name} I am {props.age} years old. I'm a terrier. My name is Toby. My favourite food is: {props.favouriteFood}</p>
    <p>{props.children}</p>
    </div>
    )
};
  
export default dog;
```

Rabbit.js
```html
import React from 'react';


const rabbit = (props) => {
    return <p>My name is {props.name} I am {props.age} years old I'm a dwarf house rabbit. My favourite food is {props.favouriteFood} </p>
};
  

export default rabbit;
```
The above renders as follows:

1. Before clicking the button:
![output](beforeStateChange.png)

2. After clicking the button:
![output](afterStateChange.png)


* React merges the old state with the new state
The DOM gets updated because React recognises that the state of the application has changed


### State manipulation with functional components

#### React Hooks
React Hooks are functions that let you “hook into” React state and lifecycle features from function components. 
* React Hooks typically start with **use** and the most commonly used hook is **useState**
* Add it to the top of the App.js file like so: 

```html
import React, { useState } from 'react';
```

* The **useState** hook is the hook that enables state management in functional components
* The initial state is passed to useState()
* useState() returns an array with two elements:
a) the current state value
b) the function that updates that current state value 

* **Array destructuring** facilitates the extraction of elements from the array you get back

* With class-based components, the old state is merged with the new.
* this.setState automatically merges the old state with the new
However, with functional components, this doesn't happen. 
We have to manually copy the old state by using useState as many times as it needed

Example of converting a class-based component into a functional component:

The class-based component:

App.js

```html
import React, { Component } from 'react';

import Cat from './Cat/Cat'
import Dog from './Dog/Dog'
import Rabbit from './Rabbit/Rabbit'


class App extends Component {
  state = {
    animals: [
      {name: 'Millie', age: 2, favouriteFood: 'Fish'},
      {name: 'Sally', age: 3, favouritefood: 'Peanut Butter'},
      {name: 'Clover', age: 4, favouriteFood: 'Carrots'}
    ]
  }

  changeFavouriteFood = () => {
  
    this.setState( {
      animals: [
        {name: 'Millie', age: 12, favouriteFood: 'Cabbage'},
        {name: 'Sally', age: 2, favouriteFood: 'Chocolate'},
        {name: 'Clover', age: 11, favouriteFood: 'peppers'}
      ]
    })
  }

    render() {
      return (
        <div className="App">
          <button onClick={this.changeFavouriteFood}>What else do they like to eat?</button>
          <Cat name ={this.state.animals[0].name} 
            age ={this.state.animals[0].age} 
            favouriteFood ={this.state.animals[0].favouriteFood} 
            color="black" favouriteNeighbour = "Bob" />
          <Dog name = {this.state.animals[1].name} 
          age={this.state.animals[1].age} 
          favouriteFood={this.state.animals[1].favouriteFood} favouriteHuman = "Tim">Owner: Matilda</Dog>
          <Rabbit name={this.state.animals[2].name} 
          age={this.state.animals[2].age} 
          favouriteFood={this.state.animals[2].favouriteFood} />
        </div>
      ) 
    }
}

export default App;
```

Cat.js
```html
import React from 'react';

const cat = (props) => {
    return <p>My name is {props.name} I am {props.age} years old. I'm a tabby. My favourite food is {props.favouriteFood} I'm super cute. I am {props.color} My favourite neighbour is {props.favouriteNeighbour}</p>
};
  

export default cat;
```

Dog.js
```html
import React from 'react';

const dog = (props) => {
    return ( 
        <div>
    <p>My name is {props.name} I am {props.age} years old. I'm a terrier. My name is Toby. My favourite food is: {props.favouriteFood}</p>
    <p>{props.children}</p>
    </div>
    )
};
  
export default dog;
```

Rabbit.js
```html
import React from 'react';


const rabbit = (props) => {
    return <p>My name is {props.name} I am {props.age} years old I'm a dwarf house rabbit. My favourite food is {props.favouriteFood} </p>
};
  

export default rabbit;
```

**The new functional component that has been translated from the class-based component:**

```html
import React, { useState } from 'react';
import './App.css';
import Cat from './Cat/Cat'
import Dog from './Dog/Dog'
import Rabbit from './Rabbit/Rabbit'


const App = props => {
  const [ animalsState, setStateOfAnimals ] = useState({
    animals: [
      {name: 'Millie', age: 2, favouriteFood: 'Fish'},
      {name: 'Sally', age: 3, favouritefood: 'Peanut Butter'},
      {name: 'Clover', age: 4, favouriteFood: 'Carrots'}
    ]
  });

  console.log(animalsState)

  const changeFavouriteFood = () => {
    setStateOfAnimals( {
      animals: [
        {name: 'Millie', age: 12, favouriteFood: 'Cabbage'},
        {name: 'Sally', age: 2, favouriteFood: 'Chocolate'},
        {name: 'Clover', age: 11, favouriteFood: 'peppers'}
      ]
    })
  }
  
      return (
        <div className="App">
          <button onClick={changeFavouriteFood}>What else do they like to eat?</button>
          <Cat name ={animalsState.animals[0].name} 
          age ={animalsState.animals[0].age} 
          favouriteFood ={animalsState.animals[0].favouriteFood} 
          color="black" favouriteNeighbour = "Bob" />
          <Dog name = {animalsState.animals[1].name} 
          age={animalsState.animals[1].age} 
          favouriteFood={animalsState.animals[1].favouriteFood} 
           favouriteHuman = "Tim">Owner: Matilda</Dog>
          <Rabbit name={animalsState.animals[2].name} age={animalsState.animals[2].age} favouriteFood={animalsState.animals[2].favouriteFood} />
        </div>
      ) 
      }

export default App;
```
# Stateful vs. stateless components

* **Stateful components** - manage state, whether that be through React Hooks (functional components), or by using the state property and setState() (class-based components)
* Also known as 'smart' or 'container' components

* **Stateless components** - don't manage state.
* Also know as 'dumb' or 'presentational components'

An example of a stateless component:

```html

import React from 'react';

const cat = (props) => {
    return <p>My name is {props.name} I am {props.age} years old. I'm a tabby. My favourite food is {props.favouriteFood} I'm super cute. I am {props.color} My favourite neighbour is {props.favouriteNeighbour}</p>
};
  

export default cat;
```
* The focus should be on making stateless components, for the most part, and only creating
one or two stateful components, depending on the size of the application. 

### Props

**Props** are inputs to components.
* They are single values or objects containing a set of values that are passed to components upon creating.
* They can be descibed as data passed down from a parent component to a child component 

**Uses of Props**

* Pass custom data to components
* Trigger state changes

**Props vs. State**

* State and props are simply JS objects.
* Props get passed to the component
* State is managed within the component 

### Passing props and references to event handlers

**Passing method references between components**

* References to event handlers can be passed e.g. by adding a reference to the event handler - 
changeAnimalsProperties, in each instance of each component as shown below, and then adding
onClick={props.click} to each individual component, each component achieves the same goal as the button - that is to stay that is changes the state - all of the animals' properties are updating whether you click on the button, or on each of Cat, Dog or Rabbit
App.js

```html
render() {
      return (
        <div className="App">
          <button onClick={this.changeAnimalsProperties}>What else do they like to eat?</button>
          <Cat name ={this.state.animals[0].name} 
          age ={this.state.animals[0].age} 
          favouriteFood ={this.state.animals[0].favouriteFood} 
          color="black" 
          click={this.changeAnimalsProperties}
          favouriteNeighbour = "Bob" />
          <Dog name = {this.state.animals[1].name}
           age={this.state.animals[1].age} 
           favouriteFood={this.state.animals[1].favouriteFood}
           click={this.changeAnimalsProperties}
           favouriteHuman = "Tim">Owner: Matilda</Dog>
          <Rabbit name={this.state.animals[2].name} 
          age={this.state.animals[2].age} 
          click={this.changeAnimalsProperties}
          favouriteFood={this.state.animals[2].favouriteFood} />
        </div>
        ```

        Cat.js

        ```html
        import React from 'react';

const cat = (props) => {
    return (
    <div>
        <p onClick={props.click}>My name is {props.name} I am {props.age} years old. I'm a tabby. My favourite food is {props.favouriteFood} I'm super cute. I am {props.color} My favourite neighbour is {props.favouriteNeighbour}</p>
        <p>I am a cat</p>
     </div>
    )
};
  

export default cat;
```
Dog.js and Rabbit.js look that same 

**Passing arguments**

* Arguments can be passed using bind() e.g.

Code omitted for the sake of brevity 

```html
class App extends Component {
 state = { 
    animals: [
      {name: 'Milly', age: 2, favouriteFood: 'Fish'},
      {name: 'Sally', age: 3, favouritefood: 'Peanut Butter'},
      {name: 'Clover', age: 4, favouriteFood: 'Carrots'}
    ]
  }

  changeAnimalsProperties = (newName) => {
  
    this.setState( {
      animals: [
        {name: newName, age: 12, favouriteFood: 'Cabbage'},
        {name: 'Sally', age: 2, favouriteFood: 'Chocolate'},
        {name: 'Clover', age: 11, favouriteFood: 'peppers'}
      ]
    })
  }

    render() {
      return (
        <div className="App">
          <button onClick={this.changeAnimalsProperties.bind(this, "Lulu")}>What else do they like to eat?</button>
          <Cat name ={this.state.animals[0].name} 
          age ={this.state.animals[0].age} 

  ```
* newName is passed in as an arg to changeAnimalsProperties
* This data is passed using bind()
```html
<button onClick{this.changeAnimalsProperties.bind(this, "Lulu")}>

In the Cat component (Cat.js) 
```html
import React from 'react';

const cat = (props) => {
    return (
    <div>
        <p onClick={props.click}>My name is {props.name} I am {props.age} years old. I'm a tabby. My favourite food is {props.favouriteFood} I'm super cute. I am {props.color} My favourite neighbour is {props.favouriteNeighbour}</p>
        <p>I am a cat</p>
     </div>
    )
};

export default cat;
```

* When the button is clicked - the cat's name changes from Milly to Lulu - the new value
(newName)

* **Two-way binding and dynamic updates**

We can dynamically change the names of the different animals in the browser by entering a new new into the relevant text box

The following shows how we can change the name of the cat, in the browser
![output](beforeChange.png)
![output](changeNameDynamicallyCat.png)
The following shows how we can change the name of the dog, in the browser
![output](changeNameDynamicallyDog.png)
The following shows how we can change the name of the rabbit, in the browser
![output](changeNameDynamicallyRabbit.png)

**How was this achieved?**

* The event listener - onChange was used. (onChange is fired whenever the input value changes)
* Three new methods were created: 
```html
changeNameDynamicallyCat()
changeNameDynamicallyDog()
changeNameDynamicallyRabbit()
```

all three of which update the state.

* These methods were passed an event object, each of which have a target - the input boxes in the respective components.
* Each target also has a value - which is the value entered into the text box(target)
* We bind onChange to the changed props in each component - each of which hold a reference to their respective event handler
* The default event object extracts the target 
* We utilize two-way binding by adding value={props.name}
to each component, so that the initial value is shown in the input box, before we start to change its value
* All in all, the state is updated, the props are updated and hence the changes in the input are reflected in the browser.


* The code for App.js, Cat.js, Dog.js and Rabbit.js:

App.js
```html
import React, { Component } from 'react';
import './App.css';
import Cat from './Cat/Cat'
import Dog from './Dog/Dog'
import Rabbit from './Rabbit/Rabbit'


class App extends Component {
 state = { 
    animals: [
      {name: 'Millie', age: 2, favouriteFood: 'Fish'},
      {name: 'Sally', age: 3, favouritefood: 'Peanut Butter'},
      {name: 'Clover', age: 4, favouriteFood: 'Carrots'}
    ]
  }

  changeAnimalsProperties = (newName) => {
  
    this.setState( {
      animals: [
        {name: newName, age: 12, favouriteFood: 'Cabbage'},
        {name: 'Sally', age: 2, favouriteFood: 'Chocolate'},
        {name: 'Clover', age: 11, favouriteFood: 'peppers'}
      ]
    })
  }

  changeNameDynamicallyCat = (event) => {
    this.setState( {
      animals: [
        { name: event.target.value, age: 12, favouriteFood: 'Cabbage'},
        { name: 'Sally', age: 2, favouriteFood: 'Chocolate'},
        { name: 'Clover', age: 11, favouriteFood: 'peppers'}
      ]
    })
  }

  changeNameDynamicallyRabbit= (event) => {
    this.setState( {
      animals: [
        { name: "Millie", age: 12, favouriteFood: 'Cabbage'},
        { name: 'Sally', age: 2, favouriteFood: 'Chocolate'},
        { name: event.target.value, age: 11, favouriteFood: 'peppers'}
      ]
    })
  }

  changeNameDynamicallyDog= (event) => {
    this.setState( {
      animals: [
        { name: "Millie", age: 12, favouriteFood: 'Cabbage'},
        { name: event.target.value, age: 2, favouriteFood: 'Chocolate'},
        { name: 'Clover', age: 11, favouriteFood: 'peppers'}
      ]
    })
  }

    render() {
      return (
        <div className="App">
          <button onClick={this.changeAnimalsProperties}>What else do they like to eat?</button>
          <Cat name ={this.state.animals[0].name} 
          age ={this.state.animals[0].age} 
          favouriteFood ={this.state.animals[0].favouriteFood} 
          color="black" 
          click={this.changeAnimalsProperties}
          changed={this.changeNameDynamicallyCat}
          favouriteNeighbour = "Bob" />
          <Dog name = {this.state.animals[1].name}
           age={this.state.animals[1].age} 
           favouriteFood={this.state.animals[1].favouriteFood}
           click={this.changeAnimalsProperties}
           changed={this.changeNameDynamicallyDog}
           favouriteHuman = "Tim">Owner: Matilda</Dog>
          <Rabbit name={this.state.animals[2].name} 
          age={this.state.animals[2].age} 
          click={this.changeAnimalsProperties}
          favouriteFood={this.state.animals[2].favouriteFood}
          changed={this.changeNameDynamicallyRabbit} />
        </div>
      ) 
    }
}

export default App;
```

Cat.js
```html
import React from 'react';

const cat = (props) => {
    return (
    <div>
        <p onClick={props.click}>My name is {props.name} I am {props.age} years old. I'm a tabby. My favourite food is {props.favouriteFood} I'm super cute. I am {props.color} My favourite neighbour is {props.favouriteNeighbour}</p>
        <p>I am a cat</p>
        <input type="text" onChange={props.changed} value = {props.name}/>
     </div>
    )
};
  

export default cat;
```
Dog.js
```html
const dog = (props) => {
    return ( 
        <div>
    <p onClick={props.click}>My name is {props.name} I am {props.age} years old. I'm a terrier. My name is Toby. My favourite food is: {props.favouriteFood}</p>
    <p>{props.children}</p>
    <input type="text" onChange={props.changed} value={props.name}/>
    </div>
    )
};
  
export default dog;
```

Rabbit.js
```html
import React from 'react';


const rabbit = (props) => {
    return (
    <div>
    <p onClick={props.click}>My name is {props.name} I am {props.age} years old I'm a dwarf house rabbit. My favourite food is {props.favouriteFood} </p>
<input type="text" onChange={props.changed} value={props.name}/>
</div>
    )
};
  
export default rabbit;
```

### Styling React Application

* There are different ways to style React components
* 1 - Use stylesheets
* 2 - Use inline styling

* **Stylesheets**

* The important thing to remember is to import the .css file into the component file e.g.
I created a Dog.css file, so in my Dog.js file, I had to add the following:

```html
import './Dog.css';
```

I did the same for the Rabbit and Cat components.

The following shows three differently styled components, although the styling is not something I'd want to use in 'real' code:

![output](undesirableStyling.png)

**Inline Styling**

* Inline styling can also be used.
* To style an element with the inline style attribute, the value must be a JavaScript object
* Since the inline CSS is written in a JavaScript object, properties such as background-color, which normally utilize a -, must be written with camel case syntax e.g.
backgroundColor

* An object can also be created with styling information, and referred to in the style attribute.
Below, I have styled the button using the style attribute, and camelCase. No stylesheets required.

Other code ommitted for brevity:

```html
render() {

      const style = {
        backgroundColor: '#e6ffff',
        font: 'inherit',
        border: '6px solid #e6ccff',
        padding: '10px'
      }

      return (
        <div className="App">
          <button style={style} onClick={this.changeAnimalsProperties}>What else do they like to eat?</button>
          <Cat name ={this.state.animals[0].name} 
          age ={this.state.animals[0].age} 
  ```
  The above button looks like this:

![output](styledButton.png)

**Conditionals**

* Output can be rendered conditionally, e.g. we can choose to hide or chose specific content.
One way of achieving this is to use a ternary operator ( a default JS construct) and adding a property to the state.
* In the initial state, I create a property called showAnimals and set it to false, so that the animals are hidden by default.
* In order to render the animals upon a click of the button, the following must be done:
* Create an event handler e.g.

```html
showHideAnimals = () => {
  const showing = this.state.showAnimals;
  this.setState({showAnimals: !showing});
}
```
Save the current state to a variable and then update the state using setState() show that when showing is true - we set the showAnimals property to false and if showing is false, we set the showAnimals property to true

* Use the ternary operator and wrap the content in a div

```html
{ 
          this.state.showAnimals   === true ?
          <div>
          <Cat name ={this.state.animals[0].name} 
          age ={this.state.animals[0].age} 
          favouriteFood ={this.state.animals[0].favouriteFood} 
          color="black" 
          click={this.changeAnimalsProperties}
          changed={this.changeNameDynamicallyCat}
          favouriteNeighbour = "Bob" />
          <Dog name = {this.state.animals[1].name}
           age={this.state.animals[1].age} 
           favouriteFood={this.state.animals[1].favouriteFood}
           click={this.changeAnimalsProperties}
           changed={this.changeNameDynamicallyDog}
           favouriteHuman = "Tim">Owner: Matilda</Dog>
          <Rabbit name={this.state.animals[2].name} 
          age={this.state.animals[2].age} 
          click={this.changeAnimalsProperties}
          favouriteFood={this.state.animals[2].favouriteFood}
          changed={this.changeNameDynamicallyRabbit} />
          </div> : null
    }
    </div>
    ```

The whole file (App.js) would look like this:

```html
import React, { Component } from 'react';
import './App.css';
import Cat from './Cat/Cat'
import Dog from './Dog/Dog'
import Rabbit from './Rabbit/Rabbit'


class App extends Component {
 state = { 
    animals: [
      {name: 'Millie', age: 2, favouriteFood: 'Fish'},
      {name: 'Sally', age: 3, favouritefood: 'Peanut Butter'},
      {name: 'Clover', age: 4, favouriteFood: 'Carrots'}
    ],
    showAnimals: false
  }

  changeAnimalsProperties = (newName) => {
  
    this.setState( {
      animals: [
        {name: newName, age: 12, favouriteFood: 'Cabbage'},
        {name: 'Sally', age: 2, favouriteFood: 'Chocolate'},
        {name: 'Clover', age: 11, favouriteFood: 'peppers'}
      ]
    })
  }

  changeNameDynamicallyCat = (event) => {
    this.setState( {
      animals: [
        { name: event.target.value, age: 12, favouriteFood: 'Cabbage'},
        { name: 'Sally', age: 2, favouriteFood: 'Chocolate'},
        { name: 'Clover', age: 11, favouriteFood: 'peppers'}
      ]
    })
  }

  changeNameDynamicallyRabbit= (event) => {
    this.setState( {
      animals: [
        { name: "Millie", age: 12, favouriteFood: 'Cabbage'},
        { name: 'Sally', age: 2, favouriteFood: 'Chocolate'},
        { name: event.target.value, age: 11, favouriteFood: 'peppers'}
      ]
    })
  }

  changeNameDynamicallyDog= (event) => {
    this.setState( {
      animals: [
        { name: "Millie", age: 12, favouriteFood: 'Cabbage'},
        { name: event.target.value, age: 2, favouriteFood: 'Chocolate'},
        { name: 'Clover', age: 11, favouriteFood: 'peppers'}
      ]
    })
  }


  showHideAnimals = () => {
    const doesshow = this.state.showAnimals;
    this.setState({showAnimals: !doesshow});
  }

    render() {
      const style = {
        backgroundColor: '#e6ffff',
        font: 'inherit',
        border: '6px solid #e6ccff',
        padding: '10px'
      }

      return (
          <div className="App">
          <button style={style} onClick={this.showHideAnimals}>What else do they like to eat?</button>
          { 
          this.state.showAnimals   === true ?
          <div>
          <Cat name ={this.state.animals[0].name} 
          age ={this.state.animals[0].age} 
          favouriteFood ={this.state.animals[0].favouriteFood} 
          color="black" 
          click={this.changeAnimalsProperties}
          changed={this.changeNameDynamicallyCat}
          favouriteNeighbour = "Bob" />
          <Dog name = {this.state.animals[1].name}
           age={this.state.animals[1].age} 
           favouriteFood={this.state.animals[1].favouriteFood}
           click={this.changeAnimalsProperties}
           changed={this.changeNameDynamicallyDog}
           favouriteHuman = "Tim">Owner: Matilda</Dog>
          <Rabbit name={this.state.animals[2].name} 
          age={this.state.animals[2].age} 
          click={this.changeAnimalsProperties}
          favouriteFood={this.state.animals[2].favouriteFood}
          changed={this.changeNameDynamicallyRabbit} />
          </div> : null
    }
    </div>
      ) 
    }
}



export default App;
```

Now, when we click the button, the content is rendered, when we click the button again, the content disappears.

* An alternative (perhaps neater) way to achieve the above is to do the following:

* Create a variable and place between the render() and return statement

```html
let animals = null;

if(this.state.showAnimals) {


}
```

So, by default animals is null

Paste the content - the Cat, Dog and Rabbit instances in the if statement and then render the animals variable in its place :

```html
import React, { Component } from 'react';
import './App.css';
import Cat from './Cat/Cat'
import Dog from './Dog/Dog'
import Rabbit from './Rabbit/Rabbit'


class App extends Component {
 state = { 
    animals: [
      {name: 'Millie', age: 2, favouriteFood: 'Fish'},
      {name: 'Sally', age: 3, favouritefood: 'Peanut Butter'},
      {name: 'Clover', age: 4, favouriteFood: 'Carrots'}
    ],
    showAnimals: false
  }

  changeAnimalsProperties = (newName) => {
  
    this.setState( {
      animals: [
        {name: newName, age: 12, favouriteFood: 'Cabbage'},
        {name: 'Sally', age: 2, favouriteFood: 'Chocolate'},
        {name: 'Clover', age: 11, favouriteFood: 'peppers'}
      ]
    })
  }

  changeNameDynamicallyCat = (event) => {
    this.setState( {
      animals: [
        { name: event.target.value, age: 12, favouriteFood: 'Cabbage'},
        { name: 'Sally', age: 2, favouriteFood: 'Chocolate'},
        { name: 'Clover', age: 11, favouriteFood: 'peppers'}
      ]
    })
  }

  changeNameDynamicallyRabbit= (event) => {
    this.setState( {
      animals: [
        { name: "Millie", age: 12, favouriteFood: 'Cabbage'},
        { name: 'Sally', age: 2, favouriteFood: 'Chocolate'},
        { name: event.target.value, age: 11, favouriteFood: 'peppers'}
      ]
    })
  }

  changeNameDynamicallyDog= (event) => {
    this.setState( {
      animals: [
        { name: "Millie", age: 12, favouriteFood: 'Cabbage'},
        { name: event.target.value, age: 2, favouriteFood: 'Chocolate'},
        { name: 'Clover', age: 11, favouriteFood: 'peppers'}
      ]
    })
  }


  showHideAnimals = () => {
    const doesshow = this.state.showAnimals;
    this.setState({showAnimals: !doesshow});
  }

    render() {
      const style = {
        backgroundColor: '#e6ffff',
        font: 'inherit',
        border: '6px solid #e6ccff',
        padding: '10px'
      }
      
      let animals = null;
      
      if(this.state.showAnimals) {
        animals = (
        <div>
          <Cat 
          name ={this.state.animals[0].name} 
          age ={this.state.animals[0].age} 
          favouriteFood ={this.state.animals[0].favouriteFood} 
          color="black" 
          click={this.changeAnimalsProperties}
          changed={this.changeNameDynamicallyCat}
          favouriteNeighbour = "Bob" />
          <Dog 
          name = {this.state.animals[1].name}
           age={this.state.animals[1].age} 
           favouriteFood={this.state.animals[1].favouriteFood}
           click={this.changeAnimalsProperties}
           changed={this.changeNameDynamicallyDog}
           favouriteHuman = "Tim">Owner: Matilda</Dog>
          <Rabbit 
          name={this.state.animals[2].name} 
          age={this.state.animals[2].age} 
          click={this.changeAnimalsProperties}
          favouriteFood={this.state.animals[2].favouriteFood}
          changed={this.changeNameDynamicallyRabbit} /> 
          </div>
          )
      }

      return (
          <div className="App">
            <button style={style} onClick={this.showHideAnimals}>What else do they like to eat?</button>
            {animals}      
          </div>
      ) 
    }
}



export default App;
```
* When the button is clicked, the content is rendered, when the button is clicked again, the content is hidden. 

**Lists**

```html
{this.state.animals.map(animal => {
            return <Cat name={cat.name} age={cat.age} favouriteFood = {cat.favouriteFood} />
          })}
```

* We map through the array of JS objects and a new array is produced, which constains JSX elements.
* We are essentially converts an array of JS objects into an array of JSX objects, apart from the fact that map() is NOT a destructive method and doens't modify the original array - just returns a new one.
* These new JSX elements are rendered to the DOM

**Using the map() method**

When using map() with React - each item you’re mapping over needs to be given a key prop
Often this will be an id

**Handling events**

* We can add event listeners to any element by adding onNameOfEvent e.g. onClick
onSubmit - for forms
* Pointers to functions/references to functions can be passed to the event listeners
* Event Handlers are the names of the functions which we reference - and it is best practice to add 
'Handler' to the name of these event handlers
* Event handlers are triggered when the event occurs e.g. a button is clicked, a page is loaded etc



**Lifecycle Methods**

* **Lifecycle methods** - let you define pieces of code you want to execute according to the state of the component like mounting, rendering, updating and un-mounting.



**render()** - is called whenever React checks whether the page needs to be updated








**onClick** 
**onChange** - are both attributes which can be added to elements. When the event occurs, e.g. the element, such as a button is clicked, the method that has been defined, will be executed e.g.
```html
<button onClick = "sayHello()">Click to say Hi</button>
```
upon clicking said button, the sayHello() method is executed 

In vanilla JavaScript - the onclick attribute is written without the capital c, as it is in React

``html
<button onclick="SayGoodbye()">Click to say Bye</button>
```

**Event handlers/event listeners** - methods that are executed in response to events. Events could be anything from a mouse click, a page stroll, to a keystroke or a mouse hover.

**event.target** - 
- target is an event property which is used to get or 'target' the element on which the event originally occurred - returns the element that triggered the event.

**Methods**

Methods can be assigned to objects even after the creation of the object: 

```
person = {
  name: 'Jonanthan SacconeJoly',
  age: 40,
  nationality: 'Irish,
  greet: function() {
    console.log('hello, my name is ' + this.name)
  },
}

person.growOlder = function() {
  this.age += 1
}

console.log(arto.age)   // 41 is printed
arto.growOlder()
console.log(arto.age)   // 42 is printed

```

With React, functional programming techniques are often used.
Once characteristic of functional programming is the use of immutable data structures e.g.
concat()

* **concat()** doesn't add an item to an array - it creates a new array with the old and the new array combined e.g.
```html
const t = [1, -1, 3]
const t2 = t.concat(5)
console.log(t) // [1, -1, 3]
console.log(t2) // [1, -1, 3, 5]
```

**Template literals**

* Template literals are defined by their use of backticks. Instead of the usual "" or ''
`` is used
* We use template literals so that we can embed variables e.g
```html

const deleteStudent = await fetch(`http:localhost:5000/students/${id}`)

```

embeds the id into the url so that a request can be made to a particular student - i.e.
a student we the specified id

**Fetch**

By default, fetch makes a Get request, so if we are making anything other than a 
GET request, we need to specify this e.g.

```html
const deleteStudent = async (id) => {
    try {
        const deleteStudent = await fetch(`http://localhost:5000/students${id}`), 
        {
            method: "DELETE"
        });
    }
}
```

**use of map()**

When using map to map over each item in an array in React - you need to give each element
a key prop - this is usually an id


**useEffect()** - is a React hook
It allows you to perform side effects in functional components
What sort of things can be described as a side effect:

- fetching data
- manually changing the DOM
setting up a subscription -
(what is meant by setting up a subscription?)

**useEffect()** is sort of like a combination of componentDidMount(),
componentDidUpdate() and componentWillUnmount()

**console.error()**

console.error() outputs an error message to the web console

**e.target.value**

```html

e.target.value
 or 
event.target.value

```

The target event property - the property of the event object - 
returns the element that triggered the event

Value is the value of the element that triggered the event

**Fragments** 

* Fragments let you group a list of children without adding extra nodes to the DOM because 
* Fragments aren't rendered to the DOM
* Fragments can be used in place of wrapper divs

**Routing**

* The React-Router package can be added to enable routing functionality in React applications 
* At the top of a file add:

```html
import { BrowserRouter as Router, Route, Redirect, Switch} from 'react-router-dom';
```

Here - multiple components are imported

* Redirect - is used to redirect to a specified page e.g. we could define that if a user enters anything
other than our defined urls, they are redirected to the homepage. This can be done using the Redirect component
* Switch stops further evaluation once a match has been made. If the Switch component isn't used, 
checks will continue to be made. We want this evaluation to stop once a match has been made.
* Route 

**exact** keyword 
* The **exact** keyword can be passed to Route components e.g.
```html
<Route path="/" exact>
```
so that a particular component is rendered only when on a particulr page, in the example above, when on the
homepage
