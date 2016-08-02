<?php
namespace MCS;

class DutchAddress
{
    const REGEX = "/^(\d*[\wäöüß\d '\-\.]+)[,\s]+(\d+)\s*([\wäöüß\d\-\/]*)$/i";
    
    public $street;
    public $housenumber;
    public $extension;
    
    public function __construct($address)
    {
        return $this->split(trim($address));
    }
    
    private function split($address)
    {
        preg_match(self::REGEX, $address, $parted);
        
        if (count($parted) != 4) {
            return false;    
        }
        
        $parted = [
            'street' => trim($parted[1]),
            'housenumber' => trim($parted[2]),
            'extension' => trim($parted[3]),
        ];
        
        foreach($parted as $key => $value) {
            if (strlen($value) > 0) {
                $this->{$key} = $value;    
            }
        }
    }
    
}