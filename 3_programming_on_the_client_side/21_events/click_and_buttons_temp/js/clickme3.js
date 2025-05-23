window.addEventListener("load", function () {

    let node = document.getElementById("clickme");
    
    node.addEventListener("click", function(event) {
        alert("You clicked me!");
    });

});