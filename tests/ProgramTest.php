<?php

namespace Pelshoff\Workshop\Tests;

use DateTimeImmutable;
use InvalidArgumentException;
use Pelshoff\Workshop\Program;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class ProgramTest extends TestCase
{
    #[Test]
    public function accepts_program_slots_only(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new Program([new DateTimeImmutable()]);
    }
}