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
     * @returns HTML rendering of a player object
     */
    render() {
        return "<div class='player'>" +
            "<h2>" + this.name + "</h2>" +
            "<ul>" +
            "<li>Rank: " + this.rank + "</li>" +
            "<li>Serial #: " + this.serial + "</li>" +
            "</ul></div>";
    }
}