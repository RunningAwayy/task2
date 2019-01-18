<?php

namespace FileConverter;

class DecryptJSON implements DecryptInterface
{
    public function decrypt(\SplFileObject $file): array
    {
        return json_decode($file->current(), true);
    }
}