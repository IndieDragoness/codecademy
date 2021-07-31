// Today's forecast in Kelvin
const kelvin = 293;

// Celsius is similar to Kelvin, only difference is that it is 273 degree's less than Kelvin
const celsius = kelvin - 273;

// Equation to convert Celsius to Fahrenheit
let fahrenheit = celsius * (9/5) + 32;

// Converting Celsius to Fahrenheit results in a decimal number, can use .floor() to round down
fahrenheit = Math.floor(fahrenheit);

console.log(`The temperature is ${fahrenheit} degrees in Fahrenheit`);
