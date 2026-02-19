<?php
namespace Focal\Facades;

use Focal\Core\DBController;
use PatrykNamyslak\Patbase\Enums\DatabaseDriver;
use PatrykNamyslak\Patbase\Facades\DB as PatbaseDBFacade;

class DB extends PatbaseDBFacade{

    /**
     * Create a new instance of the Database connection interface (Patbase).
     * @param string $host
     * @param mixed $username
     * @param mixed $password
     * @param string $database
     * @param DatabaseDriver $driverType
     * @param int|string|null $port
     * @param int $fetchMode
     * @param bool $autoConnect
     * @param mixed $options
     * @return DBController
     */
    public function instantiseController(
        string $host, 
        ?string $username, 
        ?string $password, 
        string $database, 
        DatabaseDriver $driverType = DatabaseDriver::MYSQL, 
        int|string|null $port = NULL,
        int $fetchMode = \PDO::FETCH_ASSOC, 
        bool $autoConnect = true, 
        ?array $options = NULL, 
    ): DBController{
        return new DBController(
            $host, 
            $username, 
            $password, 
            $database, 
            $driverType, 
            $port, 
            $fetchMode, 
            $autoConnect, 
            $options
            );
    }
}