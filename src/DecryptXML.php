<?php

namespace FileConverter;

class DecryptXML implements DecryptInterface
{
    public function decrypt(\SplFileObject $file): array
    {
        $result = [];
        $xml = simplexml_load_file($file->getBasename());
        foreach($xml as $fields)
        {
            $result [] = $fields;
        }
        return $result;
    }
}