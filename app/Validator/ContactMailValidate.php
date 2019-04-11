<?php declare(strict_types = 1);

namespace App\Validator;

/**
 * Class ContactMailValidate
 * @package App\Validator
 * @author Paweł Ged <pawelged9903@gmail.com>
 */
class ContactMailValidate extends Validator
{
    /**
     * ContactMailValidate constructor.
     */
    public function __construct()
    {
        $this->setRules();
    }

    /**
     * @return $this
     */
    public function setRules():self
    {
        $this->rules = [
            'name' => 'required',
            'email' => 'required|email',
            'description' => 'required',
        ];
        return $this;
    }
}