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

namespace Respect\Validation\Rules;

use function is_bool;

/**
 * Validates whether the type of the input is boolean.
 *
 * @author Devin Torres <devin@devintorres.com>
 * @author Henrique Moody <henriquemoody@gmail.com>
 */
final class BoolType extends AbstractRule
{
    /**
     * {@inheritdoc}
     */
    public function validate($input): bool
    {
        return is_bool($input);
    }
}
