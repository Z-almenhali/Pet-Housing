
//--------------------------------animal sounds---------------------------------------
function playAnimalAudio(id) {
  if (id == 'cat') {
    var cat = document.getElementById("catAudio");
    cat.play();
  } else if (id == 'dog') {
    var dog = document.getElementById("dogAudio");
    dog.play();
  } else if (id == 'bird') {
    var bird = document.getElementById("birdAudio");
    bird.play();
  }

}

function pauseBirdAudio() {
  var bird = document.getElementById("birdAudio");
  bird.pause();
}

//------------------------play selection sounds------------------------------
function playselectAudio() {
  var s = document.getElementById("selection");
  s.play();
}

//--------------------------------animal images---------------------------------------
var a = document.createElement("img");
function display_image(src, alt) {
  a.setAttribute("src", src);
  a.setAttribute("width", "450");
  a.setAttribute("alt", alt);
  a.style.position = "absolute";
  a.style.left = "900px";
  a.style.top = "850px";
  document.body.appendChild(a);
  a.st
}

//--------------------------------text fields---------------------------------------
function bluringFields() {

  document.getElementById("name").style.color = "brown";
  document.getElementById("lastName").style.color = "brown";
  document.getElementById("email").style.color = "brown";
  document.getElementById("phone").style.color = "brown";
  document.getElementById("textarea").style.color = "brown";


  document.getElementById("name").style.backgroundColor = "";
  document.getElementById("lastName").style.backgroundColor = "";
  document.getElementById("email").style.backgroundColor = "";
  document.getElementById("phone").style.backgroundColor = "";
  document.getElementById("textarea").style.backgroundColor = "";


  document.getElementById("fnameHint").innerHTML = "";
  document.getElementById("lnameHint").innerHTML = "";
  document.getElementById("emailHint").innerHTML = "";
  document.getElementById("phoneHint").innerHTML = "";
  document.getElementById("textareaHint").innerHTML = "";


}

function Hint(id) {
  if (id == 'name') {

    var x = document.getElementById("fnameHint");
    x.style.color = "#f56c04";
    x.innerHTML = "Your first name must contain at least 2 letters"
    document.getElementById("name").style.backgroundColor = "#fce1e4";
    document.getElementById("name").style.color = "black";


} else if (id == 'lastName') {

    var x = document.getElementById("lnameHint");
    x.style.color = "#f56c04";
    x.innerHTML = "Your last name must contain at least 2 letters"
    document.getElementById("lastName").style.backgroundColor = "#fce1e4";
    document.getElementById("lastName").style.color = "black";
    

} else if (id == 'email') {

    var x = document.getElementById("emailHint");
    x.style.color = "#f56c04";
    x.innerHTML = "YourEmail@gmail.com"
    document.getElementById("email").style.backgroundColor = "#fce1e4";
    document.getElementById("email").style.color = "black";

} else if (id == 'phone') {

    var x = document.getElementById("phoneHint");
    x.style.color = "#f56c04";
    x.innerHTML = "+996 5********"
    document.getElementById("phone").style.backgroundColor = "#fce1e4";
    document.getElementById("phone").style.color = "black";

} else if (id == 'textarea') {

    var x = document.getElementById("textareaHint");
    x.style.color = "#f56c04";
    x.innerHTML = "It should be at must 50 words"
    document.getElementById("textarea").style.backgroundColor = "#fce1e4";
    document.getElementById("textarea").style.color = "black";

}
}

//--------------------------------buttons---------------------------------------
//
// function submitFun() {
//   if (confirm("Are you sure you want to submit this form?"))
//     alert("Thank you\nThe form was submitted successfully");
//   else if (confirm("Are you sure you want to cancel your submission?"))
//     alert("The submission is canceled");
// }

function cancelFun() {
  if (confirm("Are you sure you want to cancel this form?"))
    alert("The submission is canceled");
}



