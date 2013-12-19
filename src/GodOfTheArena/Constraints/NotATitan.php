<?php

namespace GodOfTheArena\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * 
 * @author    Gildas Quemener <gildas@akeneo.com>
 * @copyright 2013 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class NotATitan extends Constraint
{
    public $message = 'It is a titan!';
}
