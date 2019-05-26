<?php declare(strict_types = 1);

namespace App\Transformer;

use App\Mail\ContactMail;
use App\Mail\WorkMail;

/**
 * Class WorkMailTransformer
 * @package App\Transformer
 * @author Paweł Ged <pawelged9903@gmail.com>
 */
class WorkMailTransformer implements TransformerInterface
{
    /**
     * @param array $data
     * @return mixed
     */
    public function transform(array $data)
    {
        $workMail = new WorkMail();
        $workMail->setName($data['request']['name'])
            ->setEmail($data['request']['email'])
            ->setDescription($data['request']['description'])
            ->setFile($data['file']);

        return $workMail;
    }
}
