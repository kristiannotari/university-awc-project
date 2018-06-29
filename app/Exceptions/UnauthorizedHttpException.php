<?php
/**
 * Created by PhpStorm.
 * User: Carlo
 * Date: 07/06/2018
 * Time: 16:00
 */

namespace App\Exceptions;

use Symfony\Component\HttpKernel\Exception\HttpException;

class UnauthorizedHttpException extends HttpException
{
    /**
     * @param string     $message   The internal exception message
     * @param \Exception $previous  The previous exception
     * @param int        $code      The internal exception code
     * @param array      $headers
     */
    public function __construct(string $message = null, \Exception $previous = null, ?int $code = 0, array $headers = array())
    {
        parent::__construct(401, $message, $previous, $headers, $code);
    }
}