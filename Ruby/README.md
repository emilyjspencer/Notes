# Notes 


###  Loops
```html
i = 20
loop do
  i -= 1
  next if i % 2 == 0
  puts "#{i}"
  break if i <= 0
end
```


### Modules

```html
module Run
    def run()
      return "I am running"
    end
  end
  
  class Cat
    include Run
    def initialize(name)
      @name = name
    end
    def name
        return "My name is " + @name + "!"
    end
  end
  
  class Dog
    include Run
    def initialize(name)
      @name = name
    end
    def name
        return "My name is " + @name + "!"
    end
  end
  
  class Duck
    include Run
    def initialize(sound)
      @sound = sound
    end
    def make_sound
        return "I go " + @sound + "!"
    end
  end 
  
  cat = Cat.new("Robbie")
  p cat
  cat.run
  cat.name
  dog = Dog.new("Bob")
  dog.name
  dog.run
  duck = Duck.new("quack")
  duck.make_sound
  duck.run
```

## Arrays

**Convert an array of strings to an array of integers**

```html
["", "2", "4", "188"].map(&:to_i)

#=> [0, 2, 4, 188]
```


**Moving arrays**

```html
array = [ 3,4,16,34,24,12,10, 23,59,10]

moved = array.insert(3, array.delete_at(7))
print moved 
```

**Iterating over multidimensional arrays**

```html
# Iterate over the following nested/multidimensional array

nested_students = [
  ["Mike", "Grade 10", "A average"],
  ["Tim", "Grade 10", "C average"],
  ["Monique", "Grade 11", "B average", "Class President"]
]

nested_students.each { |a|
  a.each { |b|
    puts b  }
}
```

**Pig Latin**

```html
# Pig Latin in Ruby

# Remove the first letter of each word and add it to end of word, then
# append 'ay' to the end of each word


def pig_it text
# remove first character
  removed = text.split.map { |word| 
  word.chars.rotate.join }.join(' ')
  # add 'ay' to the end
  pig = removed.split.map { |word|
    word.gsub!(/$/, "ay") }.join(' ')
  return pig 
  
end

pig_it

# pig_it("hello world") #=> "ellohay orldway"
```

**Select**

```html
list_of_numbers = [17, 2, -1, 88, 7]

less_than_ten = list_of_numbers.select { |num| num < 10 }

puts less_than_ten
``` 
**Find average**

```html
test_scores = [55, 78, 67, 92, 100, 25, 13, 67, 34, 78, 95, 90, 43, 67, 89, 90, 91, 92, 56,]

# Find the average test score

# Set up the accumulator
total = 0
# Loop through array to find total score
test_scores.each { |num| total += num}
# Find average by dividing total by number of scores
# to_f called on total because integer division by default rounds the answer
# down to the nearest whole number. 
average = total.to_f / test_scores.length
# Round the average up to the closest whole number
average = average.ceil
puts average
``` 

**Sum array**

```html
#Add an array of numbers in RUBY

arr = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]

sum = 0

arr.each { |num|
    sum += num }
    
puts sum 
```


**Shuffle**

```html
array = [ 3,4,16,34, "bat", 24,12,10, 23,59,10, "cat"]


moved = array.insert(1, array.delete_at(7)).insert(2, array.delete_at(4)).insert(0, array.delete_at(5)).insert(8, array.delete_at(6))
print moved
```

# Film ratings hash

