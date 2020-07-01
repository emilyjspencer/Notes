## Supertest

Supertest can be used to test endpoints

To install Supertest:

```html
npm install supertest --save-dev
```

### Setting up the server 

Instead of listening to the Express application in the server file e.g. in server.js/app.js etc, it needs to be exported, without being listened to, so that each test file can start a server on its own, thereby preventing "Port in use" error messages from arising

```html
const express = require('express');
const app = express();

module.exports = app;
```

To use Supertest:

The app and Supertest must be required into the test file:

```html
const app = require('./server/);
const supertest = require('supertest');
const request = supertest(app);
```

Supertest's get() method can be used to send a GET request/test the sending of a GET request to the endpoint e.g.
```html
app.get('/books', async (req, res) => {
    res.json({ message: 'passing!' });
});

```

```html
it('gets the test endpoint', async done => {
    // send the GET request to the /books endpoint
    const res = await
    request.get('/books')'
    done();
})
```

Supertest thus provides responses from the endpoints

Both the HTTP status and the response body can be tested e.g.

```html
it('gets the test endpoint', async done => {
    const response = await request.get('/books');

    expect(response.status).toBe(200);
    expect(response.body.message).toBe('passing');
});
```