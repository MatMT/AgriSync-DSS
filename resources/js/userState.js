// Estado inicial del usuario
let user = { cuentas: [] };

// Función para actualizar el usuario globalmente
export function setUser(newUser) {
    user = newUser;
}

// Función para obtener el usuario
export function getUser() {
    return user;
}

// Función para actualizar una cuenta específica
export function updateAccountBalance(idAccount, newBalance) {
    const account = user.cuentas.find(acc => acc.id === parseInt(idAccount));
    if (account) {
        account.balance = newBalance;
    }
}

export default user;