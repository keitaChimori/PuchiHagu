<!-- ******************************** -->
<!-- *****   スタンプページ    ***** -->
<!-- ******************************** -->

<!-- layout.blade.php読み込み -->
@extends('layouts.layout')

<!-- ページタイトル -->
@section('title','すたんぷちょう ｜ 幼児無料プリントサイト ぷちはぐ')

@section('content')

<div id="contents">

    <section class="box1">

        <h2>
            @if(is_null( $children_data[$number]['child_name'] ))
            〇〇ちゃん
            @else
            {{ $children_data[$number]['child_name'] }}
            @endif
            のすたんぷちょう
        </h2>
        <div class="stampimghead">
            <img src="{{ asset('images/stamp3.png') }}" alt="スタンプサンプル画像2">
        </div>
        <!-- ひらがな -->
        <table class="osare5-table col5t">
            <thead>
                <tr>
                    <th></th>
                    <th>あ</th>
                    <th>い</th>
                    <th>う</th>
                    <th>え</th>
                    <th>お</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="table-th-hiragana">あいうえお</th>
                    @for($i = 1; $i <= 5; $i++)
                        <!-- スタンプを押した時間と今の時間の差分を取得 -->
                        @php
                            $now_date = new DateTime('now'); 
                            $stamp_date = new DateTime($hiragana['hiragana'.$i]); 
                            $diff = $now_date->diff($stamp_date);
                            $diff = $diff->format('%a');
                        @endphp

                        @if(is_null($hiragana['hiragana'.$i])) 
                                <!-- スタンプが無い場合 -->
                                <td></td>
                        @elseif($diff < 6)
                            <!-- スタンプが一週間以内の場合 -->
                            <td>
                                <div class="ribbon19-wrapper">
                                    <div class="ribbon19-content">
                                        <span class="ribbon19">NEW</span>
                                    </div>
                                    <img src="{{ asset('images/stamp5.png') }}" alt="スタンプサンプル画像5">
                                </div>
                            </td>
                        @else
                            <!-- スタンプが一週間以上前の場合 -->
                            <td><img src="{{ asset('images/stamp5.png') }}" alt="スタンプサンプル画像5"></td>
                        @endif
                    @endfor
                </tr>
                <thead>
            </tbody>
            <tr>
                <th class="table-th-hiragana-space"></th>
                <th>か</th>
                <th>き</th>
                <th>く</th>
                <th>け</th>
                <th>こ</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="table-th-hiragana-space">かきくけこ</th>
                    @for($i = 6; $i <= 10; $i++)
                        <!-- スタンプを押した時間と今の時間の差分を取得 -->
                        @php
                            $now_date = new DateTime('now'); 
                            $stamp_date = new DateTime($hiragana['hiragana'.$i]); 
                            $diff = $now_date->diff($stamp_date);
                            $diff = $diff->format('%a');
                        @endphp

                        @if(is_null($hiragana['hiragana'.$i])) 
                            <!-- スタンプが無い場合 -->
                            <td></td>
                        @elseif($diff < 6)
                            <!-- スタンプが一週間以内の場合 -->
                            <td>
                                <div class="ribbon19-wrapper">
                                    <div class="ribbon19-content">
                                        <span class="ribbon19">NEW</span>
                                    </div>
                                    <img src="{{ asset('images/stamp5.png') }}" alt="スタンプサンプル画像5">
                                </div>
                            </td>
                        @else
                            <!-- スタンプが一週間以上前の場合 -->
                            <td><img src="{{ asset('images/stamp5.png') }}" alt="スタンプサンプル画像5"></td>
                        @endif
                    @endfor
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th class="table-th-hiragana-space"></th>
                    <th>さ</th>
                    <th>し</th>
                    <th>す</th>
                    <th>せ</th>
                    <th>そ</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="table-th-hiragana-space">さしすせそ</th>
                    @for($i = 11; $i <= 15; $i++)
                        <!-- スタンプを押した時間と今の時間の差分を取得 -->
                        @php
                            $now_date = new DateTime('now'); 
                            $stamp_date = new DateTime($hiragana['hiragana'.$i]); 
                            $diff = $now_date->diff($stamp_date);
                            $diff = $diff->format('%a');
                        @endphp

                        @if(is_null($hiragana['hiragana'.$i])) 
                            <!-- スタンプが無い場合 -->
                            <td></td>
                        @elseif($diff < 6)
                            <!-- スタンプが一週間以内の場合 -->
                            <td>
                                <div class="ribbon19-wrapper">
                                    <div class="ribbon19-content">
                                        <span class="ribbon19">NEW</span>
                                    </div>
                                    <img src="{{ asset('images/stamp5.png') }}" alt="スタンプサンプル画像5">
                                </div>
                            </td>
                        @else
                            <!-- スタンプが一週間以上前の場合 -->
                            <td><img src="{{ asset('images/stamp5.png') }}" alt="スタンプサンプル画像5"></td>
                        @endif
                    @endfor
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th class="table-th-hiragana-space"></th>
                    <th>た</th>
                    <th>ち</th>
                    <th>つ</th>
                    <th>て</th>
                    <th>と</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="table-th-hiragana-space">たちつてと</th>
                    @for($i = 16; $i <= 20; $i++)
                        <!-- スタンプを押した時間と今の時間の差分を取得 -->
                        @php
                            $now_date = new DateTime('now'); 
                            $stamp_date = new DateTime($hiragana['hiragana'.$i]); 
                            $diff = $now_date->diff($stamp_date);
                            $diff = $diff->format('%a');
                        @endphp

                        @if(is_null($hiragana['hiragana'.$i])) 
                            <!-- スタンプが無い場合 -->
                            <td></td>
                        @elseif($diff < 6)
                            <!-- スタンプが一週間以内の場合 -->
                            <td>
                                <div class="ribbon19-wrapper">
                                    <div class="ribbon19-content">
                                        <span class="ribbon19">NEW</span>
                                    </div>
                                    <img src="{{ asset('images/stamp5.png') }}" alt="スタンプサンプル画像5">
                                </div>
                            </td>
                        @else
                            <!-- スタンプが一週間以上前の場合 -->
                            <td><img src="{{ asset('images/stamp5.png') }}" alt="スタンプサンプル画像5"></td>
                        @endif
                    @endfor
                </tr>

                <thead>
                    <tr>
                        <th class="table-th-hiragana-space"></th>
                        <th>な</th>
                        <th>に</th>
                        <th>ぬ</th>
                        <th>ね</th>
                        <th>の</th>

                    </tr>
                </thead>
            <tbody>
                <tr>
                    <th class="table-th-hiragana-space">なにぬねの</th>
                    @for($i = 21; $i <= 25; $i++)
                        <!-- スタンプを押した時間と今の時間の差分を取得 -->
                        @php
                            $now_date = new DateTime('now'); 
                            $stamp_date = new DateTime($hiragana['hiragana'.$i]); 
                            $diff = $now_date->diff($stamp_date);
                            $diff = $diff->format('%a');
                        @endphp

                        @if(is_null($hiragana['hiragana'.$i])) 
                            <!-- スタンプが無い場合 -->
                            <td></td>
                        @elseif($diff < 6)
                            <!-- スタンプが一週間以内の場合 -->
                            <td>
                                <div class="ribbon19-wrapper">
                                    <div class="ribbon19-content">
                                        <span class="ribbon19">NEW</span>
                                    </div>
                                    <img src="{{ asset('images/stamp5.png') }}" alt="スタンプサンプル画像5">
                                </div>
                            </td>
                        @else
                            <!-- スタンプが一週間以上前の場合 -->
                            <td><img src="{{ asset('images/stamp5.png') }}" alt="スタンプサンプル画像5"></td>
                        @endif
                    @endfor
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th class="table-th-hiragana-space"></th>
                    <th>は</th>
                    <th>ひ</th>
                    <th>ふ</th>
                    <th>へ</th>
                    <th>ほ</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="table-th-hiragana-space">はひふへほ</th>
                    @for($i = 26; $i <= 30; $i++)
                        <!-- スタンプを押した時間と今の時間の差分を取得 -->
                        @php
                            $now_date = new DateTime('now'); 
                            $stamp_date = new DateTime($hiragana['hiragana'.$i]); 
                            $diff = $now_date->diff($stamp_date);
                            $diff = $diff->format('%a');
                        @endphp

                        @if(is_null($hiragana['hiragana'.$i])) 
                            <!-- スタンプが無い場合 -->
                            <td></td>
                        @elseif($diff < 6)
                            <!-- スタンプが一週間以内の場合 -->
                            <td>
                                <div class="ribbon19-wrapper">
                                    <div class="ribbon19-content">
                                        <span class="ribbon19">NEW</span>
                                    </div>
                                    <img src="{{ asset('images/stamp5.png') }}" alt="スタンプサンプル画像5">
                                </div>
                            </td>
                        @else
                            <!-- スタンプが一週間以上前の場合 -->
                            <td><img src="{{ asset('images/stamp5.png') }}" alt="スタンプサンプル画像5"></td>
                        @endif
                    @endfor
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th class="table-th-hiragana-space"></th>
                    <th>ま</th>
                    <th>み</th>
                    <th>む</th>
                    <th>め</th>
                    <th>も</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="table-th-hiragana-space">まみむめも</th>
                    @for($i = 31; $i <= 35; $i++)
                        <!-- スタンプを押した時間と今の時間の差分を取得 -->
                        @php
                            $now_date = new DateTime('now'); 
                            $stamp_date = new DateTime($hiragana['hiragana'.$i]); 
                            $diff = $now_date->diff($stamp_date);
                            $diff = $diff->format('%a');
                        @endphp

                        @if(is_null($hiragana['hiragana'.$i])) 
                            <!-- スタンプが無い場合 -->
                            <td></td>
                        @elseif($diff < 6)
                            <!-- スタンプが一週間以内の場合 -->
                            <td>
                                <div class="ribbon19-wrapper">
                                    <div class="ribbon19-content">
                                        <span class="ribbon19">NEW</span>
                                    </div>
                                    <img src="{{ asset('images/stamp5.png') }}" alt="スタンプサンプル画像5">
                                </div>
                            </td>
                        @else
                            <!-- スタンプが一週間以上前の場合 -->
                            <td><img src="{{ asset('images/stamp5.png') }}" alt="スタンプサンプル画像5"></td>
                        @endif
                    @endfor
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th class="table-th-hiragana-space"></th>
                    <th>や</th>
                    <th>ゆ</th>
                    <th>よ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="table-th-hiragana-space">やゆよ</th>
                    @for($i = 36; $i <= 38; $i++)
                        <!-- スタンプを押した時間と今の時間の差分を取得 -->
                        @php
                            $now_date = new DateTime('now'); 
                            $stamp_date = new DateTime($hiragana['hiragana'.$i]); 
                            $diff = $now_date->diff($stamp_date);
                            $diff = $diff->format('%a');
                        @endphp

                        @if(is_null($hiragana['hiragana'.$i])) 
                            <!-- スタンプが無い場合 -->
                            <td></td>
                        @elseif($diff < 6)
                            <!-- スタンプが一週間以内の場合 -->
                            <td>
                                <div class="ribbon19-wrapper">
                                    <div class="ribbon19-content">
                                        <span class="ribbon19">NEW</span>
                                    </div>
                                    <img src="{{ asset('images/stamp5.png') }}" alt="スタンプサンプル画像5">
                                </div>
                            </td>
                        @else
                            <!-- スタンプが一週間以上前の場合 -->
                            <td><img src="{{ asset('images/stamp5.png') }}" alt="スタンプサンプル画像5"></td>
                        @endif
                    @endfor
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th class="table-th-hiragana-space"></th>
                    <th>ら</th>
                    <th>り</th>
                    <th>る</th>
                    <th>れ</th>
                    <th>ろ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="table-th-hiragana-space">らりるれろ</th>
                    @for($i = 39; $i <= 43 ; $i++)
                        <!-- スタンプを押した時間と今の時間の差分を取得 -->
                        @php
                            $now_date = new DateTime('now'); 
                            $stamp_date = new DateTime($hiragana['hiragana'.$i]); 
                            $diff = $now_date->diff($stamp_date);
                            $diff = $diff->format('%a');
                        @endphp

                        @if(is_null($hiragana['hiragana'.$i])) 
                            <!-- スタンプが無い場合 -->
                            <td></td>
                        @elseif($diff < 6)
                            <!-- スタンプが一週間以内の場合 -->
                            <td>
                                <div class="ribbon19-wrapper">
                                    <div class="ribbon19-content">
                                        <span class="ribbon19">NEW</span>
                                    </div>
                                    <img src="{{ asset('images/stamp5.png') }}" alt="スタンプサンプル画像5">
                                </div>
                            </td>
                        @else
                            <!-- スタンプが一週間以上前の場合 -->
                            <td><img src="{{ asset('images/stamp5.png') }}" alt="スタンプサンプル画像5"></td>
                        @endif
                    @endfor
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th class="table-th-hiragana-space"></th>
                    <th>わ</th>
                    <th>を</th>
                    <th>ん</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="table-th-hiragana-space">わをん</th>
                    @for($i = 44; $i <= 46; $i++)
                        <!-- スタンプを押した時間と今の時間の差分を取得 -->
                        @php
                            $now_date = new DateTime('now'); 
                            $stamp_date = new DateTime($hiragana['hiragana'.$i]); 
                            $diff = $now_date->diff($stamp_date);
                            $diff = $diff->format('%a');
                        @endphp

                        @if(is_null($hiragana['hiragana'.$i])) 
                            <!-- スタンプが無い場合 -->
                            <td></td>
                        @elseif($diff < 6)
                            <!-- スタンプが一週間以内の場合 -->
                            <td>
                                <div class="ribbon19-wrapper">
                                    <div class="ribbon19-content">
                                        <span class="ribbon19">NEW</span>
                                    </div>
                                    <img src="{{ asset('images/stamp5.png') }}" alt="スタンプサンプル画像5">
                                </div>
                            </td>
                        @else
                            <!-- スタンプが一週間以上前の場合 -->
                            <td><img src="{{ asset('images/stamp5.png') }}" alt="スタンプサンプル画像5"></td>
                        @endif
                    @endfor
                </tr>
            </tbody>
        </table>

        <div class="stampimgline">
            <img src="{{ asset('images/stamp6.png') }}" alt="スタンプサンプル画像6">
        </div>

        <!-- 数字 -->
        <table class="osare5-table col5t">
            <thead>
                <tr>
                    <th></th>
                    <th>0</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="table-th-hiragana">すうじ</th>
                    @for($i = 0; $i <= 9 ; $i++)
                        <!-- スタンプを押した時間と今の時間の差分を取得 -->
                        @php
                            $now_date = new DateTime('now'); 
                            $stamp_date = new DateTime($suzi['suzi'.$i]); 
                            $diff = $now_date->diff($stamp_date);
                            $diff = $diff->format('%a');
                        @endphp

                        @if(is_null($suzi['suzi'.$i])) 
                            <!-- スタンプが無い場合 -->
                            <td></td>
                        @elseif($diff < 6)
                            <!-- スタンプが一週間以内の場合 -->
                            <td>
                                <div class="ribbon19-wrapper">
                                    <div class="ribbon19-content">
                                        <span class="ribbon19">NEW</span>
                                    </div>
                                    <img src="{{ asset('images/stamp5.png') }}" alt="スタンプサンプル画像5">
                                </div>
                            </td>
                        @else
                            <!-- スタンプが一週間以上前の場合 -->
                            <td><img src="{{ asset('images/stamp5.png') }}" alt="スタンプサンプル画像5"></td>
                        @endif
                    @endfor
                </tr>
            </tbody>

        </table>
        <div class="stampimgline">
            <img src="{{ asset('images/stamp6.png') }}" alt="スタンプサンプル画像6">
        </div>

        <!-- 運筆 -->
        <table class="osare5-table col5t">
            <thead>
                <tr>
                    <th></th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="table-th-hiragana">うんぴつ</th>    
                    @for($i = 1; $i <= 10 ; $i++)
                        <!-- スタンプを押した時間と今の時間の差分を取得 -->
                        @php
                            $now_date = new DateTime('now'); 
                            $stamp_date = new DateTime($unpitu['unpitu'.$i]); 
                            $diff = $now_date->diff($stamp_date);
                            $diff = $diff->format('%a');
                        @endphp

                        @if(is_null($unpitu['unpitu'.$i])) 
                            <!-- スタンプが無い場合 -->
                            <td></td>
                        @elseif($diff < 6)
                            <!-- スタンプが一週間以内の場合 -->
                            <td>
                                <div class="ribbon19-wrapper">
                                    <div class="ribbon19-content">
                                        <span class="ribbon19">NEW</span>
                                    </div>
                                    <img src="{{ asset('images/stamp5.png') }}" alt="スタンプサンプル画像5">
                                </div>
                            </td>
                        @else
                            <!-- スタンプが一週間以上前の場合 -->
                            <td><img src="{{ asset('images/stamp5.png') }}" alt="スタンプサンプル画像5"></td>
                        @endif
                    @endfor
                </tr>
            </tbody>
        </table>

        <div class="stampimgline">
            <img src="{{ asset('images/stamp6.png') }}" alt="スタンプサンプル画像6">
        </div>

        <!-- 点つなぎ -->
        <table class="osare5-table col5t">
            <thead>
                <tr>
                    <th></th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="table-th-hiragana">てんつなぎ</th>
                    @for($i = 1; $i <= 10 ; $i++)
                        <!-- スタンプを押した時間と今の時間の差分を取得 -->
                        @php
                            $now_date = new DateTime('now'); 
                            $stamp_date = new DateTime($tentunagi['tentunagi'.$i]); 
                            $diff = $now_date->diff($stamp_date);
                            $diff = $diff->format('%a');
                        @endphp

                        @if(is_null($tentunagi['tentunagi'.$i])) 
                            <!-- スタンプが無い場合 -->
                            <td></td>
                        @elseif($diff < 6)
                            <!-- スタンプが一週間以内の場合 -->
                            <td>
                                <div class="ribbon19-wrapper">
                                    <div class="ribbon19-content">
                                        <span class="ribbon19">NEW</span>
                                    </div>
                                    <img src="{{ asset('images/stamp5.png') }}" alt="スタンプサンプル画像5">
                                </div>
                            </td>
                        @else
                            <!-- スタンプが一週間以上前の場合 -->
                            <td><img src="{{ asset('images/stamp5.png') }}" alt="スタンプサンプル画像5"></td>
                        @endif
                    @endfor
                </tr>
            </tbody>
        </table>

        <div class="stampimgline">
            <img src="{{ asset('images/stamp6.png') }}" alt="スタンプサンプル画像6">
        </div>

        <!-- プログラミング -->
        <table class="osare5-table col5t">
            <thead>
                <tr>
                    <th></th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="table-th-hiragana">プログラミング</th>
                    @for($i = 1; $i <= 10 ; $i++)
                        <!-- スタンプを押した時間と今の時間の差分を取得 -->
                        @php
                            $now_date = new DateTime('now'); 
                            $stamp_date = new DateTime($programming['programming'.$i]); 
                            $diff = $now_date->diff($stamp_date);
                            $diff = $diff->format('%a');
                        @endphp

                        @if(is_null($programming['programming'.$i])) 
                            <!-- スタンプが無い場合 -->
                            <td></td>
                        @elseif($diff < 6)
                            <!-- スタンプが一週間以内の場合 -->
                            <td>
                                <div class="ribbon19-wrapper">
                                    <div class="ribbon19-content">
                                        <span class="ribbon19">NEW</span>
                                    </div>
                                    <img src="{{ asset('images/stamp5.png') }}" alt="スタンプサンプル画像5">
                                </div>
                            </td>
                        @else
                            <!-- スタンプが一週間以上前の場合 -->
                            <td><img src="{{ asset('images/stamp5.png') }}" alt="スタンプサンプル画像5"></td>
                        @endif
                    @endfor
                </tr>
                <thead>
                    <tr>
                        <th></th>
                        <th>11</th>
                        <th>12</th>
                        <th>13</th>
                        <th>14</th>
                        <th>15</th>
                        <th>16</th>
                        <th>17</th>
                        <th>18</th>
                        <th>19</th>
                        <th>20</th>
                    </tr>
                </thead>
            <tbody>
                <tr>
                    <th class="table-th-hiraganaspace">-</th>
                    @for($i = 11; $i <= 20 ; $i++)
                        <!-- スタンプを押した時間と今の時間の差分を取得 -->
                        @php
                            $now_date = new DateTime('now'); 
                            $stamp_date = new DateTime($programming['programming'.$i]); 
                            $diff = $now_date->diff($stamp_date);
                            $diff = $diff->format('%a');
                        @endphp

                        @if(is_null($programming['programming'.$i])) 
                            <!-- スタンプが無い場合 -->
                            <td></td>
                        @elseif($diff < 6)
                            <!-- スタンプが一週間以内の場合 -->
                            <td>
                                <div class="ribbon19-wrapper">
                                    <div class="ribbon19-content">
                                        <span class="ribbon19">NEW</span>
                                    </div>
                                    <img src="{{ asset('images/stamp5.png') }}" alt="スタンプサンプル画像5">
                                </div>
                            </td>
                        @else
                            <!-- スタンプが一週間以上前の場合 -->
                            <td><img src="{{ asset('images/stamp5.png') }}" alt="スタンプサンプル画像5"></td>
                        @endif
                    @endfor
                </tr>
            </tbody>
        </table>
    </section>

</div>
<!--/#contents-->
@endsection