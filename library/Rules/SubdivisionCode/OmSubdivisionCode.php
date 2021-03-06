<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Respect\Validation\Rules\SubdivisionCode;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validates whether an input is subdivision code of Oman or not.
 *
 * ISO 3166-1 alpha-2: OM
 *
 * @see http://www.geonames.org/OM/administrative-division-oman.html
 *
 * @author Henrique Moody <henriquemoody@gmail.com>
 */
final class OmSubdivisionCode extends AbstractSearcher
{
    /**
     * {@inheritdoc}
     */
    protected function getDataSource(): array
    {
        return [
           'BJ', // Al Batinah South
           'BS', // Shamāl al Bāţinah
           'BU', // Al Buraymī
           'DA', // Ad Dakhiliyah
           'MA', // Masqat
           'MU', // Musandam
           'SJ', // Ash Sharqiyah South
           'SS', // Shamāl ash Sharqīyah
           'WU', // Al Wusta
           'ZA', // Az Zahirah
           'ZU', // Zufar
       ];
    }
}
