<?php
use Zizaco\Entrust\HasRole;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\ConfideUserInterface;

class User extends Eloquent implements ConfideUserInterface
{
    use ConfideUser;
	use HasRole;
	use EntrustUserTrait;
}