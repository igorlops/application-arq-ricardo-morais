<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SeoMeta;
use Illuminate\Http\Request;

class SeoMetaController extends Controller
{
    public function index()
    {
        $seoMetas = SeoMeta::latest()->paginate(15);
        return view('admin.seo.index', compact('seoMetas'));
    }

    public function create()
    {
        return view('admin.seo.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'page_name' => 'required|string|max:255|unique:seo_metas',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'status' => 'boolean'
        ]);

        $validated['status'] = $request->has('status');

        SeoMeta::create($validated);

        return redirect()->route('admin.seo.index')->with('success', 'Meta tag criada com sucesso.');
    }

    public function edit(SeoMeta $seo)
    {
        return view('admin.seo.edit', compact('seo'));
    }

    public function update(Request $request, SeoMeta $seo)
    {
        $validated = $request->validate([
            'page_name' => 'required|string|max:255|unique:seo_metas,page_name,' . $seo->id,
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'status' => 'boolean'
        ]);

        $validated['status'] = $request->has('status');

        $seo->update($validated);

        return redirect()->route('admin.seo.index')->with('success', 'Meta tag atualizada com sucesso.');
    }

    public function destroy(SeoMeta $seo)
    {
        $seo->delete();
        return redirect()->route('admin.seo.index')->with('success', 'Meta tag excluída.');
    }
}
