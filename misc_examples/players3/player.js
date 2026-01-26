/**
 * A class to represent a player object
 * Sam Scott, McMaster 2025
 */
class Player {
    /**
     * Construct a new player
     * @param {string} name 
     * @param {string} rank 
     * @param {number} serial 
     */
    constructor(name, rank, serial = "0000") {
        this.name = name;
        this.rank = rank;
        this.serial = serial;
    }

    /**
     * @returns DOM rendering of a player object into a <div> element
     */
    render() {
        // create the outer div
        let div = document.createElement("div");
        div.classList.add("player");

        // create and append the heading
        let h2 = document.createElement("h2");
        h2.innerHTML = this.name;
        div.appendChild(h2);

        // create and append the ul for rank and serial number
        let ul = document.createElement("ul");
        let li1 = document.createElement("li");
        li1.innerHTML = "Rank: "+this.rank;
        let li2 = document.createElement("li");
        li2.innerHTML = "Serial #: "+this.serial;
        ul.appendChild(li1);
        ul.appendChild(li2);
        div.appendChild(ul);
        
        // return the result
        return div;
    }
}