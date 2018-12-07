<?php
/*
  * aasup - anti-auto-sign-up-project
  * plebian.com 14th may 2002
  *
  * the idea is that an image is generated that a computer program can't read
  * but a human can.
  * on your signup form, you display this image and ask the user to type in the text.
  * the text is then checked, and if matches, allows the form to go through
  * otherwise it won't let it
  */

class assup
{
	var $font; // the font we wish to use
	var $text; // the random text used in the image

	function assup()
	{
		// set the font to use
		$this->setFont('adler.ttf');
		// seed the random number generater
		srand((double)microtime()*1000000^getmypid());
	}

	/*
	  * mixed setFont(string $font)
	  * set the font file to use
	  *
	  * returns the old font name (if set) on sucess, false on failure (can not find file)
	  */
	function setFont($font)
	{
		// need to check if is a valid ttf file

		// check that the file exists
		if(file_exists($font))
		{
			$old_font=$this->font;
			$this->font=$font;
			if(!empty($old_font))
				return $old_font;
			return true;
		}
		else
			return false;
	}

	/*
	  * string getFont()
	  *
	  * return the current set font
	  */
	function getFont()
	{
		return $this->font;
	}

	/*
	  * string createImage(int $width, int $height)
	  * create the image and output it's contents to the browser
	  *
	  * will return the random string used on the image
	  */
	function createImage($width=120,$height=30)
	{
		// send header for our image
		header("Content-type:image/png");

		// create an image 
		$im=imagecreate($width,$height);

		// white background
		$white=imagecolorallocate($im,255,255,255);

		// black text and grid
		$black=imagecolorallocate($im,0,0,0);

		// get a random number to start drawing out grid from
		$num=rand(0,5);

		// draw vertical bars
		for($i=$num;$i<=$width;$i+=10)
			imageline($im,$i,0,$i,30,$black);

		// draw horizontal bars
		for($i=$num;$i<=$height+10;$i+=10)
			imageline($im,0,$i,120,$i,$black);

		// generate a random string
		$string=substr(strtolower(md5(uniqid(rand(),1))),0,7);
		
		// in this font, the number 1 looks too much like I
		if($this->getFont()=='adler.ttf')
			$string=str_replace('1','a',$string);

		// place this string into the image
		imagettftext($im,20,2,1,25,$black,$this->getFont(),$string);

		// create the image and send to browser
		imagepng($im);
		// destroy the image
		imagedestroy($im);

		// return the random text generated
		return $this->text=$string;
	}
}