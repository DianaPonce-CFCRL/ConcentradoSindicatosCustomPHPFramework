<?php

namespace Shared\DTO;
require_once "./src/Shared/DTO/UsuarioDTO.php";

class UsuarioDTO
{
    public string $nombre;
    public string $apellido_paterno;
    public string $apellido_materno;
    public string $email;
    public string $telefono;

    /**
     * @param string $nombre
     * @param string $apellido_paterno
     * @param string $apellido_materno
     * @param string $email
     * @param string $telefono
     */
    public function __construct(string $nombre = "", string $apellido_paterno = "", string $apellido_materno = "", string $email = "", string $telefono = "")
    {
        $this->nombre = $nombre;
        $this->apellido_paterno = $apellido_paterno;
        $this->apellido_materno = $apellido_materno;
        $this->email = $email;
        $this->telefono = $telefono;
    }

    /**
     * @return string
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     */
    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return string
     */
    public function getApellidoPaterno(): string
    {
        return $this->apellido_paterno;
    }

    /**
     * @param string $apellidoPaterno
     */
    public function setApellidoPaterno(string $apellido_paterno): void
    {
        $this->apellido_paterno = $apellido_paterno;
    }

    /**
     * @return string
     */
    public function getApellidoMaterno(): string
    {
        return $this->apellido_materno;
    }

    /**
     * @param string $apellidoMaterno
     */
    public function setApellidoMaterno(string $apellido_materno): void
    {
        $this->apellido_materno = $apellido_materno;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getTelefono(): string
    {
        return $this->telefono;
    }

    /**
     * @param string $telefono
     */
    public function setTelefono(string $telefono): void
    {
        $this->telefono = $telefono;
    }
}