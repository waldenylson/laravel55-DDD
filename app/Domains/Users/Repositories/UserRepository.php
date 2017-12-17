<?php namespace TIOp\Domains\Users\Repositories;

use TIOp\Domains\Users\Contracts\UserRepository as UserRepositoryContract;
use Artesaos\Warehouse\AbstractCrudRepository;
use TIOp\Domains\Users\Transformers\UserTransformer;
use TIOp\Domains\Users\User;

class UserRepository extends AbstractCrudRepository implements UserRepositoryContract
{
    use ImplementsFractal;

    protected $modelClass       = User::class;
    protected $transformerClass = UserTransformer::class;

}