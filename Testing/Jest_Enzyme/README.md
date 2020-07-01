# Testing React with Enzyme and Jest 

* Jest is a test runner
* Enzyme is a testing utility for React
* enzyme-to-json enables the conversion of Enzyme wrappers for Jest snapshot matchers

### **Benefits of Jest**

* Jest provides an interactive watch mode that only reruns the tests that are relevant to your changes - hence it is very fast, unlike RSpec, which, by default, runs all tests
* Offers snapshot testing
* Good failure messages
* Simple configuration

### **Shallow rendering**

* Shallow rendering renders only the component itself and not its children, so if part of a child component
is modified, the shallow output of the parent component won't change. 
* A problem with the child component won't break the parent component's test
* Shallow render tests are useful to test the component as a unit and NOT to test the behaviour of a component's child/children


### **Jest snapshots**

* A Jest snapshot is a rendered output of a component stored in a 
text file.
* Used to tell Jest that the output of a component shouldn't accidentally change and Jest saves it to a file

### **Jest Watch Mode**

* Enter jest watch mode by running:
```html
npm test
```
* Exit jest watch mode by entering:
```html
q
```

#### What is Jest watch mode?
* Jest watch mode watches for changes and then reruns the tests based on any changes to the code
By default, watch mode only watches for changes since the last commit

* If we want to run all of our tests, we can run them even if there haven't been any changes since the last commit, by running 
```html
a
```

<hr>

**Jest tests**

By default, Jest looks for files in the src directory with the extension .test.js


Example test

App.test.js
```html
import React from 'react';
import { render } from '@testing-library/react';
import App from './App';

test('renders learn react link', () => {
  const { getByText } = render(<App />);
  const linkElement = getByText(/learn react!!!/i);
  expect(linkElement).toBeInTheDocument();
});
```

App.js

```html
import React from 'react';
import './App.css';

const App = () => {
  
  return (
    <div className="App">
      <h1>learn react!!!</h1>
    </div>
  );
}

export default App;
```
This test passes.



* Just as is the case with RSpec and Jasmine, an expect() method is used to make assertions.
* The test() method can called, which has two arguments:
* 1 - the name of the test/description
* 2 - an anonymous function run by Jest. 
* If any errors are thrown, the test will fail
* In place of test(), we can also use it(), just as we do with RSpec and Jasmine

NB - By default, Create-React-App uses the React Testing Library 

<hr>

## Enzyme

Enzyme isn't shipped with Create-React-App so it needs to be installed.

```html
npm install --save-dev enzyme jest-enzyme enzyme-adapter-react-16
```

Saved as dependencies for testing purposes and not production
Jest-enzyme - so Jest and Enzyme can talk to one another
enzyme-adapter-react-16 - or whichever version of React that a developer is using. Used to tell Enzyme what type of code to expect.
Also, as of React 15.5, Enzyme required react-test-renderer, so this also needs to be installed


<hr>

## What is Enzyme?

* Enzyme is a tool that creates a Virtual DOM, which is needed when testing React without a browser.

* Create-React-App uses REACT-DOM for this and so does Enzyme(under the hood)

* Enzyme's extensive toolkit allows developers to search through the DOM using jQuery-type and CSS-type selectors

* Events can also be simulated on the DOM

<hr>

## Setting up Enzyme

* The setup involves configuring Enzyme to use the adapter specified by the developer.

* The adapter tells Enzyme what type of code to expect
* The following code should be added to the test file:

```html
import Enzyme from ‘enzyme’;
import EnzymeAdapter from ‘enzyme-adapter-react-16’;
```

* Enzyme also needs to be configured with an object that specifies an adapter. This object is an instance of the Enzyme Adapter base class.
Thus, the following code also needs to be added to the test file:
```html

Enzyme.configure({ adapter: new EnzymeAdapter() });

```

Remove the test code and run npm test to check that the setup has been successful.

<hr>


### Summary of setup

* Install Enzyme:
```html
npm install -d enzyme
```

* Add the test renderer and Enzyme adapter
```html
npm install -d react-test-renderer enzyme-adapter-react-16
```

* Add the snapshot serializer
```html
npm i -D enzyme-to-json
```
* Edit the setUpTests.js file:
```html
Import { configure } from ‘enzyme’;
Import Adapter from ‘enzyme-adapter-react-16’;

configure({ adapter: new Adapter() });
```

<hr>

## Using Enzyme in tests

### Shallow Rendering

The shallow function needs to be required i.e.
```html
import Enzyme, { shallow } from 'enzyme';
```

* Enzyme's shallow() function is used to render components

* shallow() takes JSX as an argument and returns a shallow wrapper. 

* When writing unit tests for React, shallow rendering can be helpful Shallow rendering allows developers to render elements that are only one level deep i.e.
for a given parent component with various child components, those child components won't be rendered.
*  Instead placeholders will take their place, and only the parent component will be rendered, therefore allowing for quicker testing.
* This allows developers to test the component as a unit and avoid testing the behaviour of child components


