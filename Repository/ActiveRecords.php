<?php
//This is emulator Active Records

class ActiveRecords
{
    
    private $table;
    private $join;
    
    protected $data = [];
    
    public function __construct($table){
        $this->table = $table;
    }
    
    public function join($join){
        $this->data[] = ["id" => 6, "name" => "join"];
        $this->join = $join;
        return $this;
    }
    
    public function where($val){
        return $this;
    }
    
    public function select(){
        $this->data[] = ["id" => 1, "name" => "select"];
        
        return $this->data;
    }
    
    public function update($val){
        $this->data = $val;
    }
    
    public function delete(){
        
    }
}