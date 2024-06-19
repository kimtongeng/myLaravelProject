<?php


namespace App\Http\Controllers;

use App\Models\Watch;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\While_;

class WatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $watches = Watch::all();
        return view("admin.watch.index", compact("watches"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.watch.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $watch = new Watch;
        $watch->name = $request->name;
        $watch->brand = $request->brand;
        $watch->price = $request->price;
        $watch->quantity = $request->quantity;
        $watch->warranty = $request->warranty;
        $watch->highlights = $request->highlight;
        $watch->composition = $request->composition;
        $watch->warning = $request->warning;
        $watch->available = $request->available;
        $watch->description = $request->description;
        $watch->type = $request->type;

        $mainImageFile = $request->mainImage;
        $sideImageFile = $request->sideImage;
        $subImageFile  = $request->subImage;

        $mainImageName = time()."-". $mainImageFile->getClientOriginalName();
        $sideImageName = time()."-". $sideImageFile->getClientOriginalName();
        $subImageName  = time()."-". $subImageFile->getClientOriginalName();

        $mainImageFile->move(public_path("image"), $mainImageName);
        $sideImageFile->move(public_path("image"),$sideImageName);
        $subImageFile->move(public_path("image"),$subImageName);

        $watch->mainImage = $mainImageName;
        $watch->sideImage = $sideImageName;
        $watch->subImage = $subImageName;


        $imageFile = $request->image;
        $imageName = time() . "-" . $imageFile->getClientOriginalName();
        $imageFile->move(public_path("image"), $imageName);

        $watch->image = $imageName;
        $watch->save();

        return redirect()->route("watch.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $watch = Watch::find($id);
        $highlights = explode("\n", $watch->highlights);

        return view("admin.watch.show", compact("watch", "highlights"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $watch = Watch::find($id);
        return view("admin.watch.edit", compact("watch"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $watch = Watch::find($id);
        $watch->name = $request->name;
        $watch->brand = $request->brand;
        $watch->price = $request->price;
        $watch->quantity = $request->quantity;
        $watch->warranty = $request->warranty;
        $watch->highlights = $request->highlight;
        $watch->composition = $request->composition;
        $watch->warning = $request->warning;
        $watch->available = $request->available;
        $watch->description = $request->description;

        if($request->image!=""){
            $imageFile = $request->image;
            $imageName = time()."-". $imageFile->getClientOriginalName();
            $imageFile->move(public_path("image/"),$imageName);

            $watch->image = $imageName;
        }

        if($request->mainImage!=""){
            $mainImageFile = $request->mainImage;
            $mainImageName = time()."-". $mainImageFile->getClientOriginalName();
            $mainImageFile->move(public_path("image"), $mainImageName);
            $watch->mainImage = $mainImageName;

        }
        if($request->sideImage!=""){
            $sideImageFile = $request->sideImage;
            $sideImageName = time()."-". $sideImageFile->getClientOriginalName();
            $sideImageFile->move(public_path("image"),$sideImageName);
            $watch->sideImage = $sideImageName;

        }
        if($request->subImage!=""){
            $subImageFile  = $request->subImage;
            $subImageName  = time()."-". $subImageFile->getClientOriginalName();
            $subImageFile->move(public_path("image"),$subImageName);
            $watch->subImage = $subImageName;

        }



        $watch->save();
        return redirect()->route("watch.index");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $watch = Watch::find($id);
        $watch->delete();

        return redirect()->route("watch.index");
    }
}
