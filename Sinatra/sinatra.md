### Sinatra

* Sinatra is a lightweight web development framework that allows Ruby code to be run in the browser
* Based off of Rack

### Components of a Sinatra and PostgreSQL application

**Gemfile** - where dependencies are listed
* Create by running :
```html
bundle init
```

* Add gems to Gemfile:

```
source 'https://rubygems.org'

gem 'sinatra'
gem 'rspec'
gem 'capybara'
```
* Install the dependences by running:
```html
bundle install
```

* Initialize a spec folder by running:
```html
rspec --init
```
* The spec folder should contain the following:

* features folder - feature tests for testing user experience. Uses Capybara
* unit folder - houses unit tests for testing models. Uses RSpec
* spec_helper.rb - configures the test suite. Is run every time rspec is run
* .rspec file - configures the output of the rspec command itself. 

* **app.rb** - controller. 
* Defines the applications' HTTP interfact
* It is a Ruby Class that inherit from Sinatra::Base, which transforms the Ruby class into a web app by giving it a Rack-compatiable interface by inheriting from the 'base' of the Sinatra framework

Should contain the following:
```html
require 'sinatra/base'

class nameofthing < Sinatra::Base

  get '/' do
    .......
  end

  run! if app_file == $0
end
```

* **config.ru** file

```
require_relative "./app"

run nameofthing
```

* This file configures the rackup command to run the application in app.rb
* The application file is required, (this is defined in app.rb) 
* The bottom line uses **run** to start the application represented by the ruby class Application, which is defined in app.rb.


* **spec_helper.rb** - In the spec-helper, Capybara needs to be configured so that it can communicate with Sinatra by doing the following:

- Set the environment to "test".
- Bring in the contents of the app.rb file.
- Require all the testing gems (RSpec, Capybara, and the Capybara/RSpec package that lets them talk to each other).
- Tell Capybara that any instructions like visit('/') should be directed at the application called 'ApplicationName'
- 
Add the following to spec/spec_helper.rb:

```
# at the top of spec/spec_helper.rb

# Set the environment to "test"
ENV['RACK_ENV'] = 'test'

# Bring in the contents of the `app.rb` file. The below is equivalent to: require_relative '../app.rb'
require File.join(File.dirname(__FILE__), '..', 'app.rb')

# Require all the testing gems
require 'capybara'
require 'capybara/rspec'
require 'rspec'

# Tell Capybara to talk to Application
Capybara.app = ApplicationName

```


**Creating views**

* Sinatra ships with the templating engine ERB - which stands for Embedded Ruby. 
* Templating engines allow us to create views and modify the content of HTML by literally embedded Ruby code in our HTML with the use of tags:
1 - the substitution tag <%=
2 - the scripting tag <%

The scripting tag is used with if statements

* Views are created and placed in the views folder
* Views have a file extension of .erb
* These files are rendered using the erb() method