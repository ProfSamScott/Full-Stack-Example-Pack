/**
 * A demonstration of the Fetch API for POST, using 2 parameters.
 * 
 * Sam Scott, McMaster University, 2025
 */
window.addEventListener("load", function () {

    /**
     * This function should be called when the AJAX call is complete
     * and the text has been extracted from the response.
     * @param {String} text 
     */
    function success(text) {
        let span = document.getElementById("target");
        span.innerHTML = span.innerHTML + text + " ";
        console.log(text); //debug
    }

    let button = document.getElementById("clickme");
    button.addEventListener("click", function () {

        // get the name
        let min = document.getElementById("min").value;
        let max = document.getElementById("max").value;

        // construct the parameter string
        // we're using the same style as GET params
        let params = "min=" + min + "&max=" + max;
        let config = {
            method: 'POST',
            headers: { "Content-Type": "application/x-www-form-urlencoded" }, // parameter format
            body: params // POST params are sent in the body
        };
        console.log(params); // debug

        // do the fetch
        fetch("random.php", config)
            .then(response => response.text())
            .then(success)

    });
});