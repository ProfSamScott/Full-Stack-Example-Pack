function respond(event) {
    alert("You clicked me!");
}

let node = document.getElementById("clickme");
node.addEventListener("click", respond);