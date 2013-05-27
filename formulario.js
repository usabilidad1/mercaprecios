function validarForm(formulario) {
  if(formulario.nombre.value.length==0) { //comprueba que no est� vac�o
    formulario.nombre.focus();   
    alert('No has escrito tu nombre'); 
    return false; //devolvemos el foco
  }
  if(formulario.email1.value.length==0) { //comprueba que no est� vac�o
    formulario.email1.focus();
    alert('No has escrito tu e-Mail');
    return false;
  }
  if(formulario.email1.value!=formulario.email2.value) {
    formulario.email1.focus();            //comprueba que sean iguales
	alert('Los e-Mails no coinciden');
    return false;
  }
  if(formulario.consulta.value.length==0) {  //comprueba que no est� vac�o
    formulario.consulta.focus();
    alert('No has escrito ninguna consulta');
    return false;
  }
    if(formulario.nombre.value.length>10) { //comprueba que no est� vac�o
    formulario.nombre.focus();   
    alert('Has superado el limite de car�cteres del nombre'); 
    return false; //devolvemos el foco
  }
  if(formulario.email1.value.length>20) { //comprueba que no est� vac�o
    formulario.email1.focus();
     alert('Has superado el limite de car�cteres del email'); 
    return false;
  }
  if(formulario.consulta.value.length>200) {  //comprueba que no est� vac�o
    formulario.consulta.focus();
     alert('Has superado el limite de car�cteres de tu pregunta'); 
    return false;
  }
  return true;
}
  