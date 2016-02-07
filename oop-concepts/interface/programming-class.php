<?php 


class Programming implements DotSyntax
{
    public function __construct()
    {
        echo 'Programming was created';
        $this->UsesDotSyntax();
    }
    
    public function UsesDotSyntax()
    {
        echo 'It depends from the Language';
    }
}