<hr>


## Debugging with Enzyme

* debug can used to debug React applications

```html
test('renders correctly', () => {
  const wrapper = shallow(<App />);
  console.log(wrapper.debug());
  
});
```

outputs the following in the command line:

```html
PASS  src/App.test.js
  ✓ renders correctly (4ms)

  console.log src/App.test.js:12
    <div className="App">
      <h1>
        Learning to test React!!!
      </h1>
    </div>
```

Allows us to get visibility because it returns the DOM as a string

<hr>

## Using assertions

```html
  test('it renders correctly', () => {
  const wrapper = shallow(<App />);
  expect(wrapper).toBeFalsy();
});
```

This test fails

```html
test('it renders correctly', () => {
  const wrapper = shallow(<App />);
  expect(wrapper.toBeTruthy())=;
}
```

This test passes 

<hr>

## Removing data-test attributes from the production code

Install the following package

```html
npm install —save-dev babel-plugin-react-remove-properties
```
Run npm run eject:

```html
npm run eject
```
which takes the configuration files that had been hidden by Create-React-App and makes them configurable to the developer.
The package.json will now list all of the dependencies, not just the ones that the developer installed.

Update the babel cofiguraiton by copying the following to the 'babel' script in package.json:

```html
Add to the package.json - copy under the babel line


“babel”: {
  "env": {
    "production": {
      "plugins": [
        ["react-remove-properties", {"properties": ["data-test"]}
      ]
    }, “presents”:[
      “react-app”
  }
}
```
Create a production build:

```html
npm run build
```

Run a static server:
```html
npm install -g server or sudo npm install -g server
```

Run the command to serve the static app:

```html
serve -s build
```

Go to localhost:5000

<hr>

## DRYing up tests

Functions can be used to avoid duplication and repetition in tests, similar to the use of before hooks in rspec and beforeEach() functions in JavaScript.

```html
const setup = (props={}, state=null) => {
  return shallow(<App {...props} />)
}
``` 
This setup method can then replace some of the code in each test e.g.

```html
test('it renders without an error', () => {
  const wrapper = setup();
  const appComponent = findByTestAttribute(wrapper, 'component-app');
  expect(appComponent.length).toBe(1);
});
```

```html
const wrapper - setup();
```
instead of:
```html
const wrapper = shallow(<App />);
```

Another example of a function to DRY up test code:

```html
const findByTestAttribute = (wrapper, val) => {
   return wrapper.find(`[data-test="${val}"]`);
 }
``` 

Then the findByTestAttribute() function can be used to replace some code in each test - thereby avoiding unecessary duplication.
```html
const counterDisplay = findByTestAttribute(wrapper, 'counterDisplay');
```
instead of:
```html
const counterDisplay = wrapper.find("[data-test='counterDisplay']")
```

beforeEach can also be used - as I did with the Calculator:

```html
describe('Calculator', () => {
    
  let wrapper;

  beforeEach(() => wrapper = shallow(<Calculator />));
```
<hr>

**Side Note - JS Docs**

An example of a JS doc for the setup() function
 /** 
 * Factory function to create a ShallowWrapper for the App component.
 * @function setup
 * @param {object} props 
 * @param {any} state  - Initial state for setup
 * @returns {ShallowWrapper}
 */

JS docs explain what particular functions do and can be placed just above functions

<hr>

## Testing state

### Class-based components

The methods setState() and state() can be used to test state (for classical /class-based components)

App.js

```html
// code omitted for brevity

 render() {
  return (
    <div data-test="component-app">
      <h1>App</h1>
      <button onClick={() => this.setState({ counter: this.state.counter + 1})} data-test="increment-button">I am a button</button>
      <h2 data-test="counterDisplay">{this.state.counter}</h2>
    </div>
  );
```

App.test.js

```html

test('the counter starts at 0', () => {
  const wrapper = setup();
  const initialCounterState = wrapper.state('counter');
  expect(initialCounterState).toBe(0);
})

test('the counter display is incremented by 1 on each button click', () => {
  const counter = 7;
  const wrapper = setup(null, { counter });
  const button = findByTestAttribute(wrapper, 'increment-button'); // used to find the button
  button.simulate('click'); // used to simulate a button click
  const counterDisplay = findByTestAttribute(wrapper, 'counterDisplay'); // used to find the counterDisplay
  expect(counterDisplay.text()).toContain(counter + 1) // checks //that the counter has been incremented by 1 (each time)
})


```

<hr>

**simulate()** - This method can be used to interact with a rendered element, for example, a button click can be simulated in a test with the following: 
```html
button.simulate('click');
``` 
**toMatchSnapshot()** - is used in snapshot tests
```html
 expect(wrapper).toMatchSnapshot();
```
Snapshot tests automatically gets saved into a snapshots folder that is created upon creation of the first snapshot test

