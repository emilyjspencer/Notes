### Notes

Create a spec folder with the following command:

```
rspec --init
```

This creates a spec_helper.rb file and a .rspec file

* Add dependencies by adding said dependencies to the Gemfile.
* Create a Gemfile with the following command:
```
bundle init
```
* Find the latest versions by visiting the RubyGems website.
* Copy and paste the correct versions into the Gemfile
* Install the listed dependencies with the following command:
```
bundle install
```

* Let statements

Use let statements to DRY up code - i.e. avoid writing repeated lines of code in the 'setup' phase of our tests:

```
let(:dockingstation) { DockingStation.new }
```
can be placed at the top of the spec file, rather than having 'dockingstation = DockingStation.new' in every single test of the spec file



# Use of doubles 

**What is a double?**

A double is a mock object that stands in for a real object in a test suite

**What is the purpose of using doubles**

Use a double as soon as another class/object is referred to in a class e.g.DockingStation - referring to a bike - use a double

**Verifying doubles/instance doubles**

Can be used to 'overcome the limitations of the London style of mocking', so to speak.
An error will be thrown if the methods that are defined on the double, don't exist in the actual class
Define an instance double by using the instance_double keyword


**Creating doubles**

* Use let()
* Here, a double of the Person class, called stuntdouble has been created:
```html
let(:stuntdouble) { double(“Person”) } 
```
* We can also define upon creation of the double, the methods that the double can respond to, as well as their return values
```html
let(:stuntdouble) { double("Person", do_back_flip: "No way") }
```
* Here, the double can respond to the do_back_flip() method with "No way"
* The double's interface should mimic the exact interface of the object does using the double() method - ie any of the methods that are available to the actor object can be called on the double

Below, I have written one test in a variety of ways:

```html
RSpec.describe 'a random double' do
  it 'only allows defined methods to be invoked' do
    stunt_double = double("Angelina Jolie", fly_through_air: "Whooosh", scale_building: "Awesome") 
    stunt_double.fly_through_air
    stunt_double.scale_building  
    expect(stunt_double.fly_through_air).to eq "Whooosh"
    expect(stunt_double.scale_building).to eq "Awesome"
  end  
end 
```
* Here, we are stubbing at the point of creation.
The test double is created and the methods that it responds to with their return values are defined
* The double can respond to the method fly_through_air() and respond with "whoosh"
* The double can also respond to the method scale_building() and respond with "Awesome"
* The test passes because the double can respond to the two methods defined on it with the correct responses

#### The above test could be written in a different way, like so:

```html
RSpec.describe ' a random double' do
  it 'only allows defined methods to be invoked' do
    stunt_double = double("Angelina Jolie")
    allow(stunt_double).to receive_messages(fly_through_air: "Whooosh", scale_building: "Awesome")
    stunt_double.fly_through_air
    stunt_double.scale_building
    expect(stunt_double.scale_building).to eq "Awesome"
    expect(stunt_double.fly_through_air).to eq "Whooosh"
  end
end 

```

This test looks almost the same. It is just slightly longer because instead of defining the methods that the double can respond to and their respective return values on the same line that the double is defined, an extra line is used with the allow().to receive().and_return 
syntax

```html
RSpec.describe 'a random double' do
  it 'only allows defined methods to be invoked' do
    stunt_double = double("Angelina Jolie")
    allow(stunt_double).to receive(:fly_through_air).and_return "Whoooosh"
    allow(stunt_double).to receive(:scale_building).and_return "Awesome"
    expect(stunt_double.fly_through_air).to eq "Whoooosh"
    expect(stunt_double.scale_building).to eq "Awesome"
  end
end 
```

Again, the test looks similar, excpet two lines use the allow().to receive().and return 
are used so that each method and return value are on their own lines

The test could also be written like so:

