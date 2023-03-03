<?php

namespace Pelshoff\Workshop;

use DateTimeImmutable;
use Ramsey\Uuid\UuidInterface;

class Meeting
{
    public function __construct(
        private UuidInterface $meetingId,
        private string $title,
        private string $description,
        private DateTimeImmutable $start,
        private DateTimeImmutable $end,
        private Program $program
    ) {
    }
}