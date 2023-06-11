<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="末谷尚希の自己紹介">
    <link rel="stylesheet" href="./css/style.css">
    <title>ポートフォリオ</title>
</head>

<body>
    <header>
        <h1 class="block-header">
            <a href="">
                <span class="color-green">p</span>ortfolio
            </a>
        </h1>
    </header>

    <div class="block-main">
        <div class="box-profile">
            <h2 class="sub-title"><span class="color-green">p</span>rofile</h2>
            <div class="item-list">
                <img src="./img/証明写真.jpg" alt="プロフィール画像" width="200px">
                <b>末谷尚希</b>
                <p class="color-green">HTML / CSS / PHP /JavaScript / MySQL / Laravel / Figma</p>
                <p>岐阜県養老町に住んでいます。23歳です。<br>プログラミングスクールのテックアイエスでプログラミング約6ヶ月学びました。<br>
                    Web系言語をメインに、フロンドエンド、バックエンドの開発に必要なスキルやサーバー構築に関するスキルを身に着けました。<br>
                    Twitterに類似したシステムを作成したり、チーム開発も行いました。<br>
                    自主制作では自社のアイス商品を管理するシステムを作成しました。
                </p>
            </div>
            <ul class="icon-list">
                <li>
                    <a href="https://github.com/ssoranaoki">
                        <img src="./img/github.png" alt="GitHubのアイコン">
                    </a>
                </li>
            </ul>
        </div>
        <div class="box-works">
            <h2 class="sub-title">自主制作作品</h2>
            <ul class="works-list">
                <li>
                    <img src="./img/task.png" alt="Twitterクローンの画像">
                    <h3>アイス商品管理システム</h3>
                    <span class="color-green">HTML / CSS / PHP / JavaScript / Laravel / AdminLTE /MySQL</span>
                    <p>自社のアイス商品を管理するシステムです。<br>
                        このシステムにはログイン機能、商品登録・編集・削除機能、検索機能、画像投稿機能、画像プレビュー機能などを組み込みました。<br>
                        管理者アカウントに権限を与えて管理者アカウントは全てのページ、機能にアクセスできます。管理者じゃないアカウントは限られたページ、機能しかアクセスできないようにして画面の表示内容も少し変えてあります。
                    </p>
                    <div class="link">
                        <a href="https://personal-task.herokuapp.com/login">webサイト</a>
                        <a href="https://github.com/ssoranaoki/personal-task">Github</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>
