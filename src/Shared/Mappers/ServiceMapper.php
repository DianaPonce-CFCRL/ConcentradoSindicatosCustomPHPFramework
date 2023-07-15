<?php

namespace Mappers;

use Shared\DTO\UsuarioDTO;
require_once "./src/Shared/DTO/UsuarioDTO.php";
class ServiceMapper
{
    public static function mapArrayToObjectDTO(array $data, string $classNameDTO) {
        global $objetcDTO;
        $classDTO = "Shared\DTO" . "\\" . ucfirst($classNameDTO);

        if (class_exists($classDTO)) {
            $objetcDTO = new $classDTO();
            $keys = array_keys($data);

            foreach ($keys as $key) {
                $objetcDTO->$key = $data[$key];
            }

            return $objetcDTO;
        }

        return $objetcDTO;
    }
}