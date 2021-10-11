<?php class Template{
    // Path To Template
    protected $template;
    // protected means we  could extend this class and still use this property
    
    //Vars Passed In
    protected $vars = array();
     
    //Constructor
    /*A constructor allows you to initialize an object's properties upon creation of the object.
    If you create a __construct() function, PHP will automatically call this function when you create an object from a class.*/
    public function __construct($template){
        $this->template = $template;
    }
    
    public function __get($key){
        return $this->vars[$key];
    }
    
    public function __set($key, $value){
        $this->vars[$key] = $value;
    }
    
    public function __toString(){
        extract($this->vars);
        chdir(dirname($this->template));
        ob_start();
        
        include basename ($this->template);
        
        return ob_get_clean();
    }
    /*if we set  $template->name; extract will allow us to use $name instead*/
    
}