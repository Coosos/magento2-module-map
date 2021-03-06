<?php
/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future.
 *
 * @category  Smile
 * @package   Smile\Map
 * @author    Aurelien FOUCRET <aurelien.foucret@smile.fr>
 * @copyright 2016 Smile
 * @license   Apache License Version 2.0
 */
namespace Smile\Map\Model;

use Smile\Map\Api\Data\GeolocalizedAddressInterface;

/**
 * Default implementation of the GeolocalizedAddressInterface.
 *
 * @category Smile
 * @package  Smile\Map
 * @author   Aurelien FOUCRET <aurelien.foucret@smile.fr>
 */
class GeolocalizedAddress extends Address implements GeolocalizedAddressInterface
{
    /**
     * {@inheritDoc}
     */
    public function getCoordinates()
    {
        return $this->getData(self::COORDINATES);
    }

    /**
     * {@inheritDoc}
     */
    public function setCoordinates(\Smile\Map\Api\Data\GeoPointInterface $coordinates)
    {
        return $this->setData(self::COORDINATES, $coordinates);
    }
}
