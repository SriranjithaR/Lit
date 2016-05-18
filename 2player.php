Adding the first line.
<html>
<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</head>

<body id="body">
<form>
       <input type="hidden" id="user" name="user" value=<?php echo $_GET['user']?>> 
	   <input type="text" id="comment" name="comment" placeholder="Enter your comment"/>
	   <button id="go" value="Go">Go    </button>
</form>
    <div id ="comments">
	</div>


<script>
  $(document).ready(function () {
    $("#go").click(function(e){
        e.preventDefault();
        $.ajax({
            url: "php/enterDb.php", 
            type: "POST", 
            cache : false,
            dataType : 'json',
            async : true,
            data: {user : $('#user').val(),comment : $('#comment').val()},
            success: function(result){
                
               alert("result");
               $("#comments").empty();
               $.each(result,function(index,elt){
                    $("#comments").append("<p><span style='color:red'>"+elt.user+"</span>  "+elt.comments+"</p>");
                });

                $("#comment").val("");
            },

            });
    });

    });


</script>
</body>
</html>
