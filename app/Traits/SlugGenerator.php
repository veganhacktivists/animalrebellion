<?php

namespace App\Traits;

trait SlugGenerator
{
    /**
     * Generate a slug from a given title.
     *
     * @return string
     */
    public function createSlug(string $title, int $id, string $model)
    {
        $slug = str_slug($title);

        $conflicts = $this->getConflictingSlugs($slug, $id, $model);

        return (!$conflicts->contains('slug', $slug)) ? $slug : $slug.'-'.$id;
    }

    /**
     * Find records with the same slug.
     *
     * @param string $slug
     * @param int    $id
     * @param string $model
     *
     * @return mixed
     */
    protected function getConflictingSlugs($slug, $id, $model)
    {
        return $model::select('slug')->where('slug', $slug)
            ->where('id', '<>', $id)
            ->get();
    }
}
