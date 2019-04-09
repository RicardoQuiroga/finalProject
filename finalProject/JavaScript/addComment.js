function AddComment() {

	var newComment = document.createElement("fieldset");
	var commentLeg = document.createElement("legend");
	var par = document.createElement("p");

	var legText = document.getElementById("inputDefault").value;
	var comText = document.getElementById("commentTextarea").value;


	commentLeg.appendChild(document.createTextNode(legText));
	par.appendChild(document.createTextNode(comText));


	newComment.appendChild(commentLeg);
	newComment.appendChild(par);

	var commentField = document.getElementById("comments");
	commentField.appendChild(newComment);
}