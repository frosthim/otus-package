<?php
declare(strict_types=1);

namespace Dgibadullin\OtusComposerPackage;

class StringProcessor
{
    public function getLenght(string $s): int
    {
        return strlen($s);
    }
}