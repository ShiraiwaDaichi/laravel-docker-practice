<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestSampleController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function queryStrings(Request $request) // $requestとはタイプヒントされた変数
    { // $request->keywordとは変数の”プロパティ”をアロー記述で指定している。
        //$keyword = $request->keyword; // ここのkeywordはform.blade.phpのformタグ内のname属性と結びつく

        // $keyword = '未設定';
        // if ($request->has('keyword')){
        //     $keyword = $request->keyword; //
        // }

        $keyword = $request->get('keyword', '未設定');
        return 'キーワードは「'. $keyword . '」 です';
    }

    public function profile($id)
    {
        return 'ID:'. $id;
    }

    public function productsArchive(Request $request, $category, $year)
    {
        return 'category: '. $category. '<br>year: '.$year. '<br> page: '. $request->get('page', 1);
    }
}
