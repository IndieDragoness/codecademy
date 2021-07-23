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
## Console
In JavaScript, the `console` keyword refers to an object, a collection of data and actions, that we can use in our code.

# Definitions
1. Front-end: The portion of the website that is sent to the user/users browser. The 'Store front'. The front-end of a website consists of JavaScript, CSS, HTML, images, and other static assets sent to the client.
2. Client: When we navigate to a website the browser is the client, and it sends a request to the back-end for all the assets needed to view and interact with the website.
3. Back-end: The portion of the website that supports operations requested by the front-end. The back-end consists of a web server and all the logic and data needed to create and maintain a website or web application.
4. Web Server (Back-end): a web server is a computer or program which listens for requests from clients and sends back responses. This component is well suited to handling delivery of static content.
5. Application Server (Back-end): this is actually often a collection of programming logic which is needed to deliver dynamic content to a client. The application server will often handle other tasks such as site security and interacting with data.
6. Data Base (Back-end): important information like usernames and passwords has to be stored and accessed somewhere. A large web application will often have multiple databases to store all different types of data needed to run the site smoothly.
7. PHP (Back-end): PHP is a back-end language. PHP can be used to generate HTML files. We embed PHP scripts within HTML by inserting PHP code between the opening (`<?php`) and closing (`?>`) tags. Presenting and interacting with HTML is one of the primary uses of PHP.




