function init(){
	alert();
	// displayModeration();
}


function alert() {
	var buttonElts = document.getElementsByClassName("fa-trash");
	for( var i =0; i < buttonElts.length; i++) {
		buttonElts[i].addEventListener("click", function() {
			if(confirm("Voulez vous supprimer ce billet ?")){
				window.location.href = "index.php";
				console.log("Billet Supprimé");
			}
		});
	}
}

/* function displayModeration() {
	var editDiv = document.getElementsByClassName("editcom");
	var buttonElts = document.getElementsByClassName("buttonDisplay");
	
	for(var i = 0; i < buttonElts.length; i++){
		console.log(editDiv[i]);
		buttonElts[i].addEventListener("click",function() {
			console.log(buttonElts);
		});
	}
}
*/



	

init();
			