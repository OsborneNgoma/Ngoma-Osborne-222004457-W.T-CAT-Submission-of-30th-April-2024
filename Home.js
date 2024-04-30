$(".log-in").click(function(){
  $(".signIn").addClass("active-dx");
  $(".signUp").addClass("inactive-sx");
  $(".signUp").removeClass("active-sx");
  $(".signIn").removeClass("inactive-dx");
});

$(".back").click(function(){
  $(".signUp").addClass("active-sx");
  $(".signIn").addClass("inactive-dx");
  $(".signIn").removeClass("active-dx");
  $(".signUp").removeClass("inactive-sx");
});
$(document).ready(function() {
  // Form submission and validation
  $("#signupForm").submit(function(event) {
    event.preventDefault(); // Prevent default form submission

    // Get form data
    var firstName = $("#firstName").val();
    var lastName = $("#lastName").val();
    var email = $("#email").val();
    var username = $("#username").val();
    var password = $("#password").val();

    // Validate form data
    if (!firstName || !lastName || !email || !username || !password) {
      $("#errorMessage").text("All fields are required");
      return;
    }
    // and AJAX request to the server to insert data into the database
    $("#signupForm")[0].submit();
  });
});
