<?php 
$user = (object) [
    'name' => 'Daiyaan Ijaz',
    'email' => 'daiyaanijaz@gmail.com',
    'logged' => true
];

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

<!-- container -->
<div class="font-sans bg-gray-100 flex flex-col min-h-screen w-full">
<!-- header -->
  <div>
    <div class="bg-blue-500">
      <div class="container mx-auto px-4">
        <div class="flex items-center md:justify-between py-4">
          <div class="w-1/4 md:hidden">
            <svg class="fill-current text-white h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M16.4 9H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1zm0 4H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1zM3.6 7h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1z"/></svg>
          </div>
          <div class="w-1/2 md:w-auto text-center text-white text-2xl font-medium">
            Postogon
          </div>
          <div class="w-1/4 md:w-auto md:flex text-right">
            <div>
              <img class="inline-block h-8 w-8 rounded-full" src="https://avatars0.githubusercontent.com/u/4323180?s=460&v=4" alt="">
            </div>


		<?php 
			if ($user->logged) {
			include('state/loggedin/components/header/index.php');
			}
			else {
			include('state/loggedout/components/header/index.php');
			}
		?>
			
            <div class="hidden md:block md:flex md:items-center ml-2">
              <span class="text-white text-sm mr-1"><?php print $user->name ?>
			  </span>
              <div>
                <svg class="fill-current text-white h-4 w-4 block opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M4.516 7.548c.436-.446 1.043-.481 1.576 0L10 11.295l3.908-3.747c.533-.481 1.141-.446 1.574 0 .436.445.408 1.197 0 1.615-.406.418-4.695 4.502-4.695 4.502a1.095 1.095 0 0 1-1.576 0S4.924 9.581 4.516 9.163c-.409-.418-.436-1.17 0-1.615z"/></svg>
              </div>
            </div>
			
			
          </div>
        </div>
      </div>
    </div>
	</div>


<!-- Footer -->
  <div class="bg-white border-t">
    <div class="container mx-auto px-4">
      <div class="md:flex justify-between items-center text-sm">
        <div class="text-center md:text-left py-3 py-4 border-b md:border-b-0">
		<div class="text-gray-500 text-center md:mr-4">&copy; 2020 Postogon</div>
        </div>
				        <div class="text-center md:text-left py-3 py-4 border-b md:border-b-0">
				<a href="#" class="inline-block leading-tight bg-blue-500 border hover:bg-blue-400 px-3 py-2 text-white rounded">Refresh</a>
        </div>
        <div class="md:flex md:flex-row-reverse items-center py-4">
          <div class="text-center mb-4 md:mb-0 md:flex">
            <div class="w-48 inline-block relative mb-4 md:mb-0 md:mr-4">
		  <a href="#" class="no-underline text-gray-500 mr-4">Jobs</a>
		  <a href="#" class="no-underline text-gray-500 mr-4">Legal</a>
		  <a href="#" class="no-underline text-gray-500 mr-4">Privacy</a>
            </div>
            <div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  </div>
</body>
</html>