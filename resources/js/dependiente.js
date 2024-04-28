import { data } from 'autoprefixer';
import axios from 'axios';

let baseURL = window.Laravel.apiUserURL;

let formBuscarUser = document.getElementById('formBuscarUser');
let resultTable = document.getElementById('resultado');
let tableBody = document.getElementById('tableBody');

formBuscarUser.addEventListener('submit', (e) => {
    e.preventDefault();
    alert('Buscando usuario...');

    let DUI = document.getElementById('userDUI').value;

    if (!validarDUI(DUI)) {
        alert('DUI no válido');
        return;
    }

    buscarUsuario(DUI);
});

function buscarUsuario(DUI) {
    let url = baseURL + "/" + DUI;
    limpiarResultados();

    axios.get(url)
        .then((result) => {
            console.log(result.data.data);
            mostrarUsuario(result.data.data);
            resultTable.classList.remove('hidden');
        }).catch((err) => {
            tableBody.innerHTML = `
            <tr>
                <td class="border px-4 py-2" colspan="6">No se encontraron resultados</td>
            </tr>
            `

            console.error('Error fetching data: ', err);
            alert('Error al buscar el usuario.');
        });
}

function mostrarUsuario(data) {
    let row = `
        <tr>
            <td class="border px-4 py-2">${data.id}</td>
            <td class="border px-4 py-2">${data.names}</td>
            <td class="border px-4 py-2">${data.last_names}</td>
            <td class="border px-4 py-2">${data.role}</td>
            <td class="border px-4 py-2">${data.email}</td>
            <td class="border px-4 py-2">${data.status_id}</td>
        </tr>
    `;
    tableBody.innerHTML = row;
}

function limpiarResultados() {
    while (tableBody.firstChild) {
        tableBody.removeChild(tableBody.firstChild);
    }
}


function validarDUI(DUI) {
    let regex = /^\d{8}-\d{1}$/;
    return regex.test(DUI);
}