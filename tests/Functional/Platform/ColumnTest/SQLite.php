<?php

declare(strict_types=1);

namespace Doctrine\DBAL\Tests\Functional\Platform\ColumnTest;

use Doctrine\DBAL\Platforms\SQLitePlatform;
use Doctrine\DBAL\Tests\Functional\Platform\ColumnTest;

final class SQLite extends ColumnTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->requirePlatform(SQLitePlatform::class);
    }
}
