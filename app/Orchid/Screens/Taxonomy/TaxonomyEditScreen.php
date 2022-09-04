<?php

namespace App\Orchid\Screens\Taxonomy;

use App\Models\CustomTaxonomy;
use App\Orchid\Layouts\Taxonomy\TaxonomyEditLayout;
use Orchid\Screen\Screen;

class TaxonomyEditScreen extends Screen
{

    public $taxonomy;


    public function query(CustomTaxonomy $taxonomy): iterable
    {
        return [
            'taxonomy' => $taxonomy
        ];
    }

    public function name(): ?string
    {
        return $this->taxonomy->exists ? __('Edit') : __('Create');
    }

    public function commandBar(): iterable
    {
        return [];
    }


    public function layout(): iterable
    {
        return [
            TaxonomyEditLayout::class
        ];
    }
}
