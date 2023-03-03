<?php

namespace Pelshoff\Workshop;

use DateTimeImmutable;

class ProgramSlot
{
    public function __construct(
        private DateTimeImmutable $start,
        private DateTimeImmutable $end,
        private string $title,
        private string $room
    ) {

    }
}