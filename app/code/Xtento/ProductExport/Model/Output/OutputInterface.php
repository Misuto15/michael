<?php

/**
 * Product:       Xtento_ProductExport
 * ID:            1PtGHiXzc4DmEiD7yFkLjUPclACnZa8jv+NX0Ca0xsI=
 * Last Modified: 2016-04-14T15:37:35+00:00
 * File:          app/code/Xtento/ProductExport/Model/Output/OutputInterface.php
 * Copyright:     Copyright (c) XTENTO GmbH & Co. KG <info@xtento.com> / All rights reserved.
 */

namespace Xtento\ProductExport\Model\Output;

interface OutputInterface
{
    public function convertData($exportArray);
}