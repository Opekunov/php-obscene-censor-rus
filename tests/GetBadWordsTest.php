<?php

namespace Wkhooy;

require_once __DIR__ . '/../src/ObsceneCensorRus.php';

class GetBadWordsTest extends \PHPUnit_Framework_TestCase
{
    public function testCensor()
    {
		$this->assertSameSize(ObsceneCensorRus::getBadWords('Ан нет. Готовит снова рок Последний жесткий свой урок.'), []);
		$this->assertSameSize(ObsceneCensorRus::getBadWords('Итак, пиздец приходит дяде. Навек прощайте, водка, бляди…'), ['пиздец', 'бляди']);
	}
}
