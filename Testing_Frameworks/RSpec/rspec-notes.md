### Notes

# Use of doubles 

**What is a double?**

A double is a mock object that stands in for a real object in a test suite

**What is the purpose of using doubles**


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
Here, we are stubbing at the point of creation.
The test double is created and the methods that it responds to with their return values are defined
The double can respond to the method fly_through_air() and respond with "whoosh"
The double can also respond to the method scale_building() and respond with "Awesome"
The test passes because the double can respond to the two methods defined on it with the correct responses

# The above test could be written in a different way, like so:

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
* A double will there be used to simulate or stand in for an actor object  - not going to use a real actor object, for several reasons - 

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

``html
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
  let(:stuntdouble) { double("Anglina Jolie", ready?: true, act: "Wobble", act2: "Cry me a river", jump_out_of_fake_window: "splat") }
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

Use of instance doubles

Use of spies

Use of class doubles 


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

TDD benefits

One benefit of TDD is that it allows you to aviod writing all of the logic up front, as it allows us to mock other objects/classes in the system.
An example could be if I have four classes that interact with each other.
I don't want to write the logic for all four right away, I can just write the logic for one class and mock our the other three.
