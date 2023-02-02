<?php

namespace App\Traits;
use Illuminate\Support\Str;

trait HasSlug
{
    /**
     * Generate a slug
     *
     * @return void
     */
    public static function bootHasSlug()
    {
        static::creating(function (self $model) {
            foreach ($model->slugConfigs() as $column => $target) {
                if (empty($model->{$column})) {
                    $model->{$column} = Str::slug($model->{$target});
                }
            }
        });
    }

    /**
     * Get target slug
     *
     * @return array
     */
    public function slugConfigs(): array
    {
        return [];
    }
}