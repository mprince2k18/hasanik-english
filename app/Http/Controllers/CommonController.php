<?php

namespace App\Http\Controllers;

use App\Http\Traits\CategoriesTraits;
use App\Http\Traits\CurrencyTraits;
use App\Http\Traits\GroupPermissionTraits;
use App\Http\Traits\LanguageTraits;
use App\Http\Traits\PagesTraits;
use App\Http\Traits\SettingTraits;
use Illuminate\Http\Request;
use App\Models\Category;

class CommonController extends Controller
{
    use GroupPermissionTraits,LanguageTraits,CurrencyTraits,SettingTraits,CategoriesTraits;
}