**containsMatchingElement()**

**containsAllMatchingElements()** - is called on the wrapper object and takes an array of elements and returns true if all elements are found in the DOM tree e.g.
```html
it(‘should render the Display and Keypad components’, () => {
  expect(wrapper.containsAllMatchingElements([
  <Display displayValue={wrapper.instance().state.displayValue} />,
  <Keypad 
    callOperator={wrapper.instance().callOperators}
    numbers={wrapper.instance().state.numbers{
    operators={wrapper.instance().state.operators}
    setOperator={wrapper.instance().setOperator}
    updateDisplay={wrapper.instance().updateDisplay} />
  })).toEqual(true);
});
```
only instance() is used to access methods
instance().state - is used to access variables


**instance()** - this method can be used on the wrapper object to access state variables and methods of a component e.g.
```html
it('should render an instance of the Display Component', () => {
  expect(wrapper.containsMatchingElement(
    <Display displayValue={wrapper.instance().state.displayValue} />
  )).toEqual(true);
});
```

**setProps()** - is called on the wrapper object and allows the developer to fake a value of a prop for the purpose of a test e.g.
```html
it(‘renders the value of displayValue’ . () => {
  wrapper.setProps({ displayValue: ’hi’ });
expect(wrapper.text()).toEqual(‘hi’);
});
```

**text()** - is also called on the wrapper object and allows the developer to check that the prop value that they faked is actually being rendered 
It returns a string of the rendered text of the current render tree e.g.
```html
it('renders the value of displayValue', () => {
  wrapper.setProps({ displayValue: 'bye' });
expect(wrapper.text()).toEqual('bye');
});
```

**jest.fn()** is a Jest function that creates a mock function. Mock functions allow developers to test the links between code by erasing the actual implementation of a function and capturing calls to the function and the parameters passed in those calls. An example of jest.fn() in use:
```html

describe('Keypad', () => {
  let wrapper;

  beforeEach(() => {
    wrapper = shallow(
      <Keypad
        callOperator={jest.fn()}
        numbers={[]}
        operators={[]}
        setOperator={jest.fn()}
        updateDisplay={jest.fn()}
      />
    );
  });
```
Jest.fn() is used because the methods callOperator(), setOperator() and updateDisplay() belong in the Calculator component and the Keypad component doesn't have access to these methods


**jest.spyOn()**

**toHaveBeenCalledTimes()**

**mount()** does a full render of the DOM - doesn't just render one level deep. Therefore, mount can be used in the following scenarios:
* to test componentDidMount() 
* to test componentDidUpdate()
* to test DOM rendering
* to test the behaviour of child components
* to test component lifecycle

Add mount to spec files like so:
```html
import { mount } from 'enzyme';
```


<hr>

### PropTypes

Add prop-types:
```html
import PropTypes from 'prop-types';
```

An example of how to specify what type a prop should be:
```html
Display.propTypes = { displayValue: PropTypes.string.isRequired };
```

This specifies that the prop received should be of type 'string'


prop-types allow developers to declare the intended types of properties(props) that are passed to components. 
If the prop that is received is not what was expected (as specified in the declaration), an error is thrown.

<hr>

## Snapshot Testing

* Snapshot testing is a feature of Jest
* Allows you to freeze a set of code or output at a certain point in time. Then the test will compare any future output against that snapshot or frozen output and the test will fail if there have been any changes
* Snapshot testing isn't part of TDD i.e. tdd can't be used with snapshots as snapshots are written after a component has been written
* Snapshots are brittle - any change to a component will break the snapshot test and so the snapshots tests break so frequently that it is easy to simply ignore the failures and update the snapshot regardless of what the changes were
* Snapshots don't have any test intent - no description in the test
* In general if snapshot testing is used, it’s used alongside the more traditional types of tests.

Why use snapshots, - quite simply, they quickly alert the developer to any unexpected change in the code.

A Snapshot serializer must be used:

```html
npm i -d enzyme-to-json
```

An example of a snapshot test:

App.test.js

```html
// Code omitted for brevity

describe('App', () => {
    let wrapper;

    beforeEach(() => wrapper = shallow(<App />));

    it('should render correctly', () => {
        expect(wrapper).toMatchSnapshot());
    }
}

```

When snapshot tests break due to changes in the UI, we can update the snapshot by either:
running 'u' in the test runner, or by running the following in the command line:
```html
npm test --updateSnapshot
```
### Testing click events

When writing tests to check for calls to the individual methods when the event occurs - e.g. a button click, these tests should be put in their own describe blocks and mount should be used.
This is because the behaviour of the child components is to be tested

Testing click events involves the following:

* Creating a spy using the Jest spyOn method for the method under test
* Calling forceUpdate() to re-render the instance within the test
* Using Enzyme’s simulate() method on the corresponding component to create the event
