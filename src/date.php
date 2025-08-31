<?php

function dateToYearFloat(string $date): float
{
    $timestamp = strtotime($date);

    return (float)date('Y', $timestamp) + (
        (float)date('n', $timestamp) - 1
        + (float)date('d', $timestamp) / 31
    ) / 12;
}

function yearFloatToDate(?float $year): ?string
{
    if ($year === null) {
        return null;
    }

    return DateTime::createFromFormat('!m', (int)((($year - floor($year)) * 12 + 1)))->format('F') . ' ' . floor($year);
}
