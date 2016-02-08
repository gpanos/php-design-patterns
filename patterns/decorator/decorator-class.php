<?php 
/*
* The decarator pattern falls under the category of structural patterns.
* We use this pattern when we simply want to add some extra responsibility to our base class
* Is a great alternative to sub-classing feature for extending functionality with some added advantages
*The decorator pattern (also known as Wrapper, an alternative naming shared with the Adapter pattern) 
* is a design pattern that allows behavior to be added to an individual object, either statically or dynamically,
* without affecting the behavior of other objects from the same class.
*/

interface EmailBody
{
    public function loadBody();
}
//Base email body class
class BaseEmail implements EmailBody
{
    public function loadBody()
    {
        echo 'This is the main email body yo!<br>';
    }
}
//Main decorator
abstract class MainEmailDecorator implements EmailBody
{
    protected $_emailBody;
    
    public function __construct(EmailBody $emailBody)
    {
        $this->_emailBody = $emailBody;
    }
    
    abstract public function loadBody();
}
//Sub decorator 
class ChristmassEmailBody extends MainEmailDecorator
{
    public function loadBody()
    {
        echo 'This is extra content for Cristmass.<br>';
        $this->_emailBody->loadBody();
        
    }
}
//Sub decorator 
class NewYearEmailBody extends MainEmailDecorator
{
    public function loadBody()
    {
        echo 'This is extra content for New year.<br>';
        $this->_emailBody->loadBody();
        
    }
}

/*
* Some examples how to use them
*/


/*
* Normal email
*/

$email = new BaseEmail();
$email->loadBody();

/*
* Cristmass email
*/

$email = new ChristmassEmailBody(new BaseEmail);
$email->loadBody();


/*
* New Years email
*/

$email = new NewYearEmailBody(new BaseEmail);
$email->loadBody();
