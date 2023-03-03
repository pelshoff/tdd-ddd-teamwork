<?php

namespace Pelshoff\Workshop\Tests;

use DateTimeImmutable;
use Pelshoff\Workshop\Meeting;
use Pelshoff\Workshop\Program;
use Pelshoff\Workshop\ProgramSlot;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;

class MeetingTest extends TestCase
{
    #[Test]
    public function can_be_held(): void
    {
        $this->assertInstanceOf(
            Meeting::class,
            new Meeting(
                Uuid::uuid4(),
                'TDD, DDD & Teamwork',
                'This is a silly workshop, don\'t come',
                new DateTimeImmutable('2023-03-09 09:30'),
                new DateTimeImmutable('2023-03-09 17:00'),
                new Program([
                    new ProgramSlot(
                        new DateTimeImmutable('2023-03-09 10:00'),
                        new DateTimeImmutable('2023-03-09 13:00'),
                        'Part 1',
                        'Beech office'
                    ),
                    new ProgramSlot(
                        new DateTimeImmutable('2023-03-09 14:00'),
                        new DateTimeImmutable('2023-03-09 17:00'),
                        'Part 2',
                        'Beech office'
                    ),
                ])
            )
        );
    }
}