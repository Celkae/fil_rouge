<?php

namespace Tests\FilRougeBundle\Util;

use FilRougeBundle\Entity\Serie;
use FilRougeBundle\Entity\Episode;
use FilRougeBundle\Util\Test as Negative;

class Test extends \PHPUnit_Framework_TestCase
{
    public function testNegativeSeason()
    {
      // Test : A show cannot have a negative season value!
        $test = new Negative();
        $result = $test->negativeTest(-1, 'FilRougeBundle\Entity\Serie', 'season');
        $this->assertEquals(1, $result);
        return $result;
    }

    public function testNegativeEpisode()
    {
      // Test : A show cannot have a negative season value!
        $test = new Negative();
        $result = $test->negativeTest(-1, 'FilRougeBundle\Entity\Episode', 'episodeNumber');
        $this->assertEquals(1, $result);
        return $result;
    }
}
