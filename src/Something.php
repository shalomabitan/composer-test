<?php

namespace Something;


class Something
{

	protected $nothing;

	public function __construct($nothing)
	{
		$this->nothing = $nothing;
	}

	public function saySomething()
	{
		echo "Why should I say something?";
	} 

	public function sayNothing()
	{
		echo "Screw you! I want to say $this->nothing";
	}
}