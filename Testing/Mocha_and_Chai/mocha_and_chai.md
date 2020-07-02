# Mocha and Chai

* Mocha is a testing framework
* Chai is an expectation library. Can be used in places of Node's assert function

### Installing mocha and chai

```html
npm install --save mocha chai
```

### Writing tests with Mocha and Chai

* Mocha provides describe() and it() functions
* describe() encapsulates expectations

```html
describe('DockingStation'), function() {
  it('releases a working bike', function() {


  });
});
```
* expect comes from the Chai library and is used to compare the result of the feature's implementation with the expectation

### Utilizing Chai

* The Chai library needs to be required at the top of the spec:
```html
const expect = require('chai').expect;
```
* The file containing the code under test also needs to be required:
```html
const nameOfApplicationCodeFile = require('../app/nameOfApplicationCodeFile'); 
```
### Running the test suite:
```html
npm test
```