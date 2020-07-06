# Deployment

### Deploying with Heroku








### Deploying with Surge.sh

Surge can be used to deploy client-side applications and static sites.
(Wouldn't work with full-stack application)

Install surge globally:

```html
npm install -g surge
```

Inside of the directory we want to deploy, run:
```html
npm run build
```
This outputs a production-ready app inside the ‘build’ directory
Cd into the build directory and simply run:
```html
surge
```

which will publish the project.
Obviously, the project needs to be production-ready by this point.

### Deploying with Netlify