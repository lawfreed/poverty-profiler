// Add Profile Modal
$('#profile-button-modal').click(function() {
	$('#profile-event-modal').modal('show');
});

// Register Modal
$('#register-trigger-modal').click(function() {
	$('#register-event-modal').modal('show');
});

// Log-in Modal
$('#login-trigger-modal').click(function() {
	$('#login-event-modal').modal('show');
});

// Form Date Created
$('#form-date-created').calendar({
	type: 'date'
});
