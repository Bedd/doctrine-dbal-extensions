<?php
namespace Bedd\Doctrine\Dbal;

/**
 * QueryBuilderException
 */
class QueryBuilderException extends \Exception
{
    /**
     * Exception if the ORDER BY direction does not exist
     *
     * @param string $direction
     * @return self
     */
    public static function orderByDirectionDoesNotExist($direction)
    {
        return new self('The ORDER BY direction "'.$direction.'" does not exist.');
    }

    /**
     * Exception if the ORDER BY direction does not exist
     *
     * @param string $expr_type
     * @return self
     */
    public static function expressionTypeDoesNotExist($expr_type)
    {
        return new self('The Expression-Type "'.$expr_type.'" does not exist.');
    }
}
