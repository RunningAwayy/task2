<?php

namespace FileConverter;

class EncryptXML implements EncryptInterface
{
    public $outputFilePath;

    public function __construct(string $outputFilePath)
    {
        $this -> outputFilePath = $outputFilePath;
    }

    public function encrypt(array $content): void
    {
        $handle = fopen($this->outputFilePath, "w");
        foreach ($content as $fields){
            fwrite($handle,"<xmltag>".$fields[0]."</xmltag>");
        }
        fclose($handle);
    }
}