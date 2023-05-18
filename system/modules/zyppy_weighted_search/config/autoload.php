<?php

/**
 * Bright Cloud Studio's Zyppy Weighted Search
 *
 * Copyright (C) 2023 Bright Cloud Studio
 *
 * @package    bright-cloud-studio/zyppy-weighted-search
 * @link       https://www.brightcloudstudio.com/
 * @license    http://opensource.org/licenses/lgpl-3.0.html
**/

/* Register the classes */
ClassLoader::addClasses(array
(
    // overriding default SearchResult
    'Bcs\Model\SearchIndexBackend'    => 'system/modules/contao_weighted_search/library/Bcs/Model/SearchIndexBackend.php'
    
));
