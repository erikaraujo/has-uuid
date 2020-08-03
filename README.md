# // Laravel HasUuid

## About Laravel HasUuid

Laravel HasUuid is a simple trait for your Laravel Models that have a UUID primary key.

To use it, first make sure that in your `migrations` your primary key is a `UUID`.
Then, simply import `ErikAraujo\HasUuid\HasUuid` in your model and use it inside class, by adding `use SoftDeletes, HasUuid;` inside it.

Here's a very simple `User.php` model example based on the default one from Laravel:

```php
<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use ErikAraujo\HasUuid\HasUuid;

class User extends Authenticatable
{
    use Notifiable, HasUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

```

That's it!

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
