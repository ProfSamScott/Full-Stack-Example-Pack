/**
 * A demonstration of the Fetch API for receiving a JSON-encoded
 * array as a response.
 * 
 * Sam Scott, McMaster University, 2025
 */
window.addEventListener("load", function() {

    /**
     * This function should be called when the AJAX call is complete
     * and the json-encoded array has been extracted from the response.
     * @param {Array} a 
     */
    function success(a) {
        let span = document.getElementById("target");
        let sum = 0;
        for (let i = 0; i < a.length; i++) {
            sum += a[i];
        }
        let avg = sum / a.length;
        span.innerHTML = a.length + " ints recieved, average value: " + avg;

        console.log(a); // debug
    }

    let button = document.getElementById("clickme");
    button.addEventListener("click", function() {

        // get the name
        let min = document.getElementById("min").value;
        let max = document.getElementById("max").value;
        let num = document.getElementById("num").value;

        // construct the url with parameters
        let url = "server/randomlist.php?min=" + min + "&max=" + max + "&num=" + num;
        console.log(url); // debug

        // do the fetch
        fetch(url)
            .then(response => response.json()) // calls the json function instead of text
            .then(success)
    });
});