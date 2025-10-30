$(document).ready(function() {
$("#registrationForm").on("submit", function(e) {
e.preventDefault();
$.ajax({
url: "submit.php",
type: "POST",
data: $(this).serialize(),
success: function(response) {
$("body").html(response);
},
error: function() {
alert("Something went wrong!");
}
});
});
});
