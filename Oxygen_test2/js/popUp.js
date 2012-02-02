function loadPopup(){  
    document.getElementById("bodycolor").style.display = "block";
    $("#popupContent").fadeIn("slow");
}

function disablePopup(){
    $("#popupContent").fadeOut("slow");
    document.getElementById("bodycolor").style.display = "none";
}