const inventory = {
  sunglasses: 1900,
  pants: 1088,
  bags: 1344
};

// Create the executor function
function myExecutor (resolve, reject) {
    if (inventory['sunglasses'] > 0) {
        resolve('Sunglasses order processed.');
    } else {
        reject('That item is sold out.');
    }
}

// Create a custom function that returns a new promise
function orderSunglasses(){
  return new Promise(myExecutor);
}
// Create a variable assigned to the returned value of the custom function
orderPromise = orderSunglasses();
console.log(orderPromise);