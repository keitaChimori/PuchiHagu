<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MypageController;
use Illuminate\Support\Facades\Auth;

Route::group(['middleware' => ['guest']], function () { 

    // トップページ表示
    Route::get('/', function () {
        return view('index');
    })->name('showTop');

    // ログインページ画面表示
    Route::get('/login', function () {
        return view('auth.login');
    })->name('showLogin');

    // 会員登録ページ表示
    Route::get('/signup', function () {
        return view('auth.signup');
    })->name('showSignup');

    // パスワードリセットメール送信フォーム表示
    Route::get('/passwordreset', function () {
        return view('auth.password_reset');
    })->name('showPasswordReset');
    
    // プリントページ表示
    Route::get('/print', function () {
        return view('print');
    })->name('showPrint');

    // ひらがなプリント表示
    Route::get('/print_hiragana', function () {
        return view('print.print_hiragana');
    })->name('showPrintHiragana');

    // 数字プリント表示
    Route::get('/print_suzi', function () {
        return view('print.print_suzi');
    })->name('showPrintSuzi');

    // 運筆プリント表示
    Route::get('/print_unpitu', function () {
        return view('print.print_unpitu');
    })->name('showPrintUnpitu');

    // 点つなぎプリント表示
    Route::get('/print_tentunagi', function () {
        return view('print.print_tentunagi');
    })->name('showPrintTentunagi');

    // プログラミングプリント表示
    Route::get('/print_programming', function () {
        return view('print.print_programming');
    })->name('showPrintProgramming');

    // 利用規約ページ表示
    Route::get('/membership', function () {
        return view('membership');
    })->name('showMembership');

    // お問い合わせページ表示
    Route::get('/contact', function () {
        return view('contact');
    })->name('showContact');

    // 退会完了画面表示
    Route::get('/deleted', function () {
        return view('mypage.taikai_finished');
    })->name('showDeleted');

    /****************************************/ 
    /*******     Userコントローラー    ******/ 
    /****************************************/ 
    // 会員登録実行
    Route::post('/exesignup',[UserController::class,'exeSignup'])->name('exeSignup');

    // ログイン実行
    Route::post('/exelogin',[UserController::class,'exeLogin'])->name('exeLogin');

    // パスワードリセットメールの送信
    Route::post('/exepasswordresetmail',[UserController::class,'exePasswordResetMail'])->name('exePasswordResetMail');

    // パスワードリセットフォーム表示
    Route::get('/passwordresetform',[UserController::class,'showPasswordResetForm'])->name('showPasswordResetForm');

    // パスワードリセット実行
    Route::post('/exepasswordreset',[UserController::class,'exePasswordReset'])->name('exePasswordReset');

    // パスワードリセット完了画面表示
    Route::get('/passwordresetfinished', function () {
        return view('auth.password_reset_finished');
    })->name('showPasswordResetFinished');

});

/*******************************************/ 
/*******     Mypageコントローラー     ******/ 
/*******************************************/ 
Route::group(['middleware' => ['auth']], function () {
    //マイページ表示
    Route::get('/mypage',[MypageController::class,'showMypage'])->name('showMypage');

    // すたんぷページ表示
    Route::get('/stamp/{number}',[MypageController::class,'showStamp'])->name('showStamp');

    // スタンプを押す処理
    Route::post('/stamp',[MypageController::class,'exeStamp'])->name('exeStamp');

    // スタンプを消す処理
    Route::post('/stampdelete',[MypageController::class,'exeStampDelete'])->name('exeStampDelete');

    // 以下会員情報・ログアウト

    // 会員情報(プロフィール)変更画面表示
    Route::get('/profile',[MypageController::class,'showProfile'])->name('showProfile');

    // 会員情報(プロフィール)変更処理
    Route::post('/exeprofile',[UserController::class,'exeProfile'])->name('exeProfile');

    // パスワード変更画面表示
    Route::get('/passwordchange',[MypageController::class,'showPasswordChange'])->name('showPasswordChange');

    // パスワード変更処理
    Route::post('/exepasswordchange',[UserController::class,'exePasswordChange'])->name('exePasswordChange');

    // パスワード変更完了画面表示
    Route::get('/passwordchanged',[MypageController::class,'showPasswordChangeFinished'])->name('showPasswordChangeFinished');

    // 退会確認画面表示
    Route::get('/delete',[MypageController::class,'showDelete'])->name('showDelete');

    // 退会処理
    Route::get('/exedelete/{id}',[UserController::class,'exeDelete'])->name('exeDelete');

    //ログアウト処理
    Route::post('/exelogout',[UserController::class,'exeLogout'])->name('exeLogout');

    // 以下印刷ページ

    //ひらがな印刷画面表示
    Route::get('/hiragana/{child_id?}',[MypageController::class,'showHiragana'])->name('showHiragana');

    //すうじ印刷画面表示
    Route::get('/suzi/{child_id?}',[MypageController::class,'showSuzi'])->name('showSuzi');

    //うんぴつ印刷画面表示
    Route::get('/unpitu/{child_id?}',[MypageController::class,'showUnpitu'])->name('showUnpitu');
    
    //点つなぎ印刷画面表示
    Route::get('/tentunagi/{child_id?}',[MypageController::class,'showTentunagi'])->name('showTentunagi');
    
    //プログラミング印刷画面表示
    Route::get('/programming/{child_id?}',[MypageController::class,'showProgramming'])->name('showProgramming');

});
