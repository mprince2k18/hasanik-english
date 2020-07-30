<?php


namespace App\Http\Traits;


use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

trait CategoriesTraits
{
    //show all category and search here
    public function categoryIndex(Request $request)
    {
        $categories = null;
        if ($request->get('search')) {
            $search = $request->search;
            $categories = Category::where('name', 'like', '%' . $search . '%')
                ->with('parent')
                ->paginate(10);
        } else {
            $categories = Category::latest()->paginate(10);
        }
        return view('dashboard.backEnd.common.category.index', compact('categories'));
    }

    //create category model
    public function categoryCreate()
    {
        return view('dashboard.backEnd.common.category.create');
    }


    //edit category model
    public function categoryEdit($id)
    {
        $category = Category::findOrFail($id);
        return view('dashboard.backEnd.common.category.edit', compact('category'));
    }

    //update the category
    public function categoryUpdate(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ], [
            'name.required' => translate('Category name is required')
        ]);

       
        $category = Category::where('id',$request->id)->first();
        $category->name = $request->name;
        $category->meta_title = $request->meta_title;
        $category->meta_desc = $request->meta_desc;
        $category->save();

        return back()->with('success',translate('Category update successfully'));
    }

    //soft delete the category
    public function categoryDestroy($id)
    {
        Category::where('id', $id)->delete();
        return back()->with('success',translate('Category delete successfully'));

    }

    //published
    public function categoryPublished(Request $request)
    {
        // don't use this type of variable naming, use $category instead of $cat1
        $cat = Category::where('id', $request->id)->first();
        if ($cat->is_published == 1) {
            $cat->is_published = 0;
            $cat->save();
        } else {
            $cat->is_published = 1;
            $cat->save();
        }
        return response(['message' => translate('Category active status is change ')], 200);
    }

    // published
    public function categoryPopular(Request $request)
    {
        // don't use this type of variable naming, use $category instead of $cat1
        $cat = Category::where('id', $request->id)->first();
        if ($cat->is_popular == 1) {
            $cat->is_popular = 0;
            $cat->save();
        } else {
            $cat->is_popular = 1;
            $cat->save();
        }
        return response(['message' => translate('Category popular status is change')], 200);
    }

    // published
    public function categoryTop(Request $request)
    {
        // don't use this type of variable naming, use $category instead of $cat1
        $cat = Category::where('id', $request->id)->first();
        if ($cat->top == 1) {
            $cat->top = 0;
            $cat->save();
        } else {
            $cat->top = 1;
            $cat->save();
        }
        return response(['message' => translate('Category top status is change')], 200);
    }
}
