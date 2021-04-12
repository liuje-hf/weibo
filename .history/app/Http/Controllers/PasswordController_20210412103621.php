<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function showLinkRequestForm() {
        return view('auth.passwords.email');
    }

    public function sendResetLinkEmail(Request $request)
    {
        // 1. 验证邮箱
        $request->validate(['email' => 'required'])
        // 2. 获取对应用户
        // 3. 如果不存在
        // 4. 生成 Token，会在视图 emails.reset_link 里拼接链接
        // 5. 入库，使用 updateOrInsert 来保持 Email 唯一
        // 6. 将 Token 链接发送给用户
    }
}
