import { useState } from 'react';

export default function App() {
  const [loggedIn, setLoggedIn] = useState(false);
  return (
    <div className="p-4">
      {loggedIn ? (
        <div>
          <h1>Bienvenido al sistema</h1>
          <nav>
            <ul className="flex gap-4">
              <li>Usuarios</li>
              <li>Roles</li>
              <li>Tipos de Documento</li>
            </ul>
          </nav>
        </div>
      ) : (
        <div>
          <h1>Iniciar sesión</h1>
          <input placeholder="Usuario" className="border" /><br />
          <input type="password" placeholder="Contraseña" className="border" /><br />
          <button onClick={() => setLoggedIn(true)}>Ingresar</button>
        </div>
      )}
    </div>
  );
}
