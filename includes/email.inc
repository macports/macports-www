<?php

# $Id $
# Copyright (c) 2004, OpenDarwin

function obfuscate_email($email)
{
	return "<span class='email'>".str_replace('@', "<img src='/img/at.gif' alt='at' style='width: 1em; height: 1em;' border='0' />", $email)."</span>";
}

?>