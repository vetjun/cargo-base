<?php

namespace Flo\CargoBase;

interface BaseInterface
{
    public function createPackage($params, $additional_data = []);
}