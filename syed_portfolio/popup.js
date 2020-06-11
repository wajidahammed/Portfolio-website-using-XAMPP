window.onload = function()
{
	document.getElementById('login').addEventListener('click',
	function(){
		document.querySelector('.bg-modal').style.display = 'flex';
	}
	);
	document.querySelector('.close').addEventListener('click',
	function(){
		document.querySelector('.bg-modal').style.display = 'none';
	}
	);

	document.getElementById('signup').addEventListener('click',
	function(){
		document.querySelector('.bg--modal').style.display = 'flex';
	}
	);
	document.querySelector('.closee').addEventListener('click',
	function(){
		document.querySelector('.bg--modal').style.display = 'none';
	}
	);

	document.getElementById('contact').addEventListener('click',
	function(){
		document.querySelector('.bg---modal').style.display = 'flex';
	}
	);
	document.querySelector('.closeee').addEventListener('click',
	function(){
		document.querySelector('.bg---modal').style.display = 'none';
	}
	);
}
