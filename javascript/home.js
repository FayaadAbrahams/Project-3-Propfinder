let slideCounter = 0;

function slideshowFunction() 
{
	let i;
	let slides = document.getElementsByClassName("slides");
	
	for (i = 0; i < slides.length; i++)
	{
		slides[i].style.display = "none";
	}
	slideCounter++;
	
	if (slideCounter > slides.length)
	{
		slideCounter = 1;
	}
	
	slides[slideCounter - 1].style.display = "block";
	setTimeout(slideshowFunction, 3500);
}

slideshowFunction();