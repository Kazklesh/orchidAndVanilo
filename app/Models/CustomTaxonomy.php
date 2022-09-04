<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Orchid\Access\UserAccess;
use Orchid\Filters\Filterable;
use Orchid\Metrics\Chartable;
use Orchid\Screen\AsSource;
use Vanilo\Category\Models\Taxonomy;

class CustomTaxonomy extends Taxonomy
{
    use Notifiable, UserAccess, AsSource, Filterable, Chartable, HasFactory;

    public function getContent()
    {
    }
}
