<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">
    function submitData(){
        $(document).ready(function(){
            var data = {
                username: $('#username').val(),
                email: $('#user_email').val(),
                pass: $('#pass').val(),
                contact: $('#contact').val(),
                action: $('#action').val(),
            };

            $.ajax({
                url: 'function.php',
                type: 'POST',
                data: data,
                success:function(response){
                    alert(response);
                    if (response == "Log In Successfully"){
                        window.location.reload();
                    }
                    if (response == "Registered Successfully"){
                        window.location.href = "login.php";
                    }
                }
            });
        });
    }

    function addReview(){
        $(document).ready(function(){
            var data = {
                rating: $(".rating:checked").val(),
                // rating: $('#rating').val(),
                review: $('#review').val(),
                userReview: $('#userReview').val(),
                action: $('#action').val(),
            };

            $.ajax({
                url: 'function.php',
                type: 'POST',
                data: data,
                success:function(response){
                    alert(response);
                    if (response == "Comment Successfully Added"){
                        window.location.reload();
                    }
                }
            });
        });
    }

    function bookedFlight(){
        $(document).ready(function(){
            $.ajax({
                url: 'emailSMTP.php',
                type: 'POST',
                data: data,
                success:function(response){
                    alert(response);
                    if (response == "Flight Successfully Added"){
                        window.location.reload();
                    }
                }
            });
        });
    }

</script>