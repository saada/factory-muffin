<?php

/*
 * This file is part of Factory Muffin.
 *
 * (c) Graham Campbell <graham@mineuk.com>
 * (c) Scott Robertson <scottymeuk@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\FactoryMuffin\Exceptions;

/**
 * This is the definition not found exception class.
 *
 * This is thrown when you try to create a model without registering its
 * definition first. This class extends DefinitionException, so you may want to
 * try to catch that exception instead, if you want to be more general.
 *
 * @author Graham Campbell <graham@mineuk.com>
 */
class DefinitionNotFoundException extends DefinitionException
{
    /**
     * Create a new definition not found exception instance.
     *
     * @param string      $name    The model definition name.
     * @param string|null $message The exception message.
     *
     * @return void
     */
    public function __construct($name, $message = null)
    {
        if (!$message) {
            $message = "The model definition '$name' is undefined.";
        }

        parent::__construct($name, $message);
    }
}
