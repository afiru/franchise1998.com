<section class="secFomrCnt">
    <h2 class="d_flex j_start ali_center bg_F1ECE8 cl_453C3C fw_500 h2SecFomrCnt">お客様情報</h2>
    <ul class="ulFormCnt">
        <li class="d_flex j_between row liFormCnt">
            <h3 class="cl_453C3C txtset fw_500 h3FormCnt">お名前<span class="cl_F04E11">＊</span></h3>
            <div class="inputLiFormCntLxn">
                [mwform_text name="お名前" id="name" class="inputW100" size="60" maxlength="255" placeholder="例）田中花子"]
            </div>
        </li>
        <li class="d_flex j_between row liFormCnt">
            <h3 class="cl_453C3C txtset fw_500 h3FormCnt">フリガナ<span class="cl_F04E11">＊</span></h3>
            <div class="inputLiFormCntLxn">
                [mwform_text name="フリガナ" id="name" class="inputW100" size="60" maxlength="255" placeholder="例）タナカハナコ"]
            </div>
        </li>
        <li class="d_flex j_between row liFormCnt">
            <h3 class="cl_453C3C txtset fw_500 h3FormCnt">メールアドレス<span class="cl_F04E11">＊</span></h3>
            <div class="inputLiFormCntLxn">
                [mwform_email name="メールアドレス" id="mail" class="inputW100" size="60" maxlength="255" placeholder="例）tanakahanako@franchise.jp"]
            </div>
        </li>
        <li class="d_flex j_between row liFormCnt">
            <h3 class="cl_453C3C txtset fw_500 h3FormCnt">お電話番号</h3>
            <div class="inputLiFormCntLxn">
                [mwform_text name="お電話番号" id="tel" class="inputW100" size="60" maxlength="255" placeholder="例）09000000000"]
            </div>
        </li>
    </ul>
</section>

<section class="secFomrCnt secFomrCnt02">
    <h2 class="d_flex j_start ali_center bg_F1ECE8 cl_453C3C fw_500 h2SecFomrCnt">お問い合わせ内容</h2>
    <ul class="ulFormCnt">
        <li class="d_flex j_between row liFormCnt">
            <h3 class="cl_453C3C txtset fw_500 h3FormCnt">お問い合わせ区分<span class="cl_F04E11">＊</span></h3>
            <div class="inputLiFormCntLxn">
                <div class="checkWap">
                    [mwform_radio name="お問い合わせ区分" id="checkcontct" class="d_flex j_start row kaku fw_500 checkcontct jscheckcontct" children="通常のお問い合わせ,大量注文のお問い合わせ（30セット以上）"]
                </div>
                <p class="cl_6C6262 fw_400 txtset txtLiFormCntLxn">
                    ※大量注文は30セット以上から承っております。※内容によりお時間をいただく場合がございます。
                </p>
            </div>
        </li>
    </ul>
</section>

<section class="secFomrCnt secFomrCnt02 jstujouContact">
    <h2 class="d_flex j_start ali_center bg_F1ECE8 cl_453C3C fw_500 h2SecFomrCnt">通常のお問い合わせ</h2>
    <ul class="ulFormCnt">
        <li class="d_flex j_between row liFormCnt">
            <h3 class="cl_453C3C txtset fw_500 h3FormCnt">お問い合わせ内容<span class="cl_F04E11">＊</span></h3>
            <div class="inputLiFormCntLxn">
                [mwform_textarea name="通常お問い合わせ内容" id="cntTujou" class="txtW100" cols="50" rows="5" placeholder="お問い合わせ内容をご記入ください。"]
            </div>
        </li>
        <li class="d_flex j_between row liFormCnt">
            <h3 class="cl_453C3C txtset fw_500 h3FormCnt">個人情報保護方針<span class="cl_F04E11">＊</span></h3>
            <div class="inputLiFormCntLxn">
                <div class="d_flex j_start tujoCheckWap">
                    <div class="tujoCheckLx">
                        [mwform_radio name="通常個人情報保護方針" id="checkcontct" class="d_flex j_start row kaku fw_500 checkcontct jscheckcontct" children="同意する"]
                    </div>
                    <p class="cl_6C6262 fw_400 txtset txtTujoCheckWap">
                        <a href="https://selvice.co.jp/corporate/company-policy/privacy01/" target="_blank">【個人情報保護方針】</a>
                    </p>
                </div>
            </div>
        </li>
    </ul>
