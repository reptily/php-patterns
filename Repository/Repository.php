<?php

class Repository
{
    
    private $id;
    private $name;
    
    public function __construct(int $id, ActiveRecords $DB){
        $result = $DB->where(['id' => 1])->select();
        $this->name = $result[0]['name'];
        $this->id = $result[0]['id'];
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function setId(int $id){
        $this->id = $id;
    }
    
    public function setName(string $name){
        $this->name = $name;
    }
    
    public function save(){
        $DB->where(['id' => 1])->update(['id' => $id, 'name' => $name]);
    }
    
    public function remove(){
        $DB->where(['id' => 1])->delete();
    }
}