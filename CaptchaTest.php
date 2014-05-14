<?php 
require_once "Captcha.php";
class CaptchaTest extends PHPUnit_Framework_TestCase {

	private $captcha;
	private $randomizer;

	function setUp() {
		$this->captcha = new Captcha();
	}

	function testPatternOneOperatorPlus(){
		$this->assertEquals('One + 1 = 2',$this->captcha->getCaptcha(1,1,1,1));
	}

	function testPatternOneOperatorMultiply(){
		$this->assertEquals('One * 1 = 1',$this->captcha->getCaptcha(1,1,2,1));
	}

	function testPatternOneOperatorMinus(){
		$this->assertEquals('Nine - 1 = 8',$this->captcha->getCaptcha(1,9,3,1));
	}

	function testPatternTwoOperatorPlus(){
		$this->assertEquals('1 + One = 2',$this->captcha->getCaptcha(2,1,1,1));
	}

	function testPatternTwoOperatorMultiply(){
		$this->assertEquals('1 * One = 1',$this->captcha->getCaptcha(2,1,2,1));
	}


	function testPatternTwoOperatorMinus(){
		$this->assertEquals('1 - One = 0',$this->captcha->getCaptcha(2,1,3,1));
	}

	function testGetCaptcha() {
		$service = new CaptchaService();
		$captcha = $service->getCaptcha;

		$this->assertEq("One + 1 = 2", $captcha->toString());
	}
}