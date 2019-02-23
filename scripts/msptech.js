$(document).ready(function() {
     $("#submit").click(function() {
          var name = $("#name").val();
          var email = $("#email").val();
          var message = $("#message").val();
          var contact = $("#contact").val();
          $("#returnmessage").empty();

          if (name == '' || email == '' || contact == '') {
               alert("Please complete all *** REQUIRED *** fields.");
          } else {

          $.post("contact_form.php", {
          name1: name,
          email1: email,
          message1: message,
          contact1: contact
          }, function(data) {
               $("#returnmessage").append(data);
               if (data == "Thank you! We will contact you within 48 hours.") {
                    $("#form")[0].reset();
               }
          });
          }
     });
});