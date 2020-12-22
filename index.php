<?php 
session_start();
require_once('config.php'); 
$user->logged = $_SESSION['isLoggedIn'];
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Mockup</title>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>


<body>
<!-- Header -->
				<?php 
			if ($user->logged) {
				require_once('state/loggedin/index.php');
			}
			else {
				require_once('state/loggedout/index.php');
			
			}
		?>

		<!-- control panel -->
		    <div style="position: fixed; bottom: 10px; left: 10px; color: red;">
                <strong>
UNDER DEVELOPMENT
                </strong>
            </div>
					    <div style="position: fixed; bottom: 10px; right: 10px; color: red;">
                <strong>
Change view ->  	
				<?php 
			if ($user->logged) {
			echo '<a href="redirect.php?isLoggedIn=0" class="inline-block leading-tight bg-red-500 border hover:bg-red-600 px-3 py-2 text-white rounded">Log out</a>';
			}
			else {
			echo '<a href="redirect.php?isLoggedIn=1" class="inline-block leading-tight bg-red-500 border hover:bg-red-600 px-3 py-2 text-white rounded">Log in</a>';
			}
		?>

                </strong>
            </div>
</body>






</html>