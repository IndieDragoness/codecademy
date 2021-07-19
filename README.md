# Codecademy
 Various projects from my codecademy coursework/certification. Note that the code is demonstrative, and not meant to be completely functional.

# PHP in HTML
You can embed PHP scripts into HTML documents with the opening tag `<?php` and closing tag `?>`. Use the `.php` extension instead of the `.html` extension.

## Superglobals
PHP scripts usually have access to variables called superglobals, which provide information that's especially useful in forms.
* https://www.php.net/manual/en/language.variables.superglobals.php

## Running in Terminal
To run a `.php` file in the terminal, enter `php <filename>.php`.

## GET
In HTML, setting a form’s `method` attribute to `"get"` specifies that you would like the form to be submitted using the GET method.
When using this method, the form entries are passed as parameters in a URL query string.

## POST
In HTML, setting a form’s `method` attribute to `"post"` specifies that you would like the form to be submitted using the POST method.
When using POST to submit forms, you will not see the URL change. The form data is sent using the headers of the HTTP request instead of URL parameters.

## Comparison Operators
Comparison operators evaluate a relationship between two operands and return a boolean value.
* The less than operator (<)
* The less than or equal to operator (<=)
* The greater than operator (>)
* The greater than or equal to operator (>=)
* The Identical operator (===)
* The not identical operator (!==)

## Regex
Ignoring a special Character (`\`): If you need to ignore something, like `?`, add a `\` in front of it. `\?` is just a regular question mark.

Literals: Match exactly. For instance, `a` would match `a`'s. `bark` would match `bark`.

Alternation (the `|` symbol): Match more than one thing at a time. `baboons|gorillas` will match `baboons` or `gorillas`.

Character Sets (brackets `[]`): Allow us to match one character from a series of characters, allowing for matches with incorrect or different spellings.

Wildcards (`.`): Matches anything.

Ranges (`-`): Make a match without having to type out each individual character. In example, `[abc]` is equivalent to `[a-c]`.

Shorthand Character Classes (Usually a slash plus a letter, like `\w`):
* `\w` which is equivalent to `[A-Za-z0-9_]`
* `\d` represents `[0-9]`
* `\s` which is the 'whitespace character' representing `[ \t\r\n\f\v]`
* `\W` which is a 'non-word character'
* `\D` The 'non-digit character' represents the regex range `[^ \t\r\n\f\v]`, matching any character that is not included in the range represented by `\s`.

Grouping/Capture Groups (Denoted with `()`): Captures the substring from matched text. For example `I love (gorillas|baboons)` will match either `I love gorillas` or `I love baboons`.

Quantifiers, Forced (`{}`): Instead of doing `\w\w\w\w\w\w\w`, do `\w{7}`. Or if you want a range, `\w{4,7}` to match at least 4, but at most 7.

Quantifiers, Optional (`?`): Indicate regex is optional, placed after the regex character. For example, `humou?r` matches `humo` then either 0 or 1 occurrences of the letter `u`.

Quantifiers, 0 or More, 1 or More (Kleene Star `*` or Kleene Plus `+`): Matches the preceding character `0` or more times. `meo*w` will match the characters `me` followed by `0` or more `o`'s, followed by `w`.
Thus we could match `mew`, `meow`, `meooow`, and `meoooooooooow`. The regex `meo+w` will match the characters `me` followed by `1` or more `o`'s, followed by a `w`.
This would match `meow`, `meooow`, and `meoooooooooow` (but not `mew`).

Anchors (`^`, `$`): Used to match text at the start and the end of a string, respectively.
For example, `^Monkeys: my mortal enemy$` will completely match `Monkeys: my mortal enemy` but not match `Spider Monkeys: my mortal enemy in the wild`.
`^` ensures matched text begins with `Monkeys`, and the `$` ensures the matched text ends with `enemy`.

## Input Sanitization and Verification
The builtin `filter_var()` is very useful for both sanitizing inputs as well as verifying them. For example, it has an optional flag for emails.

### filter_var()
The `filter_var()` builtin accepts an optional third argument that fine-tunes the operation of a given filter.

## Classes in PHP
To define/instantiate a class and class variables in PHP:
```
<?php

// Defining the class
class Beverage {
  public $temperature, $color, $opacity;
  private $this_is_private;
}

// Instantiating the class
$tea = new Beverage();

// Assigning a value to a class variable
$tea->temperature = "hot";

// Accessing the class variable
echo $tea->temperature;
```

### Constructor Method for Classes
A constructor method is one of several magic methods provided by PHP. This method is automatically called when an object is instantiated. Special name `__construct`.

```
<?php

class Pet {
  public $name;
  function __construct($name) {
    $this->name = $name;
  }
} 
$dog = new Pet("Lassie");
echo $dog->name; // Prints: Lassie
```

### Inheritance
```
<?php
class Beverage {
  public $temperature;
  
  function getInfo() {
    return "This beverage is $this->temperature.";
  }
}

class Milk extends Beverage { // Milk is child, Beverage is parent
  function __construct() {
    $this->temperature = "cold";
  }
  function getInfo() {
    return "This beverage is $this->temperature. I like my milk this way.";
  }
}
```

### Overloading Methods
A method can be overridden by defining a new method with the same name as the original. The parent implementation can be called with `parent::`.
```
class Milk extends Beverage {
  function __construct() {
    $this->temperature = "cold";
  }
  function getInfo() { // This replaces the getInfo() in Beverage
    return "This beverage is $this->temperature. I like my milk this way.";
  }
}
```

### Visibility
The `private` definition will restrict variables to visible only within the class they are defined in. This means even child classes won't have access.
To allow child classes to have access to `private` variables, set the visiblity to `protected` instead of `private`

### Getters and Setters
The concept of only accessing properties through methods is commonly referred to as using getters and setters. Good for adding logic to determine what
things can be set to etc.
```
<?php
class Beverage {
  private $color;
  function setColor($color_input){
    $color_input = strtolower($color_input);
    $this->color = $color_input;
  }
  function getColor(){
    return $this->color;
  }
}

$soda = new Beverage();
```

### Static Members
When a member is intended to be used statically (as a holder of utility functions, never instantiated), we add the keyword `static` to its definition.
```
<?php
class AdamsUtils {
  public static $the_answer = 42;
  public static function addTowel($string) {
    return $string . " and a towel.";
  }
}

$items = "I brought apples";

// Access statically using ::
echo AdamsUtils::$the_answer;
echo AdamsUtils::addTowel($items);
```

# Definitions
1. Front-end: The portion of the website that is sent to the user/users browser. The 'Store front'. The front-end of a website consists of JavaScript, CSS, HTML, images, and other static assets sent to the client.
2. Client: When we navigate to a website the browser is the client, and it sends a request to the back-end for all the assets needed to view and interact with the website.
3. Back-end: The portion of the website that supports operations requested by the front-end. The back-end consists of a web server and all the logic and data needed to create and maintain a website or web application.
4. Web Server (Back-end): a web server is a computer or program which listens for requests from clients and sends back responses. This component is well suited to handling delivery of static content.
5. Application Server (Back-end): this is actually often a collection of programming logic which is needed to deliver dynamic content to a client. The application server will often handle other tasks such as site security and interacting with data.
6. Data Base (Back-end): important information like usernames and passwords has to be stored and accessed somewhere. A large web application will often have multiple databases to store all different types of data needed to run the site smoothly.
7. PHP (Back-end): PHP is a back-end language. PHP can be used to generate HTML files. We embed PHP scripts within HTML by inserting PHP code between the opening (`<?php`) and closing (`?>`) tags. Presenting and interacting with HTML is one of the primary uses of PHP.




