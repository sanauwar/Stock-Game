$("#create-user").validate({
	rules: {
		fullname: "required",
		mobile	: {
			required:true,
			minlength:10,
			maxlength:10,
			number: true
		},
		username: {
			required: true,
			minlength: 2
		},
		email: {
			required: true,
			email: true
		},
		password: {
			required: true,
			minlength: 5
		},
		password_confirm: {
			required: true,
			minlength: 5,
			equalTo: "#password"
		},
	},
		messages: {
			fullname: "Enter Fullname",
			mobile:"Enter 10 digit Mobile Number",
			username: {
				required: "Enter Username",
				minlength: "Your username must consist of at least 3 characters"
			},
			email: "Enter a valid Email address",
			password: {
				required: "Enter Password",
				minlength: "Your password must be at least 5 characters long"
			},
			password_confirm: {
				required: "Re-type Password",
				equalTo: "Please enter the same password as above"
			},
		}
	});

//Login form validation
$("#user-login").validate({
	rules: {
		username: "required",
		password: "required"
	},
		messages: {
			username: "Enter Username",
			password: "Enter Password",
		}
	});