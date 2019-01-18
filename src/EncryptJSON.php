<?php

namespace FileConverter;

class EncryptJSON implements EncryptInterface
{
    public $outputFilePath;

    public function __construct(string $outputFilePath)
    {
        $this -> outputFilePath = $outputFilePath;
    }

    public function encrypt(array $content): void
    {
        file_put_contents($this->outputFilePath, json_encode($content));
    }
}