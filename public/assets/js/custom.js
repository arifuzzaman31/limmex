
$("#contactForm").submit(function(event){
	event.preventDefault();
	var data = new FormData(this);
	console.log(data);
});

/*$('#contact-form').on('click', function(){
	var name = $('#name').val();
	var email = $('#email').val();
	var phone = $('#phone').val();
	var subject = $('#subject').val();
	var message = $('#message').val();

	if (name) {}

	console.log(name + email + subject + message + phone);
})*/