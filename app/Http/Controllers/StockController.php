<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Stock;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }

    public function store(Request $request){
        $stock = Stock ::create([
            'product_id' => $request->data["product_id"],
            'bay_id' => $request->data["bay_id"],
            'aisle_id' => $request->data["aisle_id"],
            'status' => "assign",
            'department_id' => $request->data["department_id"],
        ]);
        $stock->save();

        $response = array(
            'status' => 'success',
            'msg' => $request->message,
        );
        return response()->json($response);
    }
    public function delete(Request $request){
        $stock = Stock::find($request->id);

            if ($stock->id) {
                $stock->delete();
            }
            $response = array(
                'status' => 'success',
                'msg' => $request->message,
            );
            return response()->json($response);

    }
}
