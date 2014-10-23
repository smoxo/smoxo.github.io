// JavaScript Document

function check(){
	nom=document.formulaire.chnom.value;
	email=document.formulaire.chmail.value;
	message=document.formulaire.chmessage.value;
	nbr=message.length;
	//-------test sur le champs nom avec les expressions regulieres
	
	var nom_regex=new RegExp("^[a-zA-Z._-]{2,}$","gi");
	if(nom.search( nom_regex)==-1){
	
		document.getElementById("form_name").style.backgroundColor = "#FF0000";
		document.getElementById("div_test").innerHTML="* Veuillez saisir votre Nom ";
		return false;
	}
	
	
	var mail_regex=new RegExp("^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+[.][a-z]{1,7}$","gi");
	if(email.search(mail_regex)==-1){
		document.formulaire.chmail.style.backgroundColor = "#FF0000";
		document.getElementById("div_test").innerHTML="* e-mail invalide !"
		return false;
	}

	var message_regex=new RegExp("^[a-zA-Z._-]{2,}$","gi");
	if(nbr<3){
	
		document.formulaire.chmessage.style.backgroundColor = "#FF0000";
		document.getElementById("div_test").innerHTML="* Veuillez saisir votre message.";
		return false;
	}
	return true;
}
