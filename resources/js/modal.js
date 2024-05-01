import { getUser, updateAccountBalance } from './userState.js';
import axios from 'axios';

let transacURL = window.Laravel.apiTransacURL;

let modal = document.getElementById('modal');
let span = document.getElementsByClassName('close')[0];
let resultAccount = document.querySelector('#resultadoCuentas');
let form = document.querySelector('#transactionForm');

resultAccount.addEventListener('click', function (event) {
    let eTarget = event.target;

    if (eTarget.classList.contains('openModal')) {
        modal.style.display = 'block'; // Mostrar Modal

        // Obteniendo los datos del botón que fue presionado
        let oldMount = eTarget.getAttribute('data-accMount');
        let owner = eTarget.getAttribute('data-accOwner');
        let idAccount = eTarget.getAttribute('data-accId');

        // DOM para mostrar información

        let spanOwner = document.querySelector('#ownerAccount');
        let spanAccount = document.querySelector('#mountAccount');
        let spanID = document.querySelector('#idAccount');
        spanOwner.textContent = " " + owner;
        spanAccount.textContent = " $" + oldMount;
        spanID.textContent = " " + idAccount;

        form.reset();
    }
});

// Evento de submit para el formulario
form.addEventListener('submit', (e) => {
    e.preventDefault();

    // Capturar valores del formulario en el momento del submit
    let typeTransa = document.querySelector('#tipoTransaccion').value;
    let mount = document.querySelector('#mount').value;
    let idAccount = document.querySelector('#idAccount').textContent;
    let oldMount = document.querySelector('#mountAccount').textContent;

    realizarTransaccion(oldMount, idAccount, typeTransa, mount);
});

span.onclick = function () {
    cerrarModal()
}

window.onclick = function (event) {
    if (event.target == modal) {
        cerrarModal()
    }
}

// Función para realizar la transacción
function realizarTransaccion(oldMount, idAccount, typeTransa, mount) {
    oldMount = parseInt(oldMount.replace('$', ''));
    idAccount = idAccount.trim();

    if (typeTransa == 'expense') {

        if (oldMount - mount < 0) {
            alert('No se puede realizar la transacción, fondos insuficientes');
            return;
        }

        axios.post(transacURL, {
            idAccount: +idAccount,
            type: typeTransa,
            amount: +mount
        }).then((response) => {
            alert('Transacción realizada con éxito');
            actualizarSaldoDOM(idAccount, response.data.newBalance);
        }).catch((err) => {
            console.error('Error al realizar la transacción: ', err);
        });


    } else if (typeTransa == 'income') {
        axios.post(transacURL, {
            idAccount: +idAccount,
            type: typeTransa,
            amount: +mount
        }).then((response) => {
            alert('Transacción realizada con éxito');
            actualizarSaldoDOM(idAccount, response.data.newBalance);
        }).catch((err) => {
            console.error('Error al realizar la transacción: ', err);
        });
    }

    cerrarModal();
}


function cerrarModal() {
    modal.style.display = "none";
    form.reset();
}

function actualizarSaldoDOM(idAccount, nuevoSaldo) {
    let saldoElement = document.querySelector(`[data-balanceaccid="${idAccount}"]`);

    if (saldoElement) {
        saldoElement.textContent = "$" + nuevoSaldo.toFixed(2);
        updateAccountBalance(parseInt(idAccount), nuevoSaldo.toFixed(2));
    }
}