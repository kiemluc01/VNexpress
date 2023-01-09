$(document).ready(function() {
    $('.rep').click(function() {
        var id = this.getAttribute('idform')
        document.getElementById(id).style.display = 'block'
    })
})