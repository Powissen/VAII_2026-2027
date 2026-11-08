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
class ProductController extends BaseController
{
    public function index(Request $request): Response
    {
        return $this->redirect($this->url('home.index'));
    }

    public function form(Request $request): Response
    {
        $product = null;
        $categories = Category::getAll();

        return $this->html(compact('product', 'categories'), 'form_product');
    }


    public function delete() : Response
    {
        $id = $this->app->getRequest()->value('id');
        if ($id) {
            $product = Product::getOne($id);
            $product?->delete();
        }

        return $this->redirect($this->url('home.index'));
    }

    public function add() : Response
    {
        $request = $this->app->getRequest();
        $id = $request->value('id');

        $product = $id ? Product::getOne($id) : new Product();
        $product->setCategory($request->value('category_id'));
        $product->setName($request->value('name'));
        $product->setParameters($request->value('parameters'));
        $product->setDescription($request->value('description'));
        $product->setPrice($request->value('price'));
        $product->setImage($request->value('image'));

        $product->save();

        return $this->redirect($this->url('home.index'));
    }

    public function edit() : Response
    {
        $id = $this->app->getRequest()->value('id');
        $product = null;
        if ($id) {
            $product = Product::getOne($id);
        }
        $categories = Category::getAll();

        return $this->html(compact('product', 'categories'), 'form_product');
    }
}