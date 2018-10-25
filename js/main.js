
            // blur effect
function unBlur(){
  var mainTitle = document.getElementById("simonTitre");
  mainTitle.style.filter = "blur(0rem)";
}
window.setInterval(unBlur, 400);
// End blur effect

// button mobile/tablette
function myFunction()
{
   document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event)
{
 if (!event.target.matches('.dropbtn'))
 {
   var dropdowns = document.getElementsByClassName("dropdown-content");
   var i;
   for (i = 0; i < dropdowns.length; i++)
   {
     var openDropdown = dropdowns[i];
     if (openDropdown.classList.contains('show'))
     {
       openDropdown.classList.remove('show');
     }
   }
 }
}
// button Desktop
function myButton()
{
   document.getElementById("myDrop").classList.toggle("view");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event)
{
 if (!event.target.matches('.dropbuttn'))
 {
   var dropdowns = document.getElementsByClassName("dropdown-contenue");
   var i;
   for (i = 0; i < dropdowns.length; i++)
   {
     var openDropdown = dropdowns[i];
     if (openDropdown.classList.contains('show'))
     {
       openDropdown.classList.remove('show');
     }
   }
 }
}





// bubulle

// Some random colors
const colors = ["#40C489", "#40C489", "#40C489", "#40C489", "#40C489"];

const numBalls = 50;
const balls = [];

for (let i = 0; i < numBalls; i++) {
  let ball = document.createElement("div");
  ball.classList.add("ball");
  ball.style.background = colors[Math.floor(Math.random() * colors.length)];
  ball.style.left = `${Math.floor(Math.random() * 100)}vw`;
  ball.style.top = `${Math.floor(Math.random() * 100)}vh`;
  ball.style.transform = `scale(${Math.random()})`;
  ball.style.width = `${Math.random()}em`;
  ball.style.height = ball.style.width;

  balls.push(ball);
  document.body.append(ball);
}

// Keyframes
balls.forEach((el, i, ra) => {
  let to = {
    x: Math.random() * (i % 2 === 0 ? -11 : 11),
    y: Math.random() * 12
  };

  let anim = el.animate(
    [
      { transform: "translate(0, 0)" },
      { transform: `translate(${to.x}rem, ${to.y}rem)` }
    ],
    {
      duration: (Math.random() + 1) * 2000, // random duration
      direction: "alternate",
      fill: "both",
      iterations: Infinity,
      easing: "ease-in-out"
    }
  );
});

// button image hiddden
var button = document.getElementsByClassName('hiddenBtn')[0];
var image = document.getElementsByClassName('hiddenImg')[0];

window.afficher = function(){
image.style.display = (image.style.display == "block") ? "none" : "block";
}

button.onclick = afficher;
