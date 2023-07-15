<?php

namespace Models\Usuarios;

use Database\ConnectDB;
use Mappers\ServiceMapper;

require_once "./src/Database/ConnectDB.php";
require_once "./src/Shared/DTO/UsuarioDTO.php";
require_once "./src/Shared/Mappers/ServiceMapper.php";
class UsuariosModel
{
    /**
     * @return array de objetos del tipo de DTO que se haya compartido
     */
    static public function getUsuarios(): array {
        $query = "SELECT * FROM usuarios";
        $rows = ConnectDB::select($query);
        $usuarios = [];

        foreach ($rows as $row) {
            $usuarioDTO = ServiceMapper::mapArrayToObjectDTO($row, "UsuarioDTO");
            $usuarios[] = $usuarioDTO;
        }

        return $usuarios;
    }
}