<?php declare(strict_types=1);

namespace App;

use Doctrine\DBAL\Query\QueryBuilder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Gallery
 * @package App
 * @author Paweł Ged <pawelged9903@gmail.com>
 */
class Gallery extends Model
{

    /**
     * @param Builder $query
     * @param bool $isIndex
     * @return Builder
     */
    static public function scopeFindByPage(Builder $query, bool $isIndex = true): Builder
    {
        return $query->where('first_page', $isIndex);
    }
}
