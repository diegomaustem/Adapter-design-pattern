<?php 
class MysqlAdapter implements DbAdapter
{
    private $mysql;

    public function __construct(MysqlCommands $mysql) {
        $this->mysql = $mysql;
    }

    public function insert() {
        $this->mysql->insertMysql();
    }

    public function update(){
        $this->mysql->updateMysql();
    }
    
    public function delete(){
        $this->mysql->deleteMysql();
    }
}