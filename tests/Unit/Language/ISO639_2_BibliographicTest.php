<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Language;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Language\ISO639_2_Bibliographic;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Language\ISO639_2_Bibliographic
 */
class ISO639_2_BibliographicTest extends TestCase
{
    /**
     * @covers ::toLanguage
     */
    public function testAllCasesCanBeConvertedToLanguage(): void
    {
        $cases = ISO639_2_Bibliographic::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            $case->toLanguage();
            $this->addToAssertionCount(1);
        }
    }
}