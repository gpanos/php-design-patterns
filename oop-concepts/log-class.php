<?php 
//File loger example

class Log 
{
//private property best practice syntax 
    private $_FileName;
    private $_Data;
    
/**
* @desc Writes to a file
* @param str $fileName The name of the file
* @param str $data Data to be appended to the file
*/
    public function Write($fileName, $data) 
    {
        $this->_FileName = $fileName;
        $this->_Data = $data;
        
        $handle = fopen($fileName, 'a+');
        
        $this->_CheckPermission();
        $this->_CheckData();
        
        fwrite($handle, $data . "\r\n");
        fclose($handle);
    }

/**
* @desc Reading a file
* @param str $fileName The name of the file
@ @return str The text file
*/    
    public function Read($fileName) 
    {
        $this->_FileName = $fileName;
        $this->_CheckExists();
        
        $handle = fopen($fileName, 'r');
        
        return file_get_contents($fileName);
    }
    
    private function _CheckExists()
    {
        if ( ! file_exists($this->_FileName) ) {
            die('The file does not exist');
        }
    }
    
    private function _CheckPermission()
    {
        if ( ! is_writable($this->_FileName) ) {
            die('change your chmod permissions to ' . $this->_FileName);
        }
    }
    
    private function _CheckData()
    {
        if (strlen($this->_Data) < 1) {
            die('You must have more than characters for data');
            
        }
    }
}