$(document).ready(function() {
    $('.rep').click(function() {
        document.getElementsByClassName('repcmt').style.display = 'none'
        var id = this.getAttribute('idform')
        document.getElementById(id).style.display = 'block'
    })
})