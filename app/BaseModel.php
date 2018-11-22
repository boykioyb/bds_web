<?php

namespace App;

use App\Scopes\LanguageScope;
use Suren\LaravelMongoModelSchema\MongoModel;

class BaseModel extends MongoModel
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new LanguageScope());
    }
}
