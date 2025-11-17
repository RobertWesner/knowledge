<?php

final class InlineLogo
{
    public static function img(string $name)
    {
        return '<img class="h-1em" src="./img/' . $name . '.png" alt="">';
    }
}
