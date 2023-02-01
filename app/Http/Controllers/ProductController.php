<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;

class ProductController extends Controller
{

    public function index(): Response
    {
        return Inertia::render('Product/Index', ['products' => Product::all()]);
    }


    public function create(): Response
    {
        $this->authorize('create', Product::class);

        return Inertia::render('Product/Create');
    }

    public function store(StoreProductRequest $request): RedirectResponse
    {
        Product::create($request->validated());

        return redirect()
            ->route('product.index')
            ->with('success', 'Produkts izveidots.');
    }

    public function show(Product $product): Response
    {
        return Inertia::render('Product/Show', ['product' => $product]);
    }

    public function edit(Product $product): Response
    {
        $this->authorize('update', $product);

        return Inertia::render('Product/Edit', ['product' => $product]);
    }

    public function update(UpdateProductRequest $request, Product $product): RedirectResponse
    {
        $this->authorize('update', $product);

        $product->update($request->validated());

        return redirect()->route('product.index');
    }

    public function destroy(Product $product): RedirectResponse
    {
        $this->authorize('delete', $product);

        $product->delete();

        return redirect()->route('product.index');
    }
}
