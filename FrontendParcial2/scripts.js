
      let url = 'http://127.0.0.1:8000/api/paises';
        fetch(url)
            .then( response => response.json() )
            .then( data => mostrarData(data) )
            .catch( error => console.log(error) )

        const mostrarData = (datos) => {
            console.log(datos)
            let body = ""
            for (var i = 0; i < datos.length; i++) {      
               body+=`<tr>
                <td>${datos[i].nombre}</td>
                <td>${datos[i].capital}</td>
                <td>${datos[i].idioma}</td>
                <td>${datos[i].poblacion}</td></tr>`
            }
            document.getElementById('datos').innerHTML = body
        }