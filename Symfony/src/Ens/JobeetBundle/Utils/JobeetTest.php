<?php
/**
 * Created by PhpStorm.
 * User: quatt_000
 * Date: 4/7/16
 * Time: 11:47 AM
 */

namespace Ens\JobeetBundle\Utils;
use Ens\JobeetBundle\Utils\Jobeet;
use PHPUnit_Framework_TestCase;


class JobeetTest extends PHPUnit_Framework_TestCase {

    public function testSlugify()
    {
        $this->assertEquals('sensio', Jobeet::slugify('Sensio'));
        $this->assertEquals('sensio-labs', Jobeet::slugify('sensio labs'));
        $this->assertEquals('sensio-labs', Jobeet::slugify('sensio   labs'));
        $this->assertEquals('paris-france', Jobeet::slugify('paris,france'));
        $this->assertEquals('sensio', Jobeet::slugify('  sensio'));
        $this->assertEquals('sensio', Jobeet::slugify('sensio  '));
    }
} 