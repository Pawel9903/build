<?php declare(strict_types = 1);

namespace App\Validator;

/**
 * Class WorkMailValidate
 * @package App\Validator
 * @author Paweł Ged <pawelged9903@gmail.com>
 */
class WorkMailValidate extends Validator
{
    /**
     * WorkMailValidate constructor.
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
//            "file" => "file|mimes:pdf,odt,doc,docx|max:10000"
        ];
        return $this;
    }
}
