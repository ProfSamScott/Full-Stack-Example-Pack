/**
 * Gets a JSON-encoded list of user objects.
 * 
 * Sam Scott, McMaster University, 2025
 */
window.addEventListener("load", function () {

    /**
     * Gets a user object and converts it to HTML for inclusion on the page.
     * @param {User} user 
     */
    function userToHtml(user) {
        let html = "<div>";
        html += "<h3>" + user.lastname + ",  " + user.firstname + "</h3>";
        html += "<p>Final Exam: " + user.finalexam + "</p>";
        html += "</div>";
        return html;
    }
    /**
     * This function should be called when the AJAX call is complete
     * and the json-encoded array has been extracted from the response.
     * @param {Array} users
     */
    function success(users) {
        // build an html string and compute the average grade
        let students = "";
        let sum = 0;
        for (let i = 0; i < users.length; i++) {
            students += userToHtml(users[i]);
            sum += users[i].finalexam;
        }
        let avg = sum / users.length;

        // output the summary
        let span = document.getElementById("target");
        span.innerHTML = users.length + " users. Average Grade: " + avg + ".";

        // output the students
        document.getElementById("students").innerHTML = students;

        console.log(users); // debug
    }

    let button = document.getElementById("clickme");
    button.addEventListener("click", function () {

        // construct the url (try both)
        let url = "server/userlist.php";
        //let url = "server/userlist2.php";

        console.log(url); // debug

        // do the fetch
        fetch(url)
            .then(response => response.json())
            .then(success)
    });
});