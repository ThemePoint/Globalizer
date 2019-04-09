# Globalizer
This Library is used to globalize Class instances.

# Usage

To initialize, get, reset and delete the globalizer there are several functions inclued.
```php
\Shopbase\Globalizer\Globalizer::init(); // initialize the globalizer and add a gobal instance
\Shopbase\Globalizer\Globalizer::get(); // get the global instance
\Shopbase\Globalizer\Globalizer::reset(); // reset the global instance
\Shopbase\Globalizer\Globalizer::delete(); // delete the global instance
```

To handle the instances of classes which are saved in globalizer there are the following functions inclued
```php
setClass(string $class) // Set new global instance of an class
getClass(string $class) // get global instance of an class
removeClass(string $class) // remove global instance of an class
syncWithGlobal() // sync global instances
```

# Examples
```php
class Foo
{
    protected $bar = 'FooBar';
    
    public function getBar() : string
    {
        return $this->bar;
    }
}

\Shopbase\Globalizer\Globalizer::init()->setClass('Foo');

echo \Shopbase\Globalizer\Globalizer::get()->getClass('Foo');

// Result will be: 'FooBar';
```

[![Donate](https://img.shields.io/badge/Donate-PayPal-blue.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=Q98R2QXXMTUF6&source=url)
