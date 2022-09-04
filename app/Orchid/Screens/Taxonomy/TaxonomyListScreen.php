<?php

namespace App\Orchid\Screens\Taxonomy;

use App\Models\CustomTaxonomy;
use App\Orchid\Layouts\Taxonomy\TaxonomyEditLayout;
use App\Orchid\Layouts\Taxonomy\TaxonomyListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class TaxonomyListScreen extends Screen
{
    public function query(CustomTaxonomy $taxonomy): iterable
    {
        return [
            'taxonomies' => $taxonomy->all()
        ];
    }

    public function name(): ?string
    {
        return 'Таксономии';
    }

    public function commandBar(): iterable
    {
        return [
            Link::make(__('Add'))
                ->icon('plus')
                ->route('platform.shop.taxonomy.create')
        ];
    }

    public function layout(): iterable
    {
        return [
            TaxonomyListLayout::class,
        ];
    }

    public function asyncGetTaxonomy(CustomTaxonomy $taxonomy): iterable
    {
        return [
            'taxonomy' => $taxonomy
        ];
    }

    public function remove(Request $request): void
    {
        CustomTaxonomy::findOneBySlug($request->get('slug'))->delete();

        Toast::info('Таксономия удалена');
    }
}
