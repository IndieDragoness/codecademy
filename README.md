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

## Flow of HTML
A browser renders things left to right, top to bottom, in the same order they exist in the HTML document.
In addition to style properties, there's positional properties (where elements are located on a page).
Each of these properties allow us to position and view elements on a web page.

### Position
The default position of an element can be changed by setting its position property. The position property can take one of five values:
1. `static`: Default value (Does not need to be specified)
2. `relative`: Set it relative to it's default `static` position.
3. `absolute`: All other elements on the page ignore the element and act like it's not present.
4. `fixed`: Set a position on the page regardless of a user scrolling.
5. `sticky`: The `sticky` value is another position value that keeps an element in the document flow as the user scrolls, but sticks to a specified position as the page is scrolled further. This is done by using the `sticky` value along with the familiar offset properties, as well as one new one.
6. `z-index`: Controls the 'Depth', causing some elements to be visible over others when overlapping. `position` must NOT be `static` or this doesn't work.
7. `display:` `inline`: Default `display` for some elements , such as `<em>`, `<strong>`, and `<a>` is called `inline`. `inline` elements cannot be modified height/width.
8. `display:` `block`: Some elements (`block`) are not displayed in the same line as the content around them. Fill entire width of page by default, but `width` can be set.
9. `display:` `inline-block`: Combines `inline` and `block`, can appear next to each other, and can be specified with `width` & `height`.
10. `float`: As far left or as far right in a container, use `float`. Useful for wrapping text around an image. `left` and `right` are options.
11. `clear`: Specifies how elements should behave when they bump into each other on the page. `left` (left side of element won't touch), `right`, `both`, `none` (element can touch either side).

Offset Properties (Specified in pixels, ems, or percentages, among others) used with `relative`:
1. `top`: Moves the element down from the top.
2. `bottom`: Moves the element up from the bottom.
3. `left`: Moves the element away from the left side (to the right).
4. `right`: Moves the element away from the right side (to the left).

Example: Using `relative` from the `top` by `40px` would be:
```
position: relative;
top: 40px;
```

Example: Using `absolute` with `100%` `width`:
```
position: absolute;
width: 100%;
```

Example: Using `fixed` with `top` being `0px` and `left` being `0px`:
```
.title {
  position: fixed;
  top: 0px;
  left: 0px;
}
```

Example: Using `sticky`:
```
position: sticky;
```

## Colors
### Foreground versus Background
Foreground color is the color that an element appears in.
For example, when a heading is styled to appear green, the foreground color of the heading has been styled.

Conversely, when a heading is styled so that its background appears yellow, the background color of the heading has been styled

`color`: This property styles an element’s foreground color.
`background-color`: This property styles an element’s background color.

### Hexadecimal
Examples:
```
darkseagreen: #8FBC8F
sienna:       #A0522D
saddlebrown:  #8B4513
brown:        #A52A2A
black:        #000000 or #000
white:        #FFFFFF or #FFF
aqua:         #00FFFF or #0FF
```

### RGB Values
```
h1 {
  color: rgb(23, 45, 23);
}
```

### Hue, Saturation, and Lightness
The syntax for HSL is similar to the decimal form of RGB, though it differs in important ways.
The first number represents the degree of the hue, and can be between 0 and 360.
The second and third numbers are percentages representing saturation and lightness respectively.
Here is an example:
```
color: hsl(120, 60%, 70%);
```

Hue is the first number. It refers to an angle on a color wheel.
Red is 0 degrees, Green is 120 degrees, Blue is 240 degrees, and then back to Red at 360.

Saturation refers to the intensity or purity of the color. The saturation increases towards 100% as the color becomes richer.
The saturation decreases towards 0% as the color becomes grayer.

Lightness refers to how light or dark the color is.
Halfway, or 50%, is normal lightness.
Imagine a sliding dimmer on a light switch that starts halfway.
Sliding the dimmer up towards 100% makes the color lighter, closer to white.
Sliding the dimmer down towards 0% makes the color darker, closer to black.

### Opacity and Alpha
To use opacity in the HSL color scheme, use `hsla` instead of `hsl`, and four values instead of three.
For example:
```
color: hsla(34, 100%, 50%, 0.1);
```

The RGB color scheme has a similar syntax for opacity, rgba.
Again, the first three values work the same as rgb and the last value is the alpha. Here’s an example:
```
color: rgba(234, 45, 98, 0.33);
```

Keyword for zero opacity:
```
color: transparent;
```

## Typography
The art of arranging text on page.
1. How to style and transform fonts.
2. How to lay text out on a page.
3. How to add external fonts to your web pages.

### Font Family
Example:
```
h1 {
  font-family: Arial;
}
```
```
h1 {
  font-family: 'Times New Roman';
}
```

### Web Safe Fonts
There is a selection of fonts that will appear the same across all browsers and operating systems.
These fonts are referred to as web safe fonts: https://www.cssfontstack.com/

### Fallback Fonts and Font Stacks
Web safe fonts are good fallback fonts that can be used if your preferred font is not available.
```
h1 {
  font-family: Caslon, Georgia, 'Times New Roman';
}
```
In the example above, Georgia and Times New Roman are fallback fonts to Caslon.

### Serif and Sans-Serif
Serif fonts have extra details on the ends of each letter, as opposed to Sans-Serif fonts, which do not have the extra details.
Serif and sans-serif are also keyword values that can be added as a final fallback font if nothing else in the font stack is available.
```
h1 {
  font-family: Caslon, Georgia, 'Times New Roman', serif;
}
```

### Font Weight
The `font-weight` property can take any one of these keyword values:
1. `bold`: Bold font weight.
2. `normal`: Normal font weight. This is the default value.
3. `lighter`: One font weight lighter than the element’s parent value.
4. `bolder`: One font weight bolder than the element’s parent value

Numerical values can range from 1 (lightest) to 1000 (boldest), but it is common practice to use increments of 100.
A font weight of 400 is equal to the keyword value normal, and a font weight of 700 is equal to bold.
```
.left-section {
  font-weight: 700;
}
 
.right-section {
  font-weight: bold; 
}
```

### Font Style
You can also italicize text with the `font-style` property.
```
h3 {
  font-style: italic;
}
```

### Text Transformation
Text can also be styled to appear in either all uppercase or lowercase with the `text-transform` property.
```
h1 {
  text-transform: uppercase;
}
```

### Text Layout
* `letter-spacing`: Used to set the horizontal spacing between the individual characters in an element.
```
p {
  letter-spacing: 2px;
}
```

* `word-spacing`: Set the space between words. For word spacing, using em values are recommended because the spacing can be set based on the size of the font.
```
h1 {
  word-spacing: 0.3em;
}
```

* `line-height`: How tall we want each line containing our text to be. Line height values can be a unitless number, such as `1.2`, or a length value, such as `12px`, `5%` or `2em`. Generally, the unitless value is preferred since it is responsive based on the current font size.
```
p {
  line-height: 1.4;
}
```

* `text-align`: Aligns text to its parent element.
```
h1 {
  text-align: right;
}
```

### Web Fonts
Free font services, like [Google Fonts](https://fonts.google.com/) and [Adobe Fonts](https://fonts.adobe.com/), host fonts that you can link to from your HTML document with a provided `<link>` element.

You can also use fonts from paid font distributors like [fonts.com](https://www.fonts.com/) by downloading and hosting them with the rest of your site’s files.
You can create a `@font-face` ruleset in your CSS stylesheet to link to the relative path of the font file.

Web Fonts Using `<link>` via Google Fonts:
```
<head>
  <!-- Add the link element for Google Fonts along with other metadata -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
<head>
```
The generated <link> element needs to be added to the `<head>` element in your HTML document for it to be ready to be used in your CSS.

### Web Fonts Using @font-face and Downloaded Fonts
Fonts can also be added using a `@font-face` ruleset in your CSS stylesheet instead of using a <link> element in your HTML document.

Font Formats (For reference):
1. OTF (OpenType Font)
2. TTF (TrueType Font)
3. WOFF (Web Open Font Format)
4. WOFF2 (Web Open Font Format 2)

The different formats are a progression of standards for how fonts will work with different browsers, with WOFF2 being the most progressive.
It’s a good idea to include TTF, WOFF, and WOFF2 formats with your @font-face rule to ensure compatibility on all browsers.

You can use a tool such as [Google Web Fonts Helper] to generate additional file types for WOFF and WOFF2.

When you have the files you need, move them to a folder inside your website’s working directory, and you’re ready to use them in a `@font-face` ruleset.

```
@font-face {
  font-family: 'MyParagraphFont';
  src: url('fonts/Roboto.woff2') format('woff2'),
       url('fonts/Roboto.woff') format('woff'),
       url('fonts/Roboto.ttf') format('truetype');
}
```
1. The `@font-face` at-rule is used as the `selector`. It’s recommended to define the `@font-face` ruleset at the top of your CSS stylesheet.
2. Inside the declaration block, the `font-family` property is used to set a custom name for the downloaded font. The name can be anything you choose, but it must be surrounded by quotation marks. In the example, the font is named `'MyParagraphFont'`, as this font will be used for all paragraphs.
3. The `src` property contains three values, each specifying the relative path to the font file and its format. In this example, the font files are stored inside a folder named fonts within the working directory.

Once it's defined, you can use it:
```
p {
  font-family: 'MyParagraphFont', sans-serif;
}
```

# Chrome DevTools
Check out [this link](https://www.codecademy.com/courses/learn-css/articles/f1-devtools-box-model)

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

# JavaScript
## Basics
### Console
In JavaScript, the `console` keyword refers to an object, a collection of data and actions, that we can use in our code.
```
console.log(5); 
```

### Comments
`//`: Single line
`/* ... */`: Multi line

### Properties
Objects, including instances of data types, can have properties (stored information). The properties are denoted with a `.` after the name of the object,
for example:
```
'Hello'.length // Returns integer count of characters in the string
```

### Methods
Objects, including instances of data types, can have methods which perform actions. Methods are called like so:
```
'hello'.toUpperCase()
```

### Variables
`var`: JavaScript keyword that creates, or declares, a new variable. Standard is typically camalCasing variable names.
```
var myName = 'Sarah'; // 'var': Less preferred way of declaring variables

let meal = 'Enchiladas'; // 'let': Signals that the variable can be reassigned a different value, more preferred
console.log(meal); // Output: Enchiladas
meal = 'Burriot';
console.log(meal); // Output: Enchiladas

const myName = 'Sarah'; // 'const': Signals a constant value, must be assigned a value when declared, and can't be reassigned
```

### Math Assignment Operators
```
let levelUp = 10;
let powerLevel = 9001;
let multiplyMe = 32;
let quarterMe = 1152;

// Use the mathematical assignments in the space below:

levelUp += 5;
powerLevel -= 100;
multiplyMe *= 11;
quarterMe /= 4;
```

Increment and decrement work similar to other languages `levelUp++;` and `powerLevel--;` for example.

### String Concatenation and Interpolation
To concatenate strings:
```
let myPet = 'armadillo';
console.log('I own a pet ' + myPet + '.'); 
// Output: 'I own a pet armadillo.'
```

To interpolate strings:
```
const myPet = 'armadillo';
console.log(`I own a pet ${myPet}.`);
// Output: I own a pet armadillo.
```

A template literal is wrapped by backticks ``` (this key is usually located on the top of your keyboard, left of the 1 key).
Inside the template literal, you’ll see a placeholder, `${myPet}`. The value of myPet is inserted into the template literal.
When we interpolate `I own a pet ${myPet}.`, the output we print is the string: `'I own a pet armadillo.'`

### Conditional, Comparison, and Logical Operators
Conditional Operators
```
if (true) {
  console.log('This message will print!'); 
}
// Prints: This message will print!
```
```
if (false) {
  console.log('The code in this block will not run.');
} else {
  console.log('But the code in this block will!');
}
 
// Prints: But the code in this block will!
```

Comparison Operators:
1. Less than: <
2. Greater than: >
3. Less than or equal to: <=
4. Greater than or equal to: >=
5. Is equal to: ===
6. Is not equal to: !==

Logical Operators
1. And: &&
2. Or: ||
3. Not: !

```
if (stopLight === 'green' && pedestrians === 0) {
  console.log('Go!');
} else {
  console.log('Stop');
}
```
```
if (day === 'Saturday' || day === 'Sunday') {
  console.log('Enjoy the weekend!');
} else {
  console.log('Do some work.');
}
```
```
let excited = true;
console.log(!excited); // Prints false
 
let sleepy = false;
console.log(!sleepy); // Prints true
```

### Truthy, Falsy, and Short Circuit Evaluation
Falsy Values:
1. 0
2. Empty strings like "" or ''
3. null which represent when there is no value at all
4. undefined which represent when a declared variable lacks a value
5. NaN, or Not a Number

Short Circuit Evaluation:
```
let newVar = anotherVar || 'default value'
```

### Ternary Operator to Simplify If Else
```
// This...
let isNightTime = true;
 
if (isNightTime) {
  console.log('Turn on the lights!');
} else {
  console.log('Turn off the lights!');
}

// Can be simplified to this...
isNightTime ? console.log('Turn on the lights!') : console.log('Turn off the lights!');

// Or, in another example...
let favoritePhrase = 'Love That!';
favoritePhrase === 'Love That!' ? console.log('I love that!'): console.log('I don\'t love that!');
```

### Switch Case
```
let groceryItem = 'papaya';
 
switch (groceryItem) {
  case 'tomato':
    console.log('Tomatoes are $0.49');
    break;
  case 'lime':
    console.log('Limes are $1.49');
    break;
  case 'papaya':
    console.log('Papayas are $1.29');
    break;
  default:
    console.log('Invalid item');
    break;
}
 
// Prints 'Papayas are $1.29'
```

### Functions
```
function makeShoppingList(item1 = 'milk', item2 = 'bread', item3 = 'eggs'){
  console.log(`Remember to buy ${item1}`);
  console.log(`Remember to buy ${item2}`);
  console.log(`Remember to buy ${item3}`);

  return item1 + ' ' + item2 + ' ' + item3;
}

makeShoppingList();
```

### Function Expression
```
const plantNeedsWater = function(day){
  if(day === 'Wednesday'){
    return true;
  } else {
    return false;
  }
};

console.log(plantNeedsWater('Tuesday'));
```

### Arrow Functions
Shorter way to write functions by using the special "fat arrow" `() =>` notation.
```
const rectangleArea = (width, height) => {
  let area = width * height;
  return area;
};
```

### Concise Body Arrow Functions
There are even more ways to write functions, for example we can rewrite this:
```
const squareNum = num => {
  return num * num;
};
```
As this:
```
const squareNum = num => num * num;
```

### Scope
This works, because `city` is in the same `Global Scope`:
```
const city = 'New York City'; // This is a global scope variable because it's defined outside of function below

function logCitySkyline(){
  let skyscraper = 'Empire State Building'; // This is block scope
  return 'The stars over the ' + skyscraper + ' in ' + city;
}

console.log(logCitySkyline())
```

### Arrays
Declaring and indexing:
```
let seasons = ['Winter', 'Spring', 'Summer', 'Fall'];
 
seasons[3] = 'Autumn';
console.log(seasons); 
//Output: ['Winter', 'Spring', 'Summer', 'Autumn']
```

Pushing:
```
const chores = ['wash dishes', 'do laundry', 'take out trash'];

chores.push('clean floor', 'clean ceiling');
console.log(chores);
```

Popping:
```
const chores = ['wash dishes', 'do laundry', 'take out trash', 'cook dinner', 'mop floor'];

chores.pop();
console.log(chores);
// Outputs: [ 'wash dishes', 'do laundry', 'take out trash', 'cook dinner' ]
```

More array methods: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array
```
const groceryList = ['orange juice', 'bananas', 'coffee beans', 'brown rice', 'pasta', 'coconut oil', 'plantains'];

groceryList.shift();
console.log(groceryList);

groceryList.unshift('popcorn');
console.log(groceryList);

console.log(groceryList.slice(1,4));

console.log(groceryList);

const pastaIndex = groceryList.indexOf('pasta')
console.log(pastaIndex);
```

```
let secretMessage = ['Learning', 'is', 'not', 'about', 'what', 'you', 'get', 'easily', 'the', 'first', 'time,', 'it', 'is', 'about', 'what', 'you', 'can', 'figure', 'out.', '-2015,', 'Chris', 'Pine,', 'Learn', 'JavaScript'];

// Use an array method to remove the last string of the array secretMessage.
secretMessage.pop();
// Use an array method to add the words to and Program as separate strings to the end of the secretMessage array.
secretMessage.push('to', 'program');
// Change the word easily to the word right by accessing the index and replacing it.
secretMessage[secretMessage.indexOf('easily')] = 'right';
// Use an array method to remove the first string of the array.
secretMessage.shift();
// Use an array method to add the string Programming to the beginning of the array.
secretMessage.unshift('Programming');
// Use an array method to remove the strings get, right, the, first, time,, and replace them with the single string know.
secretMessage.splice(secretMessage.indexOf('get'), secretMessage.indexOf('time'), 'know');
// On one line, use console.log() and .join() to print the secret message as a sentence.

console.log(secretMessage.join(' '));
```

### Nested Arrays
```
numberClusters = [[1, 2], [3, 4], [5, 6]];
const target = numberClusters[2][1];
```

### Loops
The For Loop:
```
for (let counter = 5; counter <= 10; counter++) {
  console.log(counter);
}
```

The For...In loop:
```
// for...in
for (let crewMember in spaceship.crew) {
  console.log(`${crewMember}: ${spaceship.crew[crewMember].name}`);
}
```

Looping through arrays:
```
const animals = ['Grizzly Bear', 'Sloth', 'Sea Lion'];
for (let i = 0; i < animals.length; i++){
  console.log(animals[i]);
}
```

Nested For Loops:
```
let bobsFollowers = ['Jill', 'Jack', 'Barry', 'Ferrel'];
let tinasFollowers = ['Jill', 'Jack', 'Ronald'];
let mutualFollowers = [];

for (let i = 0; i < bobsFollowers.length; i++) {
  for (let j = 0; j < tinasFollowers.length; j++){
    if (bobsFollowers[i] === tinasFollowers[j]){
      mutualFollowers.push(bobsFollowers[i]);
    }
  }
}

console.log(mutualFollowers);
// Outputs: [ 'Jill', 'Jack' ]
```

While Loop:
```
const cards = ['diamond', 'spade', 'heart', 'club'];

// Write your code below
let currentCard;

while (currentCard !== 'spade') {
  currentCard = cards[Math.floor(Math.random() *4)];
  console.log(currentCard);
}
```

Do-while Loop:
```
const cupsOfSugarNeeded = 4;
let cupsAdded = 0;

do {
 cupsAdded++;
 console.log(cupsAdded);
} while (cupsAdded < cupsOfSugarNeeded);
```

### Higher-order Functions
In JavaScript, functions are first class objects. This means that JavaScript functions can have properties and methods.

Assigning the value of one function to another (functions as data):
```
const checkThatTwoPlusTwoEqualsFourAMillionTimes = () => {
  for(let i = 1; i <= 1000000; i++) {
    if ( (2 + 2) != 4) {
      console.log('Something has gone very wrong :( ');
    }
  }
}


let is2p2 = checkThatTwoPlusTwoEqualsFourAMillionTimes;
is2p2();

console.log(is2p2.name);
```

Passing a function as a parameter:
```
// Declaration
let checkConsistentOutput = (func, val) => {
  let firstTry = func(val);
  let secondTry = func(val);
  if (firstTry === secondTry){
    return firstTry;
  } else {
    return 'This function returned inconsistent results';
  }
}

// Invocation (Don't add paranthesis on the function input parameter)
checkConsistentOutput(addTwo, 1);
```

### Iterators
Many iterators take functions as inputs (AKA call-back functions), shown below, to return specific things.

JavaScript does `foreach` etc. a little differently.

Foreach:
```
const fruits = ['mango', 'papaya', 'pineapple', 'apple'];

// Iterate over fruits below
fruits.forEach(function(element){
  console.log(`I want to eat a ${element}`);
})
```

Map takes an argument of a callback function and returns a new array:
```
const animals = ['Hen', 'elephant', 'llama', 'leopard', 'ostrich', 'Whale', 'octopus', 'rabbit', 'lion', 'dog'];

// Get the first letter of each animals name for the secret message
const secretMessage = animals.map(element => {
  return element[0];
})

console.log(secretMessage.join(''));

const bigNumbers = [100, 200, 300, 400, 500];

// Divide all the numbers by 100
const smallNumbers = bigNumbers.map(element => {
  return element/100;
})
```

Filter returns an array based on conditional:
```
const randomNumbers = [375, 200, 3.14, 7, 13, 852];

// Call .filter() on randomNumbers below
const smallNumbers = randomNumbers.filter(function(number){
  return number < 250;
 })
console.log(smallNumbers);
// Outputs: [200, 3.14, 7, 13]

const favoriteWords = ['nostalgia', 'hyperbole', 'fervent', 'esoteric', 'serene'];

// Call .filter() on favoriteWords below
const longFavoriteWords = favoriteWords.filter(function(number){
  if(number.length > 7){
    return number;
  }
 })
console.log(longFavoriteWords);
// Outputs: ['nostalgia', 'hyperbole', 'esoteric']
```

Find Index:
```
const animals = ['hippo', 'tiger', 'lion', 'seal', 'cheetah', 'monkey', 'salamander', 'elephant'];

// Find the index of 'elephant'
const foundAnimal = animals.findIndex(animal => {
  return animal === 'elephant';
});

// Find the index of the first animal that starts with an 's'
const startsWithS = animals.findIndex(animal => {
  return animal[0] === 's';
});
```

The Reduce method returns a single value after iterating through the elements of an array, thereby reducing the array.
```
const newNumbers = [1, 3, 5, 7];

const newSum = newNumbers.reduce(function(accumulator, currentValue) {
  console.log('The value of accumulator: ', accumulator);
  console.log('The value of currentValue: ', currentValue);
  return accumulator + currentValue;
}, 10);

console.log(newSum);
// Outputs: 26 (Initial value 10, and 1 + 3 + 5 + 7)
```

### Objects
Declaring an object:
```
// An object literal with two key-value pairs
let spaceship = {
  'Fuel Type': 'diesel',
  color: 'silver'
};
```

There are two ways you can access object's properties, the first way is dot notation `.`:
```
'hello'.length; // Returns 5

let spaceship = {
  homePlanet: 'Earth',
  color: 'silver'
};
spaceship.homePlanet; // Returns 'Earth',
spaceship.color; // Returns 'silver',
```

The second is bracket notation:
```
let spaceship = {
  'Fuel Type': 'Turbo Fuel',
  'Active Duty': true,
  homePlanet: 'Earth',
  numCrew: 5
};
spaceship['Active Duty'];   // Returns true
spaceship['Fuel Type'];   // Returns  'Turbo Fuel'
spaceship['numCrew'];   // Returns 5
spaceship['!!!!!!!!!!!!!!!'];   // Returns undefined
```

Property Assignment:
```
let spaceship = {
  'Fuel Type' : 'Turbo Fuel',
  homePlanet : 'Earth',
  color: 'silver',
  'Secret Mission' : 'Discover life outside of Earth.'
};

// Write your code below
spaceship['color'] = 'glorious gold';
spaceship['numEngines'] = 2;
delete spaceship['Secret Mission'];
```

### Methods
When the data stored on an object is a function, it's called a method. Basically, class functions.
```
let retreatMessage = 'We no longer wish to conquer your planet. It is full of dogs, which we do not care for.';

// Declaring a class with class methods:
let alienShip = {
  retreat() {
    console.log(retreatMessage);
  },
  takeOff() {
    console.log('Spim... Borp... Glix... Blastoff!');
  }
};

// Using class methods/functions:
alienShip.retreat();
alienShip.takeOff();
```

### Nested Objects
In application code, objects are often nested— an object might have another object as a property.
```
let spaceship = {
  passengers: null,
  telescope: {
    yearBuilt: 2018,
    model: "91031-XLT",
    focalLength: 2032 
  },
  crew: {
    captain: { 
      name: 'Sandra', 
      degree: 'Computer Engineering', 
      encourageTeam() { console.log('We got this!') },
     'favorite foods': ['cookies', 'cakes', 'candy', 'spinach'] }
  },
  engine: {
    model: "Nimbus2000"
  },
  nanoelectronics: {
    computer: {
      terabytes: 100,
      monitors: "HD"
    },
    'back-up': {
      battery: "Lithium",
      terabytes: 50
    }
  }
}; 

// Get the captain's first favorite food
const capFave = spaceship.crew.captain['favorite foods'][0];
spaceship.passengers = [{name: 'Space Dog'}, {name: 'George', occupation: 'Office Worker'}];
const firstPassenger = spaceship.passengers[0];
```

### Pass by Reference
You can pass objects into functions and modify them:
```
let spaceship = {
  'Fuel Type' : 'Turbo Fuel',
  homePlanet : 'Earth'
};

// Write your code below
function greenEnergy(objParam){
  objParam['Fuel Type'] = 'avocado oil';
}

function remotelyDisable(objParam){
  objParam['disabled'] = true;
}

greenEnergy(spaceship);
remotelyDisable(spaceship);
console.log(spaceship);
```

### Looping through Objects
Can use the For...In looping method to go through objects:
```
let spaceship = {
    crew: {
    captain: { 
        name: 'Lily', 
        degree: 'Computer Engineering', 
        cheerTeam() { console.log('You got this!') } 
        },
    'chief officer': { 
        name: 'Dan', 
        degree: 'Aerospace Engineering', 
        agree() { console.log('I agree, captain!') } 
        },
    medic: { 
        name: 'Clementine', 
        degree: 'Physics', 
        announce() { console.log(`Jets on!`) } },
    translator: {
        name: 'Shauna', 
        degree: 'Conservation Science', 
        powerFuel() { console.log('The tank is full!') } 
        }
    }
}; 

// Output [crew member's role]: [crew member's name]
// Example: 'chief officer: Dan'
for (let crewMember in spaceship.crew){
  console.log(`${crewMember}: ${spaceship.crew[crewMember].name}`);
}

// Output [crew member's name]: [crew member's degree]
// Example: 'Clementine: Physics'
for (let crewMember in spaceship.crew){
  console.log(`${spaceship.crew[crewMember].name}: ${spaceship.crew[crewMember].degree}`);
}
```

### Advanced Objects
1. How to use the this keyword. Inside objects we don't automatically have access to the objects other methods, `this` helps us reference.
2. Conveying privacy in JavaScript methods. Sometimes we don't want other code accessing and updating an object's properties. Underscore before value to signal private `_privateVar`.
3. Defining getters and setters in objects. Methods that get and return the internal properties of an object. `get` and `set` are keywords.
  * Getters can perform an action on the data when getting a property.
  * Getters can return different values using conditionals.
  * In a getter, we can access the properties of the calling object using this.
  * The functionality of our code is easier for other developers to understand.
4. Creating factory functions. Used to create many instances of an object quickly.
5. Using destructuring techniques.

Using the `this` keyword:
```
const robot = {
  model: '1E78V2',
  energyLevel: 100,
  provideInfo(){
    return `I am ${this.model} and my current energy level is ${this.energyLevel}`;
  }
};

console.log(robot.provideInfo());
```

An example of a getter:
```
const robot = {
  _model: '1E78V2',
  _energyLevel: 100,
  get energyLevel(){
    if (typeof this._energyLevel === 'number'){
      return `My current energy level is ${this._energyLevel}`;
    } else{
      return 'System malfunction: cannot retrieve energy level';
    }
  }
};

console.log(robot.energyLevel);
```

An example of a setter:
```
const robot = {
  _model: '1E78V2',
  _energyLevel: 100,
  _numOfSensors: 15,
  get numOfSensors(){
    if(typeof this._numOfSensors === 'number'){
      return this._numOfSensors;
    } else {
      return 'Sensors are currently down.'
    }
  },
  set numOfSensors(num){
    if(typeof this._numOfSensors === 'number' && num >= 0){
      this._numOfSensors = num;
    } else{
      console.log('Pass in a number that is greater than or equal to 0')
    }
  }
};

robot.numOfSensors = 100;
console.log(robot.numOfSensors);
```

Factory function example:
```
// Declaring the factory function:
const robotFactory = (model, mobile) => {
  return {
    model: model,
    mobile: mobile,
    beep(){
      console.log('Beep Boop');
    }
  }
}

// Using the factory function to create an instance:
const tinCan = robotFactory('P-500', true);

// Calling the instance:
tinCan.beep();    name: name,
    age: age, 
    energySource: energySource,
    scare() {
      console.log(catchPhrase);
    } 
  }
};
```

For many properties in factory functions, we can use property value shorthand to save time:
```
// Original
const monsterFactory = (name, age) => {
  return { 
    name: name,
    age: age
  }
};

// Property value shorthand
const monsterFactory = (name, age) => {
  return { 
    name,
    age 
  }
};
```

Using built-in methods of objects:
```
const robot = {
	model: 'SAL-1000',
  mobile: true,
  sentient: false,
  armor: 'Steel-plated',
  energyLevel: 75
};

// What is missing in the following method call?
const robotKeys = Object.keys(robot);

console.log(robotKeys);

// Declare robotEntries below this line:
const robotEntries = Object.entries(robot);

console.log(robotEntries);

// Declare newRobot below this line:
const newRobot = Object.assign({laserBlaster: true, voiceRecognition: true}, robot);

console.log(newRobot);
```

### Classes
Example:
```
class Dog {
  constructor(name) {
    this._name = name;
    this._behavior = 0;
  }

  get name() {
    return this._name;
  }
  get behavior() {
    return this._behavior;
  }   

  incrementBehavior() {
    this._behavior ++;
  }
}

const halley = new Dog('Halley');
console.log(halley.name); // Print name value to console
console.log(halley.behavior); // Print behavior value to console
halley.incrementBehavior(); // Add one to behavior
console.log(halley.name); // Print name value to console
console.log(halley.behavior); // Print behavior value to console
```

One difference between a class and an object (in the previous section) is the constructor:
```
class Surgeon {
  constructor(name, department){
    this.name = name;
    this.department = department;
  }
}
```

When a class is 'instantialized' we have a class instance.
```
const surgeonRomero = new Surgeon('Francisco Romero', 'Cardiovascular'); // Create new surgeon instance

const surgeonJackson = new Surgeon('Ruth Jackson', 'Orthopedics');
```

Inheritance using an animal, cat, and dog class:
```
class HospitalEmployee {
  constructor(name) {
    this._name = name;
    this._remainingVacationDays = 20;
  }
 
  get name() {
    return this._name;
  }
 
  get remainingVacationDays() {
    return this._remainingVacationDays;
  }   
 
  takeVacationDays(daysOff) {
    this._remainingVacationDays -= daysOff;
  }
} 
```

The `extends` keyword makes the methods of the animal class available inside the cat class. When we call `extends` in a class declaration, all of the parent methods are available to the child class.
The `super` keyword calls the constructor of the parent class. In this case, `super(name)` passes the `name` argument of the child class to the constructor of the parent class.
```
class Nurse extends HospitalEmployee {
  constructor(name, certifications) {
    this._name = name;
    super(name); // Call the parents constructor with values
    this._certifications = certifications;
  }
}

const nurseOlynyk = new Nurse('Olynyk', ['Trauma', 'Pediatrics']);
nurseOlynyk.takeVacationDays(5);
console.log(nurseOlynyk.remainingVacationDays);

nurseOlynyk.addCertification('Genetics');
console.log(nurseOlynyk.certifications);
```

### Static Methods
Sometimes you will want a class to have methods that aren’t available in individual instances, but that you can call directly from the class.
```
static generatePassword() {
  return Math.floor(Math.random() * 10000);
}
```

## Browser Compatibility and Transpilation
There exists a gap between new versions/syntax of JavaScript and developers apps. Can lead to web browser compatibility issues (Transpilation can be done with Babel to convert).

Some tools:
1. [caniuse.com](caniuse.com) — A website that provides data on web browser compatibility for HTML, CSS, and JavaScript features. You will learn how to use it to look up ES6 feature support.
2. Babel — A Javascript library that you can use to convert new, unsupported JavaScript (ES6), into an older version (ES5) that is recognized by most modern browsers.

### Install and Use Babel
The three commands (If using the [node package manager (npm)](https://docs.npmjs.com/getting-started/what-is-npm):
```
npm install babel-cli
```
```
npm install babel-preset-env
```
```
npm run build
```

A separate copy of the file will be created in the older `ES5` syntax.

## JavaScript Project
Several files can be involved, `index.html`, `main.js`, etc.

### Exporting
One of the tools for connecting files is `export`:
```
export { valueA, valueB, valueC };
export default valueD;
```

## Asynchronicity and Promises
Promises are objects that represent the eventual outcome of an asynchronous operation. A `Promise` object can be in one of three states:
1. Pending: The initial state; the operation has not completed yet.
2. Fulfilled: The operation has completed successfully and the promise now has a resolved value. For example, a request's promise might resolve with a JSON object as its value.
3. Rejected: The operation has failed and the promise has a reason for the failture. This reason is usually an `Error` of some kind.

We refer to a promise as settled if it is no longer pending; it is either fulfilled or rejected.

### Constructing a Promise Object
The `Promise` constructor method takes a function parameter called the executor function which runs automatically when the constructor is called.
The executor function generally starts an asynchronous operation and dictates how the promise should be settled.
The executor function has two function parameters, usually referred to as the `resolve()` and `reject()` functions; these two aren't defined by the programmer.
When the `Promise` constructor runs, JavaScript will pass its own `resolve()` and `reject()` functions into the executor function.

1. `resolve` is a function with one argument. Under the hood, if invoked, `resolve()` will change the promise’s status from `pending` to `fulfilled`, and the promise’s resolved value will be set to the argument passed into `resolve()`.
2. `reject` is a function that takes a reason or error as an argument. Under the hood, if invoked, `reject()` will change the promise’s status from `pending` to `rejected`, and the promise’s rejection reason will be set to the argument passed into `reject()`.

Example executor function:
```
const executorFunction = (resolve, reject) => {
  if (someCondition) {
      resolve('I resolved!');
  } else {
      reject('I rejected!'); 
  }
}
const myFirstPromise = new Promise(executorFunction);
```

Breaking down what's happening above:
1. Declare a variable `myFirstPromise`.
2. `myFirstPromise is constructed using `new Promise()` which is the `Promise` constructor method.
3. `executorFunction()` is passed to the constructor and has two functions as parameters: `resolve` and `reject`.
4. If `someCondition` evaluates to `true`, we invoke `resolve()` with the string `I resolved!`.
5. If not, we invoke `reject()` with the string `I rejected!`.

In our example, myFirstPromise resolves or rejects based on a simple condition, but, in practice, promises settle based on the results of asynchronous operations. For example, a database request may fulfill with the data from a query or reject with an error thrown.

### Success and Failure Callback Functions
To handle a “successful” promise, or a promise that resolved, we invoke `.then()` on the promise, passing in a success handler callback function.
```
const prom = new Promise((resolve, reject) => {
  resolve('Yay!');
});
 
const handleSuccess = (resolvedValue) => {
  console.log(resolvedValue);
};
 
prom.then(handleSuccess); // Prints: 'Yay!'
```

### Using Catch with Promises
Remember, `.then()` will return a promise with the same settled value as the promise it was called on if no appropriate handler was provided.
This implementation allows us to separate our resolved logic from our rejected logic.
Instead of passing both handlers into one `.then()`, we can chain a second `.then()` with a failure handler to a first `.then()` with a success handler and both cases will be handled.
```
// Original
prom
  .then((resolvedValue) => {
    console.log(resolvedValue);
  })
  .then(null, (rejectionReason) => {
    console.log(rejectionReason);
  });

// Using catch()
prom
  .then((resolvedValue) => {
    console.log(resolvedValue);
  })
  .catch((rejectionReason) => {
    console.log(rejectionReason);
  });
```

The `.catch()` function takes only one argument, `onRejected`.
In the case of a rejected promise, this failure handler will be invoked with the reason for rejection.
Using `.catch()` accomplishes the same thing as using a `.then()` with only a failure handler.

### Chaining Multiple Promises
One common pattern we’ll see with asynchronous programming is multiple operations which depend on each other to execute or that must be executed in a certain order.
We might make one request to a database and use the data returned to us to make another request.

This process of chaining promises together is called composition.
Promises are designed with composition in mind. Here’s a simple promise chain in code:
```
firstPromiseFunction()
.then((firstResolveVal) => {
  return secondPromiseFunction(firstResolveVal);
})
.then((secondResolveVal) => {
  console.log(secondResolveVal);
});
```

### Common Promise Mistakes
Mistake 1: Nesting promises instead of chaining them.
```
returnsFirstPromise()
.then((firstResolveVal) => {
  return returnsSecondValue(firstResolveVal)
    .then((secondResolveVal) => {
      console.log(secondResolveVal);
    })
})
```
Instead of having a clean chain of promises, we’ve nested the logic for one inside the logic of the other.


Mistake 2: Forgetting to `return` a promise.
```
returnsFirstPromise()
.then((firstResolveVal) => {
  returnsSecondValue(firstResolveVal)
})
.then((someVal) => {
  console.log(someVal);
})
```
Since forgetting to return our promise won’t throw an error, this can be a really tricky thing to debug.

Example of Bad vs. Good:
```
const {checkInventory, processPayment, shipOrder} = require('./library.js');

const order = {
  items: [['sunglasses', 1], ['bags', 2]],
  giftcardBalance: 79.82
};

// BAD:
/*checkInventory(order)
    .then((resolvedValueArray) => {
        processPayment(resolvedValueArray)
            .then((resolvedValueArray) => {
                shipOrder(resolvedValueArray)
                    .then((successMessage) => {
                        console.log(successMessage);
                    });
            });
    });
*/

// GOOD:
checkInventory(order)
  .then((resolvedValueArray) => {
    return processPayment(resolvedValueArray);
  })
  .then((resolvedValueArray) => {
    return shipOrder(resolvedValueArray);
  })
  .then((successMessage) => {
    console.log(successMessage);
  });
```

### Promise.all
Useful if dealing with multiple Promises, but the order doesn't matter. Useful for maximizing efficiency.
Also known as concurrency.

`Promise.all()` accepts an array of promises as its argument and returns a single promise. That single promise will settle in one of two ways:

1. If every promise in the argument array resolves, the single promise returned from `Promise.all()` will resolve with an array containing the resolve value from each promise in the argument array.
2. If any promise from the argument array rejects, the single promise returned from `Promise.all()` will immediately reject with the reason that promise rejected. This behavior is sometimes referred to as failing fast.

```
let myPromises = Promise.all([returnsPromOne(), returnsPromTwo(), returnsPromThree()]);
 
myPromises
  .then((arrayOfValues) => {
    console.log(arrayOfValues);
  })
  .catch((rejectionReason) => {
    console.log(rejectionReason);
  });
```
1. We declare `myPromises` assigned to invoking `Promise.all()`.
2. We invoke `Promise.all()` with an array of three promises— the returned values from functions.
3. We invoke `.then()` with a success handler which will print the array of resolved values if each promise resolves successfully.
4. We invoke `.catch()` with a failure handler which will print the first rejection message if any promise rejects.

## Async
The `async` keyword is used to write functions that handle asynchronous actions. We wrap our asynchronous logic inside a function prepended with the `async` keyword. Then, we invoke that function.

`async` functions always return a promise. This means we can use traditional promise syntax, like `.then()` and `.catch` with our `async` functions.

An `async` function will return in one of three ways:
1. If there’s nothing returned from the function, it will return a promise with a resolved value of `undefined`.
2. If there’s a non-promise value returned from the function, it will return a promise resolved to that value.
3. If a promise is returned from the function, it will simply return that promise

```
// Not using Async:
function withConstructor(num){
  return new Promise((resolve, reject) => {
    if (num === 0){
      resolve('zero');
    } else {
      resolve('not zero');
    }
  });
}

withConstructor(0)
  .then((resolveValue) => {
  console.log(` withConstructor(0) returned a promise which resolved to: ${resolveValue}.`);
});

// Same as above, except using Async:
async function withAsync(num) {
  if(num === 0){
    return 'zero';
  } else {
    return 'not zero';
  }
}
 
withAsync(0)
.then(resolvedValue => {
    console.log(resolvedValue);
  })  // 'zero' or 'not zero' based on input
```

### Await Operator
The `await` keyword halts the execution of an async function until a promise is no longer pending.

`getBeans()` is missing the keywords `async` and `await`.
The keyword `async` should precede the `function` keyword, and the `await` operator precedes a promise.
Remember that in our case, this is the promise returned from `shopForBeans()`

```
const shopForBeans = require('./library.js');

// Async goes before the function keyword
async function getBeans() {
  console.log(`1. Heading to the store to buy beans...`);
  let value = await shopForBeans(); // Await goes before the object that returns the promise
  console.log(`3. Great! I'm making ${value} beans for dinner tonight!`);
}

getBeans();
```

### Handling Dependent Promises using Async and Await
The true beauty of `async...await` is when we have a series of asynchronous actions which depend on one another.
For example, we may make a network request based on a query to a database.
In that case, we would need to wait to make the network request until we had the results from the database.
With native promise syntax, we use a chain of `.then()` functions making sure to return correctly each one:
```
function nativePromiseVersion() {
  returnsFirstPromise()
    .then((firstValue) => {
      console.log(firstValue);
      return returnsSecondPromise(firstValue);
    })
   .then((secondValue) => {
      console.log(secondValue);
    });
}
```
1. Within our function we use two functions which return promises: `returnsFirstPromise()` and `returnsSecondPromise()`.
2. We invoke `returnsFirstPromise()` and ensure that the first promise resolved by using `.then()`.
3. In the callback of our first `.then()`, we log the resolved value of the first promise, `firstValue`, and then return `returnsSecondPromise(firstValue)`.
4. We use another `.then()` to print the second promise’s resolved value to the console.

Here’s how we’d write an async function to accomplish the same thing:
```
async function asyncAwaitVersion() {
  let firstValue = await returnsFirstPromise();
  console.log(firstValue);
  let secondValue = await returnsSecondPromise(firstValue);
  console.log(secondValue);
}
```
1. We mark our function as `async`.
2. Inside our function, we create a variable `firstValue` assigned await `returnsFirstPromise()`. This means `firstValue` is assigned the resolved value of the awaited promise.
3. Next, we log `firstValue` to the console.
4. Then, we create a variable `secondValue` assigned to `await` `returnsSecondPromise(firstValue)`. Therefore, `secondValue` is assigned this promise’s resolved value.
5. Finally, we log `secondValue` to the console.

```
async function makeBeans() {
 const type = await shopForBeans();
 const isSoft = await soakTheBeans(type);
 const dinner = await cookTheBeans(isSoft);
 console.log(dinner);
}

makeBeans();
```

### Handling Errors
With `async...await` we use `try...catch` statements for error handling. Catches both asynchronous and synchronous errors.
```
async function usingTryCatch() {
 try {
   let resolveValue = await asyncFunction('thing that will fail');
   let secondValue = await secondAsyncFunction(resolveValue);
 } catch (err) {
   // Catches any errors in the try block
   console.log(err);
 }
}
 
usingTryCatch();
```

### Handling Independent Promises
Remember that `await` halts the execution of our `async` function.
This allows us to conveniently write synchronous-style code to handle dependent promises.
But what if our `async` function contains multiple promises which are not dependent on the results of one another to execute?
```
async function waiting() {
 const firstValue = await firstAsyncThing();
 const secondValue = await secondAsyncThing();
 console.log(firstValue, secondValue);
}
 
async function concurrent() {
 const firstPromise = firstAsyncThing();
 const secondPromise = secondAsyncThing();
console.log(await firstPromise, await secondPromise);
}
```
In the `waiting()` function, we pause our function until the first promise resolves, then we construct the second promise.
Once that resolves, we print both resolved values to the console.

In our `concurrent()` function, both promises are constructed without using `await`. We then `await` each of their resolutions to print them to the console.

With our `concurrent()` function both promises’ asynchronous operations can be run simultaneously. If possible, we want to get started on each asynchronous operation as soon as possible! Within our `async` functions we should still take advantage of concurrency, the ability to perform asynchronous actions at the same time.

Note: if we have multiple truly independent promises that we would like to execute fully in parallel, we must use individual `.then()` functions and avoid halting our execution with `await`.

```
// app.js
let {cookBeans, steamBroccoli, cookRice, bakeChicken} = require('./library.js');

// Write your code below:
async function serveDinner(){
  let vegetablePromise = steamBroccoli();
  let starchPromise = cookRice();
  let proteinPromise = bakeChicken();
  let sidePromise = cookBeans();

  console.log(`Dinner is served. We're having ${await vegetablePromise}, ${await starchPromise}, ${await proteinPromise}, and ${await sidePromise}.`);
}

serveDinner();
```
```
// library.js
let cookBeans = () => {
  return new Promise ((resolve, reject) => {
   setTimeout(()=>{
     resolve('beans');
   }, 1000);
 });
}

let steamBroccoli = () => {
 return new Promise ((resolve, reject) => {
   setTimeout(()=>{
     resolve('broccoli');
   }, 1000);
 });
}

let cookRice = () => {
 return new Promise ((resolve, reject) => {
   setTimeout(()=>{
     resolve('rice');
   }, 1000);
 });
}

let bakeChicken = () => {
 return new Promise ((resolve, reject) => {
   setTimeout(()=>{
     resolve('chicken');
   }, 1000);
 });
}

module.exports = {cookBeans, steamBroccoli, cookRice, bakeChicken};
```

### Await Promise.all
Another way to take advantage of concurrency when we have multiple promises which can be executed simultaneously is to `await` a `Promise.all()`.

We can pass an array of promises as the argument to `Promise.all()`, and it will return a single promise. This promise will resolve when all of the promises in the argument array have resolved. This promise’s resolve value will be an array containing the resolved values of each promise from the argument array.
```
async function asyncPromAll() {
  const resultArray = await Promise.all([asyncTask1(), asyncTask2(), asyncTask3(), asyncTask4()]);
  for (let i = 0; i < resultArray.length; i++){
    console.log(resultArray[i]); 
  }
}
```
In our above example, we await the resolution of a `Promise.all()`. This `Promise.all()` was invoked with an argument array containing four promises (returned from required-in functions). Next, we loop through our resultArray, and log each item to the console. The first element in `resultArray` is the resolved value of the `asyncTask1()` promise, the second is the value of the `asyncTask2()` promise, and so on.

`Promise.all()` allows us to take advantage of asynchronicity— each of the four asynchronous tasks can process concurrently. `Promise.all()` also has the benefit of failing fast, meaning it won’t wait for the rest of the asynchronous actions to complete once any one has rejected. As soon as the first promise in the array rejects, the promise returned from `Promise.all()` will reject with that reason. As it was when working with native promises, `Promise.all()` is a good choice if multiple asynchronous tasks are all required, but none must wait for any other before executing.

```
// app.js
let {cookBeans, steamBroccoli, cookRice, bakeChicken} = require('./library.js');

// Write your code below:
async function serveDinnerAgain(){
  let foodArray = await Promise.all([steamBroccoli(), cookRice(), bakeChicken(), cookBeans()]);
  console.log(`Dinner is served. We're having ${foodArray[0]}, ${foodArray[1]}, ${foodArray[2]}, and ${foodArray[3]}.`);
}

serveDinnerAgain();
```
```
// library.js
let cookBeans = () => {
  return new Promise ((resolve, reject) => {
   setTimeout(()=>{
     resolve('beans');
   }, 1000);
 });
};

let steamBroccoli = () => {
 return new Promise ((resolve, reject) => {
   setTimeout(()=>{
     resolve('broccoli');
   }, 1000);
 });
};

let cookRice = () => {
 return new Promise ((resolve, reject) => {
   setTimeout(()=>{
     resolve('rice');
   }, 1000);
 });
};

let bakeChicken = () => {
 return new Promise ((resolve, reject) => {
   setTimeout(()=>{
     resolve('chicken');
   }, 1000);
 });
};

module.exports = {cookBeans, steamBroccoli, cookRice, bakeChicken};
```

## Requests
Four most common [HTTP Requests](https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods):
1. GET - Use JavaScript's XHR object
2. POST - Use JavaScript's XHR object
3. PUT
4. DELETE

One of JavaScript’s greatest assets is its non-blocking properties, or that it is an asynchronous language. JavaScript uses an event loop to handle asynchronous function calls.

[MDN Documentation: Event Loop](https://developer.mozilla.org/en-US/docs/Web/JavaScript/EventLoop)

### XHR GET Requests
Asynchronous JavaScript and XML (AJAX), enables requests to be made after the initial page load.
Initially, AJAX was used only for XML formatted data, now it can be used to make requests that have many different formats.

[XHR GET diagram](https://content.codecademy.com/courses/intermediate-javascript-requests/diagrams/XHR%20GET%20diagram.svg)

### XHR POST Requests
[XHR POST diagram](https://content.codecademy.com/courses/intermediate-javascript-requests/diagrams/XHR%20POST%20diagram.svg)

### Datamuse API
[Datamuse API Documentation](https://www.datamuse.com/api/)

### Rebrandly URL Shortener API
[How to Generate an API key to use the Rebrandly URL Shortener API](https://www.codecademy.com/articles/rebrandly-signup)

### Async GET and POST Requests
[async/await GET diagram](https://content.codecademy.com/courses/intermediate-javascript-requests/diagrams/async%20await%20GET%20diagram.svg)

Key points:

1. Using an `async` function that will return a promise.
2. `await` can only be used in an `async` function. `await` allows a program to run while waiting for a promise to resolve.
3. In a `try...catch` statement, code in the `try` block will be run and in the event of an exception/error, the code in the `catch` statement will run.

```
// Boilerplate Async GET Request
const getData = async () => {
  try {
    const response = await fetch('https://api-to-call.com/endpoint');
    if(response.ok){
      const jsonResponse = await response.json();
      return jsonResponse;
    }
    throw new Error('Request failed!');
  } catch (error) {
    console.log(error);
  }
};
```
```
// Boilerplate Async POST request
const getData = async ()  => {
    try {
    const response = await fetch("https://api-to-call.com/endpoint", {
      method: 'POST',
      body: JSON.stringify({id: 200})
    });
    if (response.ok) {
      const jsonResponse = await response.json()
      return jsonResponse;
    }
    throw new Error('Request failed!');
  } catch (error)  {
    console.log(error)
  }
};
```

# How HTTP and TCP Works
Original article: [HTTP & TCP](https://www.codecademy.com/courses/introduction-to-javascript/articles/http-requests)
