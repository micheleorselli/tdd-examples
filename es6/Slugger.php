<?php

class Slugger
{
    public function slugify(string $text): string
    {
        return str_replace(' ', '-', $text);
    }
}