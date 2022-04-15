

let xhr;

const form1 = document.getElementById("form1");
const cargar =  (e)=>{
	e.preventDefault();

	if (window.XMLHttpRequest) xhr = new XMLHttpRequest();
    else xhr = new ActiveXObject("Microsoft.XMLHTTP");

    xhr.open("GET", "src/backEnd/php/main.php");

     xhr.addEventListener('load', (data) => {
     	const cargador = document.getElementById("cargador");

        let txt = data.target.responseText ;

        cargador.innerHTML = txt;

    });
    /** 4. Cerramos consulta con el servidor */

    xhr.send();

		}
form1.addEventListener( "submit", cargar);


/**
 * car
 * 
 * */
