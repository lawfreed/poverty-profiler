<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Standard Meta -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="semantic-ui/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="css/modifier.css">
	<title>Barangay Poverty Profiler</title>
</head>
<body>

	@include('partials.nav')
	<div class="ui container">
		<div id="contain" class="ui active tab" data-tab="home">
			@include('pages.home')
			
		</div>
		<div class="ui tab" data-tab="overview">
			@include('pages.overview')
		</div>
	</div>
	<!-- Modals -->
	@include('modals.profile')
	@include('modals.register')
	@include('modals.login')
	<!-- ./Modals -->
	@include('partials.footer')
</body>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="semantic-ui/semantic.min.js"></script>
<script type="text/javascript" src="js/dropdown.js"></script>
<script type="text/javascript" src="js/tab.js"></script>
<script type="text/javascript" src="js/dimmer.js"></script>
<script type="text/javascript" src="js/modal.js"></script>
</html>