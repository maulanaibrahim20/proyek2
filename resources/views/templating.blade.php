
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Puskesmas Lohbener</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	
	@include("komponen.css.style_css")

</head>
<body>
	<div class="wrapper">
		@include("komponen.header.header")

		<!-- Sidebar -->
		@include("komponen.sidebar.side_bar")
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				@yield("content")
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<div class="copyright ml-auto">
						2022, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">Team 8</a>
					</div>				
				</div>
			</footer>
		</div>
		
		<!-- Custom template | don't include it in your project! -->
		<!-- End Custom template -->
	</div>
	@include("komponen.js.style_js")
	@yield("js")
</body>
</html>