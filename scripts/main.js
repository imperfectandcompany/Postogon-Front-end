//defiine
const delay = ms => new Promise(res => setTimeout(res, ms));


window.addEventListener('load', (event) => {
	swap();
 });
 
 
 const swap = async () => {
  await delay(500);
  //puts all posts with id skeleton post into an array, one for each normal post
	var divs = document.querySelectorAll('#skeletonpost');
for (var i = 0; i < divs.length; i++) {
	//i is index of each, it loops until its empty
    divs[i].classList.add('hidden');
}


	const div = document.querySelectorAll("div.skeleton");
for (var i = 0; i < div.length; i++) {
	//i is index of each, it loops until its empty
    div[i].classList.remove('container');
    div[i].classList.add('overflow-y-scroll');	
}


	var divs = document.querySelectorAll('#normalpost');
for (var i = 0; i < divs.length; i++) {
	//i is index of each, it loops until its empty
    divs[i].classList.remove('hidden');
}	

};