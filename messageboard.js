window.onload = function () {
    $.get("/projects/messageboard/messageboard.php", function (data) {
        for (var i = 0, l = data.length; i < l; i++) {
            $("#message-board")
                .append("<p>" + data[i].id + "*" + data[i].name + "<br>" + data[i].message + "<br><br> </p>");
        }
    }, "json");

};

function post_message() {
    var name = document.getElementById("name").value;
    var message = document.getElementById("message").value;
    $.ajax({
        type: "POST",
        url: "/projects/messageboard/post_message.php",
        data: {
            name: name,
            message: message
        }
    });

};

function empty_check() {
    console.log("change");
    if (document.getElementById("name").value.length == 0 || document.getElementById("message").value.length == 0) {
        document.getElementById("submit").style.display = "none";
        document.getElementById("empty-check").style.display = "block";
    } else {
        document.getElementById("submit").style.display = "block";
        document.getElementById("empty-check").style.display = "none";
    }
}
