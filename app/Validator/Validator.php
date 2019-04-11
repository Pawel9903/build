<?php declare(strict_types = 1);

namespace App\Validator;

use Illuminate\Http\Request;

/**
 * Class Validator
 * @package App\Validator
 * @author Paweł Ged <pawelged9903@gmail.com>
 */
class Validator implements ValidateInterface
{

    protected $rules;

    /**
     * @param Request $request
     * @return array|null
     */
    public function validate(Request $request): ?array
    {
        return $request->validate($this->rules);
    }
}