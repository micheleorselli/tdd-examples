<?php

class Logger
{
    private const LOG_FILE = '~/logs/log.txt';

    public function log(string $message): void
    {
        if ($message === "") {
            return;
        }

        file_put_contents(self::LOG_FILE, $message . "\n", FILE_APPEND);
    }
}