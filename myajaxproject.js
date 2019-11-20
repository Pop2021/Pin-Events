function gotoServer(){
	//stop the default behaviour of element
	event.preventDefault();

	//grab user search term
	var myterm = document.getElementById('shterm').value;

	//start ajax code
	var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("showhere").innerHTML = this.responseText;
	    }
	  };
	  xhttp.open("POST", "ProjProcsearch.php?, true);
	  xhttp.send();
}

//$(function() {
//    $("#sterm").autocomplete({
//        source: "projprocsearch.php",
//    });
//});
//
////jQuery Ajax POST request
//$(document).ready(function(){
//    $("#shterm").keyup(function(){
//        
//        //grab the search field
//        var myterm = $('#shterm').val();
//        
//        $.post("ProjProcsearch.php", {sterm: myterm}, function(data, status){
//            
//            $('#showhere').html(data);
//        });
//    });
//});
//
//
//function showHint(str) {
//    if (str.length == 0) {
//        document.getElementById("txtHint").innerHTML = "";
//        return;
//    } else {
//        var xmlhttp = new XMLHttpRequest();
//        xmlhttp.onreadystatechange = function() {
//            if (this.readyState == 4 && this.status == 200) {
//                document.getElementById("txtHint").innerHTML = this.responseText;
//            }
//        };
//        xmlhttp.open("GET", "ProjProcsearch.php?q=" + str, true);
//        xmlhttp.send();
//    }
//}
