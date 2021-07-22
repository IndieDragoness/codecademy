# Codecademy
 Various projects from my codecademy coursework/certification. Note that the code is demonstrative, and not meant to be completely functional.

# CSS
See the Specificity section below for best practices on which style to use.

CSS can be applied as either a ruleset or inline. Both contain declarations, which are at the core of CSS. They apply a style to the selected 
element. For example, selecting the `<p>` element and styling it in blue is shown in the two methods below.

CSS Ruleset:
```
p {
    color: blue;
}
```

CSS Inline (Adding CSS code directly into HTML, Not Best Practice but good to Know):
```
<p style='color: blue;'>Hello World!</p>
<p style='color: red; font-size: 20px;'>I'm learning to code!</p>
```

HTML allows you to write CSS code in its own dedicated section with a `<style>` element nested inside of the `<head>` element.
The CSS code inside the `<style>` element is often referred to as an internal stylesheet. Internal stylesheets are still not best practice.

Internal Stylesheet in an HTML documents, this changes the color of all paragraph text to red and size of text to 20 pixels:
```
<head>
  <style>
    p {
      color: red;
      font-size: 20px;
    }
  </style>
</head>
```

## Dont Mix CSS and HTML
If possible, at least. Store HTML and CSS in separate files using an external stylesheet `.css`, usually called `style.css`.

## Linking a CSS File
You can use the `<link>` element to link HTML and CSS files together. The `<link>` must be placed in the header of the HTML file.
It is a self-closing tag that requires the following:

* `href`: like the anchor element, the value of this attribute must be the address, or path, to the CSS file.
* `rel`: this attribute describes the relationship between the HTML file and the CSS file. Because you are linking to a stylesheet, the value should be set to stylesheet.

Example using URL:
```
<link href='https://www.codecademy.com/stylesheets/style.css' rel='stylesheet'>
```

Example using relative path to local file:
```
<link href='./style.css' rel='stylesheet'>
```

## CSS Ruleset Terms
* Selector: The beginning of the ruleset used to target the element that will be styled.
* Declaration Block: The code in-between (and including) the curly braces (`{ }`) that contains the CSS declaration(s).
* Declaration: The group name for a property and value pair that applies a style to the selected element.
* Property: The first part of the declaration that signifies what visual characteristic of the element is to be modified.
* Value: The second part of the declaration that signifies the value of the property.

## CSS Inline Terms
* Opening Tag: The start of an HTML element. This is the element that will be styled.
* Attribute: The style attribute is used to add CSS inline styles to an HTML element.
* Declaration: The group name for a property and value pair that applies a style to the selected element.
* Property: The first part of the declaration that signifies what visual characteristic of the element is to be modified.
* Value: The second part of the declaration that signifies the value of the property.

## Selectors
### Type
Type select selects all elements of a given type:
```
p {
    ...
}
h1 {
    ...
}

etc.
```

### Universal
Universal selector selects all elements of any type. Useful for resetting default browser styling or selecting all children of a
parent element:
```
* {
    ...
}
```

### Class
CSS is not limited to selecting elements by type; you can also select using the `class` HTML attribute. 
To select an HTML element by its class using CSS, a period (`.`) must be prepended to the class’s name. In HTML:
```
<p class='brand'>Sole Shoe Company</p>
```

In the CSS stylesheet, to access the `brand` class:
```
.brand {

}
```

You can also add more than one class name to an HTML's `class` attribute by separating them with a space:
```
.green {
  color: green;
}
 
.bold {
  font-weight: bold;
}

<h1 class='green bold'> ... </h1>
```

### ID
You can also select a single element of HTML for styling using the ID attribute `id`. Prepend with `#` in the stylesheet.
Single value, once per page:
```
#article-title {
  font-family: cursive;
}

<h1 id='article-title'> ... </h1>
```

### Attribute
The attribute selector can be used to target HTML elements that already contain certain attributes (or attribute values).

Basic syntax:
```
[href]{
   color: magenta;
}
```

Has some attribute value string parsing capabilities:
```
img[src*='winter'] {
  height: 50px;
}
 
img[src*='summer'] {
  height: 100px;
}

<img src='/images/seasons/cold/winter.jpg'>
<img src='/images/seasons/warm/summer.jpg'>
```

### Pseudo Class
When elements change due to user interaction. Examples are `:focus`, `:visited`, `:disabled`, and `:active`.
A pseudo-class can be attached to any selector and is always written as a colon `:` followed by a name.
In the following code, when the mouse hovers over a paragraph element it will have a lime-colored background.
```
p:hover {
    background-color: lime;
}
```

### Specificity
The order by which the browser decides which CSS styles will be displayed.

To make styles easy to edit, it’s best to style with a type selector, if possible. If not, add a class selector. If that is not specific enough, then consider using an ID selector.

The 'most specific' selector will win if an element has multiple types of selectors.

### Chaining
When writing CSS rules, it’s possible to require an HTML element to have two or more CSS selectors at the same time.
This is done by combining multiple selectors.

For example, if there was a `special` class for `<h1>` elements:
```
h1.special {
 
}
```

### Applying Style to Descendant Elements
In addition to chaining selectors to select elements, CSS also supports selecting elements that are nested within other HTML elements, also known as descendants.
```
<ul class='main-list'>
  <li> ... </li>
  <li> ... </li>
  <li> ... </li>
</ul>
```

The nested `<li>` elements are descendants of the `<ul>` element and can be selected with the descendant combinator like so:
```
.main-list li {
 
}
```
In other words:
```
parent-selector descendant-selector {
  declaration
}
```

### Applying Style to Multiple Elements
Use a comma to separate:
```
li,h5 {
  font-family: monospace;
}
```

## Visual Rules
### Font Family
1. The font specified must be installed on the user’s computer or downloaded with the site.
2. [Web safe fonts[(http://www.cssfontstack.com/) are a group of fonts supported across most browsers and operating systems.
3. Unless you are using web safe fonts, the font you choose may not appear the same between all browsers and operating systems.
4. When the name of a typeface consists of more than one word, it’s a best practice to enclose the typeface’s name in quotes, like so:
```
h1 {
  font-family: 'Courier New';
}
```

## Box Model
The box model; it may be preferable to use the model below this model (border-box model).
![Box Model](https://content.codecademy.com/courses/freelance-1/unit-4/diagram-boxmodel.svg)

## Border-box Model
Can avoid the dimensional issues that exist in the box model. To reset to the below model, use:
```
* {
  box-sizing: border-box;
}
```
![Border-box Model](https://content.codecademy.com/courses/web-101/htmlcss1-diagram__borderbox.svg)

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




