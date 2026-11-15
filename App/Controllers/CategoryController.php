<?php

namespace App\Controllers;

use Framework\Core\BaseController;
use Framework\Http\Request;
use Framework\Http\Responses\Response;

use App\Models\Category;
use App\Models\Product;

/**
 * @package App\Controllers
 */
class CategoryController extends BaseController
{
    public function index(Request $request): Response
    {
        $categories = Category::getAll();
        $products = Product::getAll();

        $uncategorized = new Category();
        $uncategorized->setName('Bez kategórie');
        $categories[] = $uncategorized;
        
        return $this->html(compact('categories', 'products'));
    }

    public function delete(Request $request): Response
    {
        $id = $request->value('id');
        if ($id) {
            $category = Category::getOne($id);
            $category?->delete();
        }

        return $this->redirect($this->url('category.index'));
    }

    public function form(Request $request): Response
    {
        $id = $request->value('id');
        $category = $id ? Category::getOne((int)$id) : null;

        return $this->html(compact('category'));
    }

    public function add(Request $request) : Response
    {
        $id = $request->value('id');

        $category = $id ? Category::getOne($id) : new Category();
        $category->setName($request->value('name'));
        $category->setDescription($request->value('description'));
        $category->save();

        return $this->redirect($this->url('category.index'));
    }
}