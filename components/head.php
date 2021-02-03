   <head>
	<title>Postogon - Home [IN DEVELOPMENT]</title>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no, height=device-height, viewport-fit=cover">
	<script src="scripts/main.js"></script>
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>	
    <style>
	body * {
transform: translate3d(0, 0, 0);
-webkit-transform: translate3d(0, 0, 0);
perspective: 1000;
-webkit-perspective: 1000;
}

	*:not(html) {
transform: translate3d(0, 0, 0);
-webkit-transform: translate3d(0, 0, 0);
perspective: 1000;
-webkit-perspective: 1000;
}

@keyframes redraw{
    0% {opacity: 1;}
    100% {opacity: .99;}
}

// ios redraw fix
animation: redraw 1s linear infinite;

html, body {
    -webkit-overflow-scrolling : touch !important;
    overflow: auto !important;
    height: 100% !important;
}

</style>
   </head>

