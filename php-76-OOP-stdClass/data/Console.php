<?php

namespace Data;

interface HasBrand
{
    function getBrend(string $namaBrend): string;
}

interface isMaintenance
{
    public function isMaintenance(): bool;
}

interface Console extends HasBrand
{
    function XBOX(): string;

    function PS5(string $name): void;
}
