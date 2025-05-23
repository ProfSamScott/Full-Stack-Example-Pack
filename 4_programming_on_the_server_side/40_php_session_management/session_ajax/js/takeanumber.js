/**
 * Sends an AJAX request to the user.
 */
window.addEventListener("load", function() {
    document.getElementById("check").addEventListener("click", function() {

        // Fetch request to checknum.php
        fetch("checknum.php", { credentials: 'include' })
            .then(response => response.json())
            .then(function(data) {
                let msg;
                if (data === -1) {
                    // if response is -1, there is no session.
                    msg = "YOU'RE DONE! KINDLY LEAVE THE STORE.";
                } else {
                    // Otherwise, give them a progress report
                    msg = "You have moved " + data.movedup + " spots.";
                    switch (data.position) {
                        case 0:
                            msg += "You're being served!";
                            break;
                        case 1:
                            msg += "You're next!";
                            break;
                        default:
                            msg += "You're number " + data.position + " in line.";
                            break;
                    }
                }
                // put the message on the page
                document.getElementById("message").innerHTML = msg;
            });
    });
});