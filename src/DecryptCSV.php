<?php

namespace FileConverter;

class DecryptCSV implements DecryptInterface
{
    public function decrypt(\SplFileObject $file): array
    {
        $result = [];
        $file->setFlags(\SplFileObject::READ_CSV);
        foreach ($file as $fields) {
            $result [] = $fields;
        }
        return $result;
    }
}