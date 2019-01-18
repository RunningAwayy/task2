<?php

namespace FileConverter;

class EncryptCSV implements EncryptInterface
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
            $array =  (array) $fields;
            fputcsv($handle, $array);
        }
        fclose($handle);
    }
}