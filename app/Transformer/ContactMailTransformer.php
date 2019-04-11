<?php declare(strict_types = 1);

namespace App\Transformer;

use App\Mail\ContactMail;

/**
 * Class ContactMailTransformer
 * @package App\Transformer
 * @author Paweł Ged <pawelged9903@gmail.com>
 */
class ContactMailTransformer implements TransformerInterface
{
    /**
     * @param array $data
     * @return mixed
     */
    public function transform(array $data)
    {
        $contactMail = new ContactMail();
        $contactMail->setName($data['name'])
            ->setEmail($data['email'])
            ->setDescription($data['description']);

        return $contactMail;
    }
}