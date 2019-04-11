<?php declare(strict_types = 1);

namespace App\Transformer;

/**
 * Interface TransformerInterface
 * @package App\Transformer
 */
interface TransformerInterface
{
    /**
     * @param array $data
     * @return mixed
     */
    public function transform(array $data);
}