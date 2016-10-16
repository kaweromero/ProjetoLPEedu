// Get the modal
var modal1 = document.getElementById('myModal2');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img1 = document.getElementById('myImg2');
var modalImg1 = document.getElementById("img02");
var captionText1 = document.getElementById("caption2");
img1.onclick = function(){
    modal1.style.display = "block";
    modalImg1.src = this.src;
    captionText1.innerHTML = this.alt;
}


// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close2")[0];

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
  modal1.style.display = "none";
}