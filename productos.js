$(document).ready(function () {
    // buscarDatos("cemento");

    document.getElementById('search').addEventListener('keyup', function (e) {
        let value = e.target.value;

         buscarDatos(value);

    })
})

function buscarDatos(captura){
    let url = "http://localhost/BusquedaDB/backend.php?opcion=buscar";
    $.ajax({
        url: url,
        method: 'POST',
        dataType: 'JSON',
        data: {
            buscaresto: captura
        },
        beforeSend: function(){

        },
        complete: function(){

        },
        success: function(datos){
            // console.log(datos);
            let ul = document.getElementById('filtrado');
            let producto = '';
            for (let i = 0; i < datos.length; i++) {
                producto += `
                <li>${datos[i].Nombre}</li>
                `
            }
            ul.innerHTML = producto;
        },
        error: function(error){
            console.log(error);
        }
    })
}


































































// let productos = [
//     {
//         nombre: 'cemento',
//     },
//     {
//         nombre: 'pintura esmalte',
//     },
//     {
//         nombre: 'pintura latex',
//     },
//     {
//         nombre: 'pegamento',
//     },    
//     {
//         nombre: 'varilla',
//     }, 

//         {
//         nombre: 'interruptores',
//     },
// ]

// let ul = document.getElementById('filtrado');
// document.getElementById('search').addEventListener('keyup', function (e) {
//     let value = e.target.value;
//     let filtrado = productos.filter(function (item) {
//         return item.nombre;
//     })

//     let producto = '';
//     for (let i = 0; i < filtrado.length; i++) {
//        if (filtrado[i].nombre.includes(value)) {
//             producto += `<li>${filtrado[i].nombre}</li>`
//        }
//     }

//     ul.innerHTML = producto;
// })

