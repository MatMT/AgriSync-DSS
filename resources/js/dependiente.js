import { data } from 'autoprefixer';
import axios from 'axios';

let baseURL = window.Laravel.apiUserURL;
let accountURL = window.Laravel.apiAccountURL;

let formBuscarUser = document.getElementById('formBuscarUser');
let resultTable = document.getElementById('resultado');
let resultAccount = document.querySelector('#resultadoCuentas');
let tableBody = document.getElementById('tableBody');

let user = {};

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
    user = {};
    let url = baseURL + "/" + DUI;
    limpiarResultados(tableBody);

    axios.get(url)
        .then((result) => {
            user = result.data.data;

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
            <td class="border px-4 py-2">${data.status}</td>
            <td class="border px-4 py-2 text-center">
            <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Button</button>
            </td>
        </tr>
    `;

    tableBody.innerHTML = row;
}

tableBody.addEventListener('click', (e) => {
    if (e.target.tagName === 'BUTTON') {
        verCuentas();
    }
})


// <a class="text-center" href="${accountURL}/${data.id}">
// <a class="text-center" href="${accountURL}/${data.id}">
// <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded text-center">Button</button>
// </a>

function limpiarResultados(elemento) {
    while (elemento.firstChild) {
        elemento.removeChild(elemento.firstChild);
    }
}


function verCuentas() {
    limpiarResultados(resultAccount);
    let { cuentas } = user;

    // SCRIPTING
    let accounts = document.createElement('DIV');
    let hr = document.createElement('HR');
    let title = document.createElement('H2');

    hr.classList.add('my-10');
    title.textContent = 'Cuentas del usuario';
    title.classList.add('text-2xl', 'font-bold');

    accounts.classList.add('flex', 'flex-wrap', 'w-full', 'gap-10');


    cuentas.forEach((cuenta, index) => {
        let cardAccount = document.createElement('DIV');

        cardAccount.innerHTML = `
                <a href="${accountURL}/${cuenta.id}"
                    class="flex items-center gap-10 bg-white shadow-xl rounded-lg p-6">
                    <div
                        class="hidden sm:flex relative box-content items-center justify-center overflow-hidden rounded-full size-12 stroke-white border-white bg-sky-500 text-white border-[2.5px]">
                        <h3 class="text-4xl">${index + 1}</h3>
                    </div>
    
                    <div class="flex flex-col">
                        <h3>$${cuenta.balance}</h3>
                        <p>Abierta: ${cuenta.open_date}</p>
                    </div>
                </a>
            `;

        accounts.appendChild(cardAccount);
    });

    resultAccount.appendChild(hr);
    resultAccount.appendChild(title);
    resultAccount.appendChild(accounts);
}

function validarDUI(DUI) {
    let regex = /^\d{8}-\d{1}$/;
    return regex.test(DUI);
}