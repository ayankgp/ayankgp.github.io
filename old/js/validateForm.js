function validateForm()
	{
		var name=document.input.name
		var email = document.input.email
		var message = document.input.message
		if(message.value == "")
		{
			alert("Please insert a message");title.focus();
			return false
		}
		if(name.value == "")
		{
			alert("Really want to send an anonymous message");title.focus();
			return false
		}
		if(email.value == "")
		{
			alert("I won't be able to get back to you");title.focus();
			return false
		}
		return true
	}