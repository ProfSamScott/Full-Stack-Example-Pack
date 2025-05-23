/**
 * A simple demonstration of the Fetch API with a GET parameter.
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

        // get the name
        let name = document.getElementById("name").value;

        // construct the URL with parameters
        let url = "hello.php?nameparam=" + name;
        console.log(url); // debug

        // do the fetch
        fetch(url)
            .then(response => response.text())
            .then(success)

    });
});