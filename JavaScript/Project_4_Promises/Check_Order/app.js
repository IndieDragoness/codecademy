// Import checkInventory() method so it can be used
const {checkInventory} = require('./library.js');

const order = [['sunglasses', 1], ['bags', 2]];

// Custom success and failure handlers
function handleSuccess(resolvedVal){
  console.log(resolvedVal);
}

function handleFailure(failedVal){
  console.log(failedVal);
}

checkInventory(order).then(handleSuccess, handleFailure);