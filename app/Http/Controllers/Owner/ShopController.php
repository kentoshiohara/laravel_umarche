<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;

class ShopController extends Controller
{
    //ownerでログインをしているか確認
    public function __construct()
    {
        $this->middleware('auth:owners'); //オーナーかどうか確認

        $this->middleware(function ($request, $next) {
            $id = $request->route()->parameter('shop'); //shopIdの取得
            if(!is_null($id)) {
                $shopsOwnerId = Shop::findOrFail($id)->owner->id; //shopのリレーションでオーナーのIDを取得
                $shopId = (int)$shopsOwnerId;
                $ownerId = Auth::id();
                if($shopId !== $ownerId) { //ログインユーザーとオーナーIDが異なる場合
                    abort(404); // 404画面を表示
                }
            }
            return $next($request);
        });
    }

    public function index()
    {
        $ownerId = Auth::id(); // ログインしているもののIDを取得
        $shops = Shop::where('owner_id', $ownerId)->get(); // Shopテーブル内の'owner_id'を$ownerIdで検索して引っかかったものを取得

        return view('owner.shops.index', compact('shops'));
    }

    public function edit($id)
    {
        dd(Shop::findOrFail($id));
    }

    public function update()
    {

    }
}
