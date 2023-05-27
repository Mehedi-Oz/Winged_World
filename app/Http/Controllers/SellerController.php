<?php

namespace App\Http\Controllers;
use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function addSeller()
    {
        return view('admin.seller.add-seller');
    }

    public function saveSeller(Request $request)
    {
        Seller::saveSeller($request);
        return back()->with('message', 'Seller Saved!');
    }

    public function manageSeller()
    {
        return view('admin.seller.manage-seller', [
            'sellers' => Seller::all()
        ]);
    }

    public function editSeller($id)
    {
        return view('admin.seller.edit-seller', [
            'seller' => Seller::find($id)
        ]);
    }

    public function updateSeller(Request $request)
    {
        Seller::updateSeller($request);
        return back()->with('message', 'Seller Updated!');
    }

    public function deleteSeller(Request $request)
    {
        Seller::deleteSeller($request);
        return back();
    }
}
