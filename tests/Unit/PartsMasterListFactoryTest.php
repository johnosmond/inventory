<?php

namespace Tests\Unit;

use Database\Factories\PartsMasterListFactory;
use PHPUnit\Framework\TestCase;

class PartsMasterListFactoryTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_parts_master_list_factory_can_generate_part_numbers(): void
    {
        $pn = PartsMasterListFactory::new()->create();
        $this->assertNotEmpty($pn->pn);
    }
}
