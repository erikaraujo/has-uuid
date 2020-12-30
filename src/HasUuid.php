<?php

namespace ErikAraujo\HasUuid;

use Illuminate\Support\Str;

trait HasUuid
{
    protected static function bootHasUuid()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->keyType = 'string';
            $model->incrementing = false;

            if (!$model->getKey()) {
                $model->{$model->getKeyName()} = (string) Str::orderedUuid();
            }
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }
}