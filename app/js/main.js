'use stict';

const arrendatario = document.getElementById('newLessee');
const tabla = document.getElementById('dataLessee');
const toPDF = document.getElementById('toPDF');

arrendatario.addEventListener('submit', (e) => {
    let data = new FormData(arrendatario);
    let nombre = data.get('nombre');
    let apellido = data.get('apellido');
    let rut = data.get('rut');
    let arriendo = data.get('arriendo');
    let monto = data.get('monto');
    let direccion = data.get('direccion');

    fetch('./app/controllers/createNewLessee.php', {
        method: 'POST',
        body: data
    })
    .then(res => res.text())
    .then(text => {
        let lessee = JSON.parse(text);
        console.log(lessee);
    })
    .catch( err => {
        console.log(err);
    })
})

window.onload = getAlldata();

function getAlldata(){
    fetch('./app/controllers/getAllLessee.php', {
        method: 'GET',
    })
    .then(res => res.text())
    .then(text => {
        let lesseeData = JSON.parse(text);
        
        lesseeData.forEach(lessee => {
            tabla.innerHTML += `
            <tr>
                <th>`+ lessee['id'] +`</th>
                <th>`+ lessee['nombre'] +`</th>
                <th>`+ lessee['arriendo'] +`</th>
                <th>`+ lessee['monto'] +`</th>
            </tr>
        `
        });
    })
}