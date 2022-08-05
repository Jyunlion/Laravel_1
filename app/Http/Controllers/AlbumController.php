<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        return "歡迎來到相簿管理系統";
    }

    public function showAlbumFromID($id)
    {
        //此處將實作取出符合傳入參數id條件的相簿資料並回傳至客戶端
        return "請求傳入參數為" . $id . "。取出相簿 ID:" . $id . " 的詳細資訊";
    }
}