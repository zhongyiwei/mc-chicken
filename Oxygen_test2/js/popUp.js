/* 
    Document   : popUp.js
    Created on : Apr 12, 2012, 1:29:24 PM
    Author     : ZHONG YIWEI
    Description:
        Js for Portoflio page for pop up
*/
function loadPopup(){  
    document.getElementById("bodycolor").style.display = "block";
    $("#popupContent").fadeIn("slow");
}

function disablePopup(){
    $("#popupContent").fadeOut("slow");
    document.getElementById("bodycolor").style.display = "none";
}