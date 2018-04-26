<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuLink;
use App\Menu;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = Menu::where('id', $_GET['menu'])->first();
        return view('admin.menu.link.create')->with('menu', $menu);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $link = new MenuLink;
      $link->name = $request->name;
      $link->url = $request->url;
      $link->menu_id = $request->menu_id;
      $link->order = $request->order;
      $link->save();
      return redirect('/admin/menu/'.$link->menu_id.'/edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $link = MenuLink::find($id);
        return view('admin.menu.link.edit')->with('link', $link);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $link = MenuLink::find($id);
        $link->name = $request->name;
        $link->url = $request->url;
        $link->order = $request->order;
        $link->save();
        return redirect('/admin/menu/'.$link->menu_id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($id) {
      MenuLink::destroy($id);
    }
}
