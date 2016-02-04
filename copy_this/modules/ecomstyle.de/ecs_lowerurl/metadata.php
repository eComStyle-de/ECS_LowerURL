<?php
/*    Please retain this copyright header in all versions of the software
 *
 *    Copyright (C) 2015  Josef A. Puckl | eComStyle.de
 *
 *    This program is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with this program.  If not, see {http://www.gnu.org/licenses/}.
 */

$sMetadataVersion = '1.1';
$aModule = array(
    'id'            => 'ecs_lowerurl',
    'title'         => '<strong style="color:#04B431;">e</strong><strong>ComStyle.de</strong>:  <i>LowerURL</i>',
    'description'   => 'Gro&szlig;buchstaben in URL&acute;s werden in Kleinbuchstaben umgewandelt.<br>
                        <span style="color: #CC0000">Nach der Modulaktivierung unter Stammdaten/Grundeinstellungen/SEO auf den Button "SEO URLs neu berechnen" klicken!</span>
                        <br><iframe frameborder="no" width="600px" height="400px" src="https://ssl-account.com/incl.oxidtheme.de/gratis.html"></iframe>',
    'thumbnail'     => 'ecs.png',
    'version'       => '1.0',
    'author'        => '<strong style="font-size: 17px;color:#04B431;">e</strong><strong style="font-size: 16px;">ComStyle.de</strong>',
    'email'         => 'info@ecomstyle.de',
    'url'           => 'http://ecomstyle.de',
    'extend'        => array(
	    'oxseoencoderarticle'       => 'ecomstyle.de/ecs_lowerurl/models/oxseoencoderarticlelowerurl',
	    'oxseoencodercategory'      => 'ecomstyle.de/ecs_lowerurl/models/oxseoencodercategorylowerurl',
	    'oxseoencodercontent'       => 'ecomstyle.de/ecs_lowerurl/models/oxseoencodercontentlowerurl',
	    'oxseoencodermanufacturer'  => 'ecomstyle.de/ecs_lowerurl/models/oxseoencodermanufacturerlowerurl',
	    'oxseoencodertag'           => 'ecomstyle.de/ecs_lowerurl/models/oxseoencodertaglowerurl',
        'oxseoencoderrecomm'        => 'ecomstyle.de/ecs_lowerurl/models/oxseoencoderrecommlowerurl',
        'oxseoencodervendor'        => 'ecomstyle.de/ecs_lowerurl/models/oxseoencodervendorlowerurl',
    )
);
?>