<?php

declare(strict_types=1);

namespace FileConverter;

class Converter
{
    public function __construct(/* ??? */)
    {
    }

    public function convert(\SplFileObject $file, string $outputFormat, string $outputFilePath)
    {
        $decode = [];
        $extension = $file->getExtension();

        if($extension === "csv"){
            $obj = new DecryptCSV();
            $decode = $obj->decrypt($file);
        } elseif ($extension === "json"){
            $obj = new DecryptJSON();
            $decode = $obj->decrypt($file);
        } elseif ($extension === "xml"){
            $obj = new DecryptXML();
            $decode = $obj->decrypt($file);
        }

        if($outputFormat === "csv"){
            $obj = new EncryptCSV($outputFilePath);
            $obj->encrypt($decode);
        } elseif ($outputFormat === "json"){
            $obj = new EncryptJSON($outputFilePath);
            $obj->encrypt($decode);
        } elseif ($outputFormat === "xml"){
            $obj = new EncryptXML($outputFilePath);
            $obj->encrypt($decode);
        }
    }
}
