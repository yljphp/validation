<?php


namespace Yljphp\Validation;

interface TranslatorInterface
{
    /**
     * translator.
     *
     * @param $key message key.
     *
     * @return string
     */
    public function trans($key);
}
