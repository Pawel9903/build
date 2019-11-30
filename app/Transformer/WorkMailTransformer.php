<?php declare(strict_types=1);

namespace App\Transformer;

use App\Mail\ContactMail;
use App\Mail\WorkMail;
use Exception;

/**
 * Class WorkMailTransformer
 * @package App\Transformer
 * @author Paweł Ged <pawelged9903@gmail.com>
 */
class WorkMailTransformer implements TransformerInterface
{
    /**
     * @param array $data
     * @return WorkMail|null
     * @throws Exception
     */
    public function transform(array $data): ?WorkMail
    {
        if(!$this->isDataCorrect($data)) {
            return null;
        }

        $workMail = new WorkMail();
        $workMail
            ->setPhone(!empty($data['tel'])? $data['tel'] : '')
            ->setName($data['request']['name'])
            ->setEmail($data['request']['email'])
            ->setDescription($data['request']['description'])
            ->setFile($data['file']);

        return $workMail;
    }

    /**
     * @param array $data
     * @return bool
     */
    public function isDataCorrect(array $data): bool
    {
        return empty($data['request'])? false : true;
    }
}
