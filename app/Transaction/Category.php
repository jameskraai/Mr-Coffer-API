<?php namespace MrCoffer\Transaction;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * The 'category' that a Transaction mave have.
 *
 * @package MrCoffer\Transaction
 */
class Category extends Model
{
    /**
     * Table name.
     *
     * @var string
     */
    protected $table = 'categories';
    
    /**
     * Mass assignable attributes.
     *
     * @var array
     */
    protected $fillable = ['name'];
}
