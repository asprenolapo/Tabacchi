// BUTTON TO TOP CIGAR PAGE
//GET BUTTON
let mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.documentElement.scrollTop = 0;
}

//ADMIN PAGE 
//NOTIFICA SUCCESSO
let msg = document.querySelector('#sessionMSG');

    setTimeout(() => {
        msg.classList.add('notification');
    }, 3000);