```html
film_ratings = {
  "Out of Africa" => 10,
  "Mamma Mia" => 5,
  "The Theory of Everything" => 10,
  "Matilda" => 8,
  "Breakfast at Tiffany" => 8,
  "Annie Hall" => 9,
  "As Good As It Gets" => 8,
  "Heathers" => 6,
  "Rain Man" => 8,
  "Scary Movie" => 2,
  "She Devil" => 2,
  "Mary Poppins" => 10
}
```
 

 # To output all ratings(values) 
 puts film_ratings.values
 # To output all movies titles
 puts film_ratings.keys
 # Iterate through the hash
 film_ratings.each { |title, rating| puts "The movies #{title} 
 has a rating of: #{rating}" }
 # To find the average rating for all movies
 ```html
 ratings = film_ratings.values
 puts ratings 
 array = []
 pushed_ratings = array.push(ratings)
 puts pushed_ratings
 puts pushed_ratings.inspect
 average_rating = pushed_ratings.flatten
 flattened_average_rating = average_rating.inject(0) {| total,x| total + x }
 average_rating.inspect
 puts flattened_average_rating / average_rating.length
 ```

 **Strings**

 **Reverse a string**
```html
string = "Irish keepsake bears"
string.reverse
#=> "sraeb ekaspeek nsirI"
```

 **Return vowels**

```html
# Return vowels from string

def solve(s)
# return only vowels
s.chars.select { |vowel|   vowel =~ /[aeiou]/ }
end

p solve("All around me are familiar faces
Worn out places, worn out faces") 

#=> ["a", "o", "u", "e", "a", "e", "a", "i", "i", "a", "a", "e", "o", "o", "u", "a", "e", "o", "o", "u", "a", "e"]
```

 **Encrypt password**

 ```html
 require 'digest'

class Person
  def initialize(name)
    @name = name
  end

  def password=(password)
    @password = password
  end

  def encrypted_password
    Digest::SHA2.hexdigest(@password)
  end
end

person = Person.new("Anja")
person.password = "super secret"
puts person.encrypted_password
``` 

**Adding to hashes**

```html
books = {}

books[:frankenstein] = "Mary Shelley"
books[:the_path] = "Professor Michael Puett"
books[:proust_and_the_squid] = "Maryanne Wolf" 
books[:spark!] = "Dr John Ratey"
books[:the_secret] = "Rhonda Byrne"
books[:option_b] = "Sheryl Sandberg"
books[:through_the_language_glass] = "Guy Deutscher"
books[:the_romans_for_dummies] = "Guy de la Bedoyérè"
books[:on_beauty] = "Zadie Smith"

puts books

# => {:frankenstein=>"Mary Shelley", :the_path=>"Professor Michael Puett", 
# :proust_and_the_squid=>"Maryanne Wolf", :spark!=>"Dr John Ratey", 
# :the_secret=>"Rhonda Byrne", :option_b=>"Sheryl Sandberg", 
# :through_the_language_glass=>"Guy Deutscher", 
# :the_romans_for_dummies=>"Guy de la Bedoyérè", :on_beauty=>"Zadie Smith"}
```

# Accessing values from a hash nested inside of an array
```
cards_array = [{
        "two" => 2,
         "three" => 3,
         "four" => 4,
         "five" => 5, 
         "six" => 6,
         "seven" => 7,
         "eight" => 8,
         "nine" => 9,
          "ten" => 10,
         "jack" => 10,
         "queen" => 10,
         "king" => 10,
         "ace" => 11}
         ]

puts cards_array[0]["two"].to_i #=> 2
puts cards_array[0]["king"].to_i #=> 10
puts cards_array[0]["ace"].to_i #=> 11
``` 

**each_cons**

```html
(1..10).each_cons(3) {
  |x| p x
}

#=> 
[1, 2, 3]
[2, 3, 4]
[3, 4, 5]
[4, 5, 6]
[5, 6, 7]
[6, 7, 8]
[7, 8, 9]
[8, 9, 10]

```

**find()**

(1..35).find {
  |x| x % 5 == 0 and x % 7 == 0
}

#=> 35


## Reduce and inject 

# Use reduce/inject to find the sum of a range of numbers
# inclusive range
puts (5..10).reduce(:+)                             
#=> 45
puts (5..10).inject(:+)
#=>  45
# Using a block:
puts (5..10).inject { |sum, n| sum + n }
#=> 45
puts (5..10).reduce { |sum, n| sum + n }
#=> 45

# Multiply a range of numbers
puts (5..10).reduce(1, :*)                         
#=> 151200
# Is the same as multiplying 5 x 6 x 7 x 8 x 9 x 10

puts (5..10).reduce(2, :*)
#=> multiplies the total by 2 so ------- 302400

# Same using a block
puts (5..10).inject(1) { |product, n| product * n } #=> 151200
puts (5..10).reduce(2) { |product, n| product * n } #=> 302400

# Find the longest word

```html
longest_word = ["law", "of", "attraction"].inject do |a, b|
   a.length > b.length ? a : b
end
puts longest_word 
#=> "attraction"

```

# any?

```html
["cat",  "dog", "rabbit"].any? {
  |word| word.length >= 4
}
#=> true
```

# all?

```html
["cat",  "dog", "rabbit"].all? {
  |word| word.length >= 4
}
#=> false
```

# collect

```html

(1..10).collect { "sunny" }
#=> ["sunny", "sunny", "sunny", "sunny", "sunny", "sunny", "sunny", "sunny", "sunny", "sunny"]
```

# count

```html

numbers = [1, 2, 3, 4, 5, 2, 1, 4, 3, 2, 1]

numbers.count #=> 11

numbers.count(4) => 2

numbers.count {  |x| x % 2 == 0 }

#=> 5
```

# cycle

```html
words = ["bark", "woof", "moo"]

words.cycle(3) = ["bark", "woof", "moo", "bark", "woof", "moo", "bark", "woof", "moo"]

words.cycle { |x| puts x }
["bark", "woof", "moo", "bark", "woof", "moo", "bark", "woof", "moo", "bark", "woof", "moo",....]

to infinity
```

# detect (like find)

```html

(1..20).detect { |x| x % 5 == 0 and x % 4 == 0}

#=> 20
```

# drop

```html

numbers = [4, 5, 6, 7, 8, 9, 10]
numbers.drop(4)
#=> [8,9,10]
```

# ||=

||= is called a conditional assignment operator

c || = z 

If c is undefined or falsy - evalute z and set c to the result of the evaluation of z

If c is defined and evaluates to truthy, then don't evaluate z. No assignment takes place

# merge - is a hash method - allows you to merge hashes

```
hash1 = {name: 'emily'}
hash2 = {haircolour: 'brown'}
newhash = hash1.merge(hash2)
puts newhash

{:name=>"emily", :haircolour=>"brown"}
```


# Modules

```
require 'digest'

module Encryption
  def encrypt(string)
    Digest::SHA2.hexdigest(string)
  end
end

class Person
  include Encryption

  attr_reader :name
  attr_accessor :password

  def initialize(name)
    @name = name
  end 

  def encrypted_password
    encrypt(@password)
  end
end

person = Person.new("Emily")
person.password = "I need marmite butter in my life"
puts person.encrypted_password

#=> 98bd847f2f3dafa500d1602f778503502a21d50f411fd400a12bafe41996ac86
```