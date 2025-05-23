/**
 * A simple demonstration of the Fetch API.
 * 
 * Sam Scott, McMaster University, 2025
 */
window.addEventListener("load", function() {

    /**
     * This function should be called when the AJAX call is complete
     * and the text has been extracted from the response.
     * @param {String} text 
     */
    function success(text) {
        let span = document.getElementById("target");
        span.innerHTML = text;
        console.log(text); // debug
    }

    let button = document.getElementById("clickme");
    button.addEventListener("click", function() {

        fetch("hello.txt")
            .then(response => response.text()) // retrieves the response text
            .then(success); // calls the success function
    });
});