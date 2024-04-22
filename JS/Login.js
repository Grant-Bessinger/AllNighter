$(document).ready(function () {
  $("#login").on("click", function (event) {
     console.log(); // Check the received data
      event.preventDefault(); // Prevent default form submission behavior

      // Gather form data
      var username = $("#uname").val();
      var password = $("#pwd").val();

      if (uname === '' || password === '') {
          $(".msg").html("Both fields are required");
      } else {
          // Send data to Login.php using AJAX
          $.ajax({
              url: '../PHP/login.php',
              method: 'post',
              data: { uname: username, pwd: password },
              dataType: "JSON",
              success: function (data) {
                console.log(); // Check the received data
                if(data['active']==1)
                
                {
                  $(".msg").html(data['msg']);
                 
                  setTimeout(function(){
                    
                    window.location.href = "http://localhost/AllNighter/Html/home.html";
                },2000);
                }
                else
                {
                  $(".msg").html(data['msg']);
                }
            }
          });
      }
  });
});
