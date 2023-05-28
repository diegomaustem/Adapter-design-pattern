<?php 

class OracleCommands implements DbAdapter
{
    public function insert() {
        echo 'Insert from Oracle';
    }

    public function update(){
        echo 'Update from Oracle';
    }
    
    public function delete(){
        echo 'Delete from Oracle';
    }
}