</section>

<section class="secFomrCnt secFomrCnt02 jsTairyoContact">
    <h2 class="d_flex j_start ali_center bg_F1ECE8 cl_453C3C fw_500 h2SecFomrCnt">大量注文のお問い合わせ</h2>
    <ul class="ulFormCnt">
        <li class="d_flex j_between row liFormCnt">
            <h3 class="cl_453C3C txtset fw_500 h3FormCnt">社名・学校名<span class="cl_F04E11">＊</span></h3>
            <div class="inputLiFormCntLxn">
                [mwform_text name="社名・学校名" id="syamei" class="inputW100" size="60" maxlength="255" placeholder="例）株式会社セルビス"]
            </div>
        </li>
        <li class="d_flex j_between row liFormCnt">
            <h3 class="cl_453C3C txtset fw_500 h3FormCnt">ご使用用途<span class="cl_F04E11">＊</span></h3>
            <div class="inputLiFormCntLxn">
                [mwform_text name="ご使用用途" id="yoto" class="inputW100" size="60" maxlength="255" placeholder="例）イベントの景品"]
            </div>
        </li>
        <li class="d_flex j_between row liFormCnt">
            <h3 class="cl_453C3C txtset fw_500 h3FormCnt">ご希望個数<span class="cl_F04E11">＊</span></h3>
            <div class="inputLiFormCntLxn">
                [mwform_text name="ご希望個数" id="kibokosuu" class="inputW100" size="60" maxlength="255" placeholder="例）000個"]
            </div>
        </li>
        <li class="d_flex j_between row liFormCnt">
            <h3 class="cl_453C3C txtset fw_500 h3FormCnt">ご希望納期<span class="cl_F04E11">＊</span></h3>
            <div class="inputLiFormCntLxn">
                [mwform_text name="ご希望納期" id="yoto" class="inputW100" size="60" maxlength="255" placeholder="例）2025年00月00日00時頃"]
            </div>
        </li>

        <li class="d_flex j_between row liFormCnt">
            <h3 class="cl_453C3C txtset fw_500 h3FormCnt">その他要望等<span class="cl_F04E11">＊</span></h3>
            <div class="inputLiFormCntLxn">
                [mwform_textarea name="その他要望等" id="etcYobo" class="txtW100" cols="50" rows="5" placeholder="ご要望がございましたら、ご記入ください。"]
            </div>
        </li>
        <li class="d_flex j_between row liFormCnt">
            <h3 class="cl_453C3C txtset fw_500 h3FormCnt">個人情報保護方針<span class="cl_F04E11">＊</span></h3>
            <div class="inputLiFormCntLxn">
                <div class="d_flex j_start tujoCheckWap">
                    <div class="tujoCheckLx">
                        [mwform_radio name="大量個人情報保護方針" id="checkcontct" class="d_flex j_start row kaku fw_500 checkcontct jscheckcontct" children="同意する"]
                    </div>
                    <p class="cl_6C6262 fw_400 txtset txtTujoCheckWap">
                        <a href="https://selvice.co.jp/corporate/company-policy/privacy01/" target="_blank">【個人情報保護方針】</a>
                    </p>
                </div>
            </div>
        </li>
    </ul>
</section>


<p class="t_center cl_6C6262 fw_400 txtset lastTxtContact">
    ※迷惑メール対策等でドメイン指定受信を設定されている場合、メールでのご連絡が届かないことがございます。<br>【@franchise1998.com】からのメールを受信できるように設定していただくか、パソコン用のメールアドレスを入力してください。
</p>

<div class="pore btnToConfirmLxn">
    [mwform_bconfirm class="d_flex j_center ali_center bg_F28962 fw_500 cl_fff kaku btnToConfirm" value="confirm"]入力内容を確認する[/mwform_bconfirm]
</div>
<div class="toThankBackLxn">
    <ul class="d_flex j_between ali_center row toThankBackFx">
        <li class="btnBackLxn">
            [mwform_bback class="d_flex j_center ali_center bg_fff brd_F28962 fw_500 cl_F28962 kaku btnBack" value="back"]入力内容を修正する[/mwform_bback]
        </li>
        <li class="btnToThanksLxn">
            [mwform_bsubmit name="送信する" class="d_flex j_center ali_center bg_F28962 fw_500 cl_fff kaku btnToThanks" value="send"]送信する[/mwform_bsubmit]
        </li>
    </ul>
</div>