```html
RSpec.describe 'a random double' do
  it 'only allows defined methods to be invoked' do
    stunt_double = double("Angelina Jolie")
    allow(stunt_double).to receive(:fly_through_air) { "Whoooosh"}
    allow(stunt_double).to receive(:scale_building) { "Awesome"}
    expect(stunt_double.fly_through_air).to eq "Whoooosh"
    expect(stunt_double.scale_building).to eq "Awesome"
  end
end 
```

Here, curly braces are used instead of the 'and_return' syntax

* Using doubles to 'stand' in for another class.
* I have an actor class and a movie class.
* The movie class is dependent on the actor class because it refers to the actor class and its methods in the movie class's own start_shooting() method.
* A double will therefore be used to simulate or stand in for an actor object 

movie.rb

```html
require_relative 'actor'

class Movie
  attr_reader :actor  

  def initialize(actor)
    @actor = actor 
  end

  def start_shooting
    if actor.ready?
      puts actor.act
      puts actor.act2
      actor.jump_out_of_fake_window
    end
  end
end

actor = Actor.new("Angelina Jolie")
movie = Movie.new(actor)
puts movie.start_shooting
``` 

actor.rb

```html
class Actor 
  def initialize(name)
    @name = name
  end

  def ready?
    sleep(3)
    true
  end

  def act 
    puts "Why did you leave me?"
  end

  def forget_lines
   puts  "Argh, what was the line?"
  end

  def act2
    puts "I can't live without you"
  end 

  def jump_out_of_fake_window
    "Actor jumps out of fake window onto mats"
  end 
end
```

movie_spec.rb
```html
require 'movie'

describe Movie do
  let(:stuntdouble) { double("Anglina Jolie", ready?: true, act: "Wobble", act2: "Cry me a river", jump_out_of_fake_window: "land") }
  subject { described_class.new(stuntdouble) }

  describe '#start_shooting method' do
    it 'expects an actor to do 3 things' do
      expect(stuntdouble).to receive(:ready?)
      expect(stuntdouble).to receive(:act)
      expect(stuntdouble).to receive(:act2)
      expect(stuntdouble).to receive(:jump_out_of_fake_window)
      subject.start_shooting
    end 
  end 
end
```

**Receive counts**

Receive counts can be used to check that a method has been invoked a certain number of times
e.g. once twice etc

```html
expect(stuntdouble).to receive(:act).once
expect(stuntdouble).to receive(:act2).exactly(3).times
expect(stundtdouble).to receive(:act).twice
```

**Allow syntax**

* The allow syntax allows us to define what methods the doubles can respond to/have available to them
* The allow syntax can also be used to stub out/replace/mock methods on real ruby objects.
* An example:

```html
it 'can stub methods on a real Ruby object' do
  array = [1,2,3,4,5]
  allow(array).to receive(:sum).and_return(20)
  expect(array.sum).to eq(20)
end
```
We'd expect the sum of the array to total to 15, not 20, but using the allow syntax allows us to force the result. Our test then passes 

```html
it 'can stub the length method' do
  array = [4, 5, 6]
  allow(array).to receive(:length).and_return 20  
  expect(array.length).to eq 20
end 

We'd expect the result to be 3, but we force the result to be 20, so the test passes

* Emulating the behaviour of an array, without actually using an array
No array in the test at all 

```html

RSpec.describe 'Friends' do
  it 'can return multiple return values in sequence' do
   mock_array = double
   allow(mock_array).to receive(:pop).and_return("Ross", "Joey", "Chandler", "Rachel", "Monica", "Phoebe", nil)
   expect(mock_array.pop).to eq("Ross")
   expect(mock_array.pop).to eq("Joey")
   expect(mock_array.pop).to eq("Chandler")
   expect(mock_array.pop).to eq("Rachel")
   expect(mock_array.pop).to eq("Monica")
   expect(mock_array.pop).to eq("Phoebe")
   expect(mock_array.pop).to be_nil 
  end
