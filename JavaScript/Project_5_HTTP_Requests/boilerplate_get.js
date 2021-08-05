// Create a new XMLHttpRequest. It's common practice to name it xhr.
const xhr = new XMLHttpRequest();

// Next save the URL to a const
const url = "https://api-to-call.com/endpoint";

// Format the response as a JSON
xhr.responseType = 'json';

// Set the event handler equal to an anonymous arrow function
xhr.onreadystatechange = () => {
    // Check if the request has finished
    if (xhr.readyState === XMLHttpRequest.DONE) {
        return xhr.response; // Return the response
    }
};

// .open creates a new request and the arguments passed in determine the type and URL of the request
xhr.open('GET', url);

xhr.send();
