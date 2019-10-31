<?php

class Post implements \SplSubject
{
    private $name;    
    private $content;
    private $observers = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function attach(\SplObserver $observer) {
        $this->observers[] = $observer;
    }

    public function detach(\SplObserver $observer) {       
        $key = array_search($observer,$this->observers, true);
        if($key){
            unset($this->observers[$key]);
        }
    }    

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
    
    
    public function newContent($content){
        $this->content = $content;
        $this->notify();
    }

    public function getContent() {
        return "{$this->name}:> {$this->content}";
    }
}