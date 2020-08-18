## Usage

```php
use IdnLanguage\Detector;
 
$idn = new Detector;
 
$result = $idn->language('lietuviškas.lt');`

return $result; // returns 'LIT'
```

## Results

Returns IDN code from [IDN language list](https://www.verisign.com/assets/idn-valid-language-tags.pdf). 