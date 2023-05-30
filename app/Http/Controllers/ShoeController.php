<?php

namespace App\Http\Controllers;

use App\Models\Shoe;

use Illuminate\Http\Request;

class ShoeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shoes = Shoe::all();
      return view ('shoes.index')->compact(['shoe123'=> $shoes, 'totalsize'=> $totalsize]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shoes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Shoe::create($input);
        return redirect('shoe')->with('flash_message', 'Shoes Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shoe= Shoe::find($id);
        $totalsize= Shoe::sum ('Size');
        $totalsize= $totalsize/ Shoe::count();
        $getSize = $shoe->size-$totalsize;
        $diff= $getSize;
        return view('shoes.show')->with(['shoes'=> $shoe, 'diff'=> $diff, 'totalsize'=> $totalsize]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shoe = Shoe::find($id);
        return view('shoes.edit')->with('shoes', $shoe);
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
        $shoe = Shoe::find($id);
        $input = $request->all();
        $shoe->update($input);
        return redirect('shoe')->with('flash_message', 'Shoes Updated!'); 
    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $shoe = Shoe::query()
            ->where('Brand', 'LIKE', "%{$search}%")
            ->orWhere('Size', 'LIKE', "%{$search}%")
            ->orWhere('Color', 'LIKE', "%{$search}%")
            ->get();
            $totalsize= Shoe::sum ('Size');
            $totalsize= $totalsize/ Shoe::count();
            $diff= $totalsize - 5;
        // Return the search view with the results compacted
        return view('shoes.index', compact('shoe','totalsize', 'diff'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Shoe::destroy($id);
        return redirect('shoe')->with('flash_message', 'Shoes deleted!'); 
    }
}
