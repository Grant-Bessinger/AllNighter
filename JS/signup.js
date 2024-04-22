$(document).ready(function(){
  $("#register").on("click", function() {
        
        console.log('testing');

       
           var name = $("#name").val();
           var email = $("#email").val();
            var username = $("#uname").val();
            var password = $("#pwd").val();
            
        
          if(name==='' || email==='' || username==='' || password ==='')
          {
            $(".msg").html("All fields are required!");
          }
          else
          {
          $.ajax({
            url: '../PHP/signup.php',
            type: 'post',
            data: { name:name , email:email ,username: username, password: password },
            success:function(data){
              $(".msg").html(data);
                window.location.href = "http://localhost/AllNighter/home.html";
              
            }
          });
          }
        });
      });