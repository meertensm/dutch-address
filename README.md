# Dutch address
[![Latest Stable Version](https://poser.pugx.org/mcs/dutch-address/v/stable)](https://packagist.org/packages/mcs/dutch-address) [![Latest Unstable Version](https://poser.pugx.org/mcs/dutch-address/v/unstable)](https://packagist.org/packages/mcs/dutch-address) [![License](https://poser.pugx.org/mcs/dutch-address/license)](https://packagist.org/packages/mcs/dutch-address)

Split a Dutch or German street-address into a street, housenumber and extension

Installation:
```bash
$ composer require mcs/dutch-address
```

```php
require_once 'vendor/autoload.php';

try{

    $address = new MCS\DutchAddress('Jan Steenstraat 75');
    
    print_r($address);
        
} catch (Exception $e) {
    print_r($e->getMessage());    
}
```
