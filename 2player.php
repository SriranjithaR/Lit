Adding the first line.
<html>
<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</head>

<body id="body">

       <input type="hidden" id="user" name="user" value="Gingy"> 
	   <input type="text" id="comment" name="comment" placeholder="Enter your comment"/>
	   <button id="go" value="Go">Go    </button>
	
    <div id ="comments">
	</div>


<script>
  $(document).ready(function () {
    $("#go").click(function(){
        $.ajax({
            url: "php/enterDb.php", 
            type: "POST", 
            cache : false,
            dataType : 'json',
            async : true,
            data: {user : $('#user').val(),comment : $('#comment').val()},
            success: function(result){
                
               alert("result");
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
