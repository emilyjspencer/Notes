# Notes 

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


* Components can be **class-based** or **functional**

* **Class-based** 

* Class-based components can also be referred to as **stateful** components or 
**smart** components.
* The render() method is used
* The class and extends keywords are used

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
* **Functional components**

* Functional components look like a function
* render() is not used
* Functional components are also known as stateless components or dumb components 

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