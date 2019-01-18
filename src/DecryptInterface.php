<?php

namespace FileConverter;

interface DecryptInterface
{
    public function decrypt(\SplFileObject $file): array;
}