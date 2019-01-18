<?php

namespace FileConverter;

interface EncryptInterface
{
    public function encrypt(array $content): void;
}