end 
```

**Customizing return values**


```html
describe Something do
  it 'can return differen values depending on the argument' do
    my_array = double
    allow(my_array).to receive(:first).with(no_args).and_return(1)
    allow(my_array).to receive(:first).with(1).and_return([6])
    allow(my_array).to receive(:first).with(2).and_return([6, 2])
    allow(my_array).to receive(:first).with(3).and_return([6, 2, 20])
    allow(my_array).to receive(:first).with(6).and_return([6,2 20])
    allow(my_array).to receive(:first).with(be >= 3).and_return([6,2 20])
    expect(my_array.first).to eq(6)
    expect(my_array.first(1)).to eq([6])
    expect(my_array.first(2)).to eq([6, 2]))
    expect(my_array.first(3)).to eq([6, 2, 20])
    expect(my_array.first(200)).to eq([6, 2, 20])
  end
end 
```

**Use of instance doubles/verifying doubles**

* Instance doubles/verifying doubles allow us to overcome the limitations associated with the London style of testing.

* Instead of using 'double', as I've done here:
```html
describe Movie do
  let(:stuntdouble) { double("Anglina Jolie", ready?: true, act: "Wobble", act2: "Cry me a river", jump_out_of_fake_window: "splat") }
```

replace it with 'instance_double':

```html
describe Movie do
  let(:stuntdouble) { instance_double("Anglina Jolie", ready?: true, act: "Wobble", act2: "Cry me a river", jump_out_of_fake_window: "land") }
```
Another example - from the takeaway challenge:

```html
let(:menu) { instance_double("Menu", print_items: items_prices) }
```

Without using a verifying double/instance double - using a regular double, if a method is defined on a double that isn't actually defined on the class, the test would pass.
However, if a verifying double/instance double is used and the method isn't defined on the actual class and only on the double, when running rspec - an error will be thrown.

In my takeaway example, running rspec when the actual menu class doesn't have a print_items method results in an error message such as:

```html
"The Menu class does not implement the instance method print_items"
```


With asynchronous operations e.g. fetching data from a database, or making API calls, 
these could take some length of time.
Tests shouldn't be going through these intensive operations, e.g. actually making API calls, actually fetching data from a database, or sending text messages using the Twilio gem (takeaway challenge).
These processes slow down the speed at which the tests perform.
So, we can mock these processes or interactions with these third-party services etc. 

Mocking can also be used in order to test classes in isolation.
Oftentimes, classes will be dependent on one another, and thus they are tightly coupled.
This tight coupling means that if tests break in one class, tests in the classes on which
that class depends, also break
We can thus use mock objects to stand in for a class 

Generally, mocking allows you to mimic the behaviour of an object and return values that you want, for the purpose of the test

TDD benefits

One benefit of TDD is that it allows you to aviod writing all of the logic up front, as it allows us to mock other objects/classes in the system.
An example could be if I have four classes that interact with each other.
I don't want to write the logic for all four right away, I can just write the logic for one class and mock our the other three.

ratings_spec.rb
```html
require 'ratings'

describe Ratings do
  it 'rates a movie' do
    movie = double("Annie Hall", :rating => 9)
    expect(subject.rate(movie)).to eq('This movie has a rating of 9')
  end
end
```

ratings.rb
```html
class Ratings
  def rate(movie)  
    return "This movie has a rating of #{movie.rating}"
  end
end
```


Configuring simplecov - to monitor test coverage

In the spec_helper.rb - add the following:

```
RSpec.configure do |config|

  require 'simplecov'
require 'simplecov-console'

SimpleCov.formatter = SimpleCov::Formatter::MultiFormatter.new([
  SimpleCov::Formatter::Console,
  # Want a nice code coverage website? Uncomment this next line!
  # SimpleCov::Formatter::HTMLFormatter
])
SimpleCov.start

RSpec.configure do |config|
  config.after(:suite) do
    puts
    puts "\e[33mHave you considered running rubocop? It will help you improve your code!\e[0m"
    puts "\e[33mTry it now! Just run: rubocop\e[0m"
  end
end

```

In the Gemfile

```


source "https://rubygems.org"


gem 'rake'
gem 'rubocop', '0.71.0'

group :test do
  gem 'rspec'
  gem 'simplecov' 
  gem 'simplecov-console'
end



```