# Documentation

Currently Mali only has support for variables:
```php
{{ $var }}
{! $var !}
```
will be converted to
```php
<?php echo(htmlentities( $var )) ?>
<?php echo( $var ) ?>
```

# Known Bugs

Content in Comments or inside of `<?php ?>` will be compiled anyways  
(probably many more...)