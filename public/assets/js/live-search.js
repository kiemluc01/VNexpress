$(document).ready(function() {
    $("#search").keypress(function(e) {
        var search_text = this.value + e.key
        if (e.which == 13) {
            console.log("đã nhấn enter")
            this.value = ""
        } else
            console.log(search_text)
    })
})