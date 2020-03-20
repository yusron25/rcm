<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH.'third_party/gregWarCaptcha/CaptchaBuilderInterface.php');
require_once(APPPATH.'third_party/gregWarCaptcha/PhraseBuilderInterface.php');
require_once(APPPATH.'third_party/gregWarCaptcha/ImageFileHandler.php');
require_once(APPPATH.'third_party/gregWarCaptcha/PhraseBuilder.php');
require_once(APPPATH.'third_party/gregWarCaptcha/CaptchaBuilder.php');

use Gregwar\Captcha\CaptchaBuilder;

class CaptchaGregwar {


	public function newx(){

		return new CaptchaBuilder;
	}
}