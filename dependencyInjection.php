Learn more or give us feedback
<?php

namespace App;
use App\Format\FormatInterface;
class Serializer {
    private $format;
    public function __construct(FormatInterface $format) {
        $this->format = $format;    
    }
    public function serialize($data): string {
        $this->format->setData($data);
        return $this->format->convert();
    }
}


declare(strict_types=1);
require __DIR__.'/../vendor/autoload.php';
use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;
use App\Format\FromStringInterface;
use App\Format\BaseFormat;
use App\Format\NamedFormatInterface;
use App\Serializer;
print_r("Dependency Injection\n\n");
$data = [
    "name" => "John",
    "surname" => "Doe"
];
$serializer = new Serializer(new XML());
var_dump($serializer->serialize($data));