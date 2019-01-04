<?php

/* Copyright (c) 1998-2009 ILIAS open source, Extended GPL, see https://github.com/ILIAS-eLearning/ILIAS/tree/trunk/docs/LICENSE */

namespace srag\Plugins\SrCrsLpReport\Utils;

use srag\Plugins\SrCrsLpReport\Access\Access;
use srag\Plugins\SrCrsLpReport\Access\Ilias;
use srag\Plugins\SrCrsLpReport\Tab\TabGUI;

/**
 * Trait SrCrsLpReportTrait
 *
 * Generated by srag\PluginGenerator v0.9.10
 *
 * @package srag\Plugins\SrCrsLpReport\Utils
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
trait SrCrsLpReportTrait {

	/**
	 * @return Access
	 */
	protected static function access(): Access {
		return Access::getInstance();
	}


	/**
	 * @return Ilias
	 */
	protected static function ilias(): Ilias {
		return Ilias::getInstance();
	}

	/**
	 * @return Ilias
	 */
	protected static function tabgui(): TabGUI {
		return TabGUI::getInstance();
	}
}
