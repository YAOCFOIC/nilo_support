function fileValidation(){
	var fileInput = document.getElementById("file");
	var filePath = fileInput.value;
	var allowedExtension = /(\.jpg|\.jpeg|\.png|\.svg)$/i;
	if (!allowedExtension.exec(filePath)) {
			alert("Por favor inserte un formato de imagen valido .jpeg,.png,.jpg,.svg");
			fileInput.value='';
			return false;
		}else{
			alert("Imagen Correcta");
			console.log(getFileExtension3(fileInput);
		}
}


CKEDITOR.replace('solution');