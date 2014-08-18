 
$(document).ready(function(){
	$("#item-list-container").load("listItem.php");

	$("#submit-bmitem").click(function(){
	$("#submit-item-message").html("sending");
		var bmtitle = $("#bmtitle").val();
		var bmhref = $("#bmhref").val();
		var bmnotes = $("#bmnotes").val();
		
		//returns successful data submission when the value entered is stored in database
		var dataString = 'bmtitle=' + bmtitle + '&bmhref=' + bmhref + '&bmnotes=' + bmnotes;
		$.ajax({
			type: "POST",
			url: "insertBookmarkItem.php", 
			data: dataString, 
			cache: false,
			success: function(result){
				$("#submit-item-message").html(result);
				$("#submit-bm-item")[0].reset();
				$("#item-list-container").load("listItem.php");
				$(".submit-item-response").fadeOut(1500,function(){$(this).remove()});
				
				 
			}
		});
	return false; 
	});
	
		$("#submit-addUser").click(function(){
	$("#submit-user-message").html("sending");
		
		var username =$("username").val();
		var password =$("password").val();
		var firstname =$("firstname").val();
		var lastname =$("lastname").val();
		var email = $("email").val();
		
		//returns successful data submission when the value entered is stored in database
		var dataString = 'username=' +username + '&password=' +password +'&firstname='+  firstname +'$lastname=' + lastname +'&email='+email;

		$.ajax({
			type: "POST",
			url: "createNewUser.php", 
			data: dataString, 
			cache: false,
			success: function(result){
				$("#submit-user-message").html(result);
				$("#submit-addUser")[0].reset();
				$("#item-list-container").load("listItem.php");
				$(".submit-user-response").fadeOut(1500,function(){$(this).remove()});
				
				 
			}
		});
	return false; 
	});
	
});
 
