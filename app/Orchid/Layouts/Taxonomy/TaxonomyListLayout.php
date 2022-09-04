<?php

namespace App\Orchid\Layouts\Taxonomy;

use App\Models\CustomTaxonomy;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class TaxonomyListLayout extends Table
{
    protected $target = 'taxonomies';

    protected function columns(): iterable
    {
        return [
            TD::make('name', __('Name'))
                ->sort()
                ->render(function (CustomTaxonomy $taxonomy) {
                    return $taxonomy['name'];
                }),
            TD::make(__('Slug'))
                ->sort()
                ->render(function (CustomTaxonomy $taxonomy) {
                    return $taxonomy['slug'];
                }),
            TD::make('updated_at', __('Last edit'))
                ->sort()
                ->render(function (CustomTaxonomy $taxonomy) {
                    return $taxonomy['updated_at']->toDateTimeString();
                }),
            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(function (CustomTaxonomy $taxonomy) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([
                            Link::make(__('Edit'))
                                ->icon('pencil')
                                ->route('platform.shop.taxonomy.edit', $taxonomy['id']),
                            Button::make(__('Delete'))
                                ->icon('trash')
                                ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                                ->method('remove', [
                                    'slug' => $taxonomy['slug']
                                ])
                        ]);
                })
        ];
    }
}
