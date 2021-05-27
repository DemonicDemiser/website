let scrollToBottom = document.querySelector("#scroll")
let pageBottom = document.querySelector("#page-bottom")

scrollToBottom.addEventListener("click", function() {
    pageBottom.scrollIntoView()
})

$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
})