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

namespace Respect\Validation\Rules\Locale;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validates whether an input is subdivision code of Haiti or not.
 *
 * ISO 3166-1 alpha-2: HT
 *
 * @see http://www.geonames.org/HT/administrative-division-haiti.html
 *
 * @author Henrique Moody <henriquemoody@gmail.com>
 */
final class HtSubdivisionCode extends AbstractSearcher
{
    /**
     * {@inheritDoc}
     */
    protected function getDataSource(): array
    {
        return [
            'AR', // Artibonite
            'CE', // Centre
            'GA', // Grand'Anse
            'ND', // Nord
            'NE', // Nord-Est
            'NI', // Nippes
            'NO', // Nord-Ouest
            'OU', // Ouest
            'SD', // Sud
            'SE', // Sud-Est
        ];
    }
}