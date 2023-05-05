var slideIndex=0;
showSlides();

function showSlides() {
var i;
var slides=document.getElementsByClassName("mySlides");
for (i=0; i < slides.length; i++ )
{

slides[i].style.display="none";

}
slideIndex++;
if (slideIndex > slides.length)

{
slideIndex=1;
}


slides[slideIndex - 1].style.display="block";

setTimeout(showSlides, 7000);//change image every 2 seconds

}











var BigslideIndex=0;
BigshowSlides();

function BigshowSlides() {
var i;
var Bigslides=document.getElementsByClassName("myBigSlides");
for (i=0; i < Bigslides.length; i++ )
{

    Bigslides[i].style.display="none";

}
BigslideIndex++;
if (BigslideIndex > Bigslides.length)

{
    BigslideIndex=1;
}


Bigslides[BigslideIndex - 1].style.display="block";

setTimeout(BigshowSlides, 5000);//change image every 2 seconds

}
