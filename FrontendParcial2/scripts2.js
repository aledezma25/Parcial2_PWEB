var poblacion = [];
var nombre = [];
   
   let url = 'http://127.0.0.1:8000/api/paises';
    fetch(url)
    .then( datos_obtenidos => datos_obtenidos.json() )
    // .then( data => mostrarData(data) )
    // .catch( error => console.log(error) )

.then(function transformar (datos_obtenidos) {    
    datos_obtenidos.forEach(function agregar (datos_obtenidos)
    {
        //Si los datos son diferentes de vacío
        if (datos_obtenidos.poblacion != undefined && datos_obtenidos.nombre != undefined)
        {
            poblacion.push(datos_obtenidos.poblacion);
            nombre.push(datos_obtenidos.nombre);
        }
    });

    //variables para las gráficas
    var graf1 =
    {
        y: poblacion,
        x: nombre,
        mode: 'lines',
        type: 'scatter',
        marker: {
            color: 'rgb(255, 0, 0)	',
            // opacity: 1.6,
          }
    };

    var datosGraficas = [graf1];

    //estilos de la grafica
    var layout =
    {
        title: 'Paises y su poblacion',
        xaxis:
        {
            title: 'Nombre Pais',
        },
        yaxis:
        {
            title: 'Poblacion'
        }
    };
    Plotly.newPlot('grafico', datosGraficas, layout);
});