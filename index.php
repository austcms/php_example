<?php
/* AUST CODE #1 */
/* Include the lib. */
include('aust_lib.php');

/* 
 * Tell the lib where Aust is. 'admin/' is the default,
 * so you wouldn't need this line in this case.
 */
austPath('admin/');
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Aust example for PHP</title>
	<link rel="stylesheet" href="css/style.css" />
</head>
<body>

<div id="centralizer">
	<div id="centralizer_container">
		
		<div id="header">
			<img src="images/aust_logo.png" />
		</div>
		
		<div id="content">
			<div id="content_container">
		
				<h1>PHP code examples</h1>
		
				<?php
				/* AUST CODE #2 */
				/*
				 * We will load the data from Aust, then loop with foreach().
				 * 
				 * austQuery() is the magic command.
				 * 
				 * The argument is a string to the API, which returns an array.
				 * Read the README file for more information.
				 */
				$content = austQuery('query=news');
				
				if( empty($content) ){
					?>
					<p class="failure">
						Ops, Aust is not completely installed. Have you read the documentation
						or README?
					</p>
					<p>
						You need to download Aust, create a structure called News using the Textual
						module and come here again.
					</p>
					<?php
				} else {
					?>
					<h2>How to read contents from Aust</h2>

					<p>
						The content below is loaded through the Aust's API.
						PHP is converting the JSON into Array automatically.
					</p>
					<ul>
						<?php 
						/* AUST CODE #3 */
						/* We loop through the data which was loaded */
						foreach( $content as $lastNews ){
							?>
							<li><?php echo $lastNews['title'] ?></li>
							<?php
						}
						?>
					</ul>
					<p>
						That's it. Take a look at the code to see how simple loading data is.
					</p>
					<?php
				}
				?>
			</div>
		</div>
		
		<div id="footer">
			<div id="footer_container">
				Website: <a href="http://austcms.com">www.austcms.com</a>
			</div>
		</div>
	</div>
</div>

</body>
</html>
