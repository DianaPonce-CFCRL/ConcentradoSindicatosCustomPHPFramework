<?php

namespace Controllers\Usuarios;

use Models\Usuarios\UsuariosModel;
require_once "./src/Models/Usuarios/UsuariosModel.php";

class ListarController
{
    static public function execute() {
        return UsuariosModel::getUsuarios();
    }
}