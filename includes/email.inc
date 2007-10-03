<?php

# -*- coding: utf-8; mode: tcl; tab-width: 4; indent-tabs-mode: nil; c-basic-offset: 4 -*- vim:fenc=utf-8:et:sw=4:ts=4:sts=4
# $Id$
# Copyright (c) 2004, OpenDarwin

function obfuscate_email($email)
{
	return "<span class='email'>".str_replace('@', "<img src='img/at.gif' alt='at' style='width: 1em; height: 1em;' />", $email)."</span>";
}

?>
