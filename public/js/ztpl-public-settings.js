// Set cookie on Accept btn click and remove cookie bar	
function ZTPL_setCookie(cname, cvalue, exdays) {

    var date = new Date();
    date.setTime(date.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + date.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";    
    document.getElementById("cookie_consent_bar").outerHTML="";
}


// Remove cookie bar on click of Reject btn
function ZTPL_rejectCookie() {

    document.getElementById("cookie_consent_bar").outerHTML="";

}