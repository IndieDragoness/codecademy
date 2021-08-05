const xhr = new XMLHttpRequest();
const url = "https://api-to-call.com/endpoint";
// JSON.stringify() will convert a value to a JSON string. By converting the value to a string, we can then send the data to a server.
const data = JSON.stringify({ id: '200' });
xhr.responseType = 'json';
xhr.onreadystatechange = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
        return xhr.response;
    }
}

xhr.open('POST', url);
xhr.send(data); // Since it's a POST, we're sending data 