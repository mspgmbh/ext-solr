<?php

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace ApacheSolrForTypo3\Solr\Tests\Unit\IndexQueue\UpdateHandler\Events;

use ApacheSolrForTypo3\Solr\Domain\Index\Queue\UpdateHandler\Events\VersionSwappedEvent;

/**
 * Testcase for the VersionSwappedEvent
 *
 * @author Markus Friedrich <markus.friedrich@dkd.de>
 */
class VersionSwappedEventTest extends AbstractDataUpdateEventTest
{
    protected const EVENT_CLASS = VersionSwappedEvent::class;
    protected const EVENT_TEST_TABLE = 'tx_foo_bar';
}
