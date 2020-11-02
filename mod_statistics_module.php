<?php
/**
 * @package     mod_statistics__module
 * @author      Thomas Winterling
 * @email       info@winterling-labs.com
 * @copyright   Copyright (C) 2005 - 2013, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;


use Joomla\CMS\Helper\ModuleHelper;
use Joomla\Module\TypedModule\Site\Helper\StatisticsModuleHelper;


StatisticsModuleHelper::CreateNewLabels($params);
StatisticsModuleHelper::CreateNewDataSets($params);
StatisticsModuleHelper::GetLivedataParams($params);
StatisticsModuleHelper::chartJs($data,$datasets,$labels);


require JModuleHelper::getLayoutPath('mod_wl_statistics_module', $params->get('layout', 'default'));