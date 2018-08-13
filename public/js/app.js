
function myFunction(id){
    var element = document.getElementById(id);
    var children = element.childNodes;
    for (var i = 0; i < children.length; i++){
        $("#" + id).children(i).toggle();
    }
}

$(document).ready(function() {

    $(".templateBox").click(function () {
        myFunction(this.id);
    }, function () {
        myFunction(this.id);
    });

    $(".exampleBody").click(function () {
        myFunction(this.id);
    }, function () {
        myFunction(this.id);
    });

});



//# sourceMappingURL=app.js.map
