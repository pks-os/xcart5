<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Core;

/**
 * Widget cache registry provides access to the widget cache on the whole, allowing to clear all its contents.
 */
interface WidgetCacheRegistryInterface
{
    public function deleteAll();

    public function setRegistry($key, array $parameters);

    public function unsetRegistry($key);

    public function getRegistryKey(array $parameters);

    public function fetchRegistry();

    public function saveRegistry(array $registry);
}