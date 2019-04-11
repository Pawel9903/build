<?php declare(strict_types = 1);

namespace App\Validator;

use Illuminate\Http\Request;

/**
 * Interface ValidateInterface
 * @package App\Validator
 */
interface ValidateInterface
{
    /**
     * @param Request $request
     * @return array|null
     */
    public function validate(Request $request): ?array;
}