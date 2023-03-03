<?php

namespace Pelshoff\Workshop;

use Webmozart\Assert\Assert;

class Program
{
    /**
     * @param ProgramSlot[] $programSlots
     */
    public function __construct(private array $programSlots)
    {
        Assert::allIsInstanceOf($programSlots, ProgramSlot::class);
    }
}