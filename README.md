# Instagram Graph API を使用してフィードを表示する

InstagramのGraphAPIを用いて投稿一覧をサイト内に表示します。  
PHPが動作するサーバーが必要です。

ここでは実際にフィードを表示するまでの手順と、このリポジトリの構成を説明します。

## 表示までの手順

表示サンプルはこちら [https://test.stella-create.co.jp/instagram-graph-api/](https://test.stella-create.co.jp/instagram-graph-api/)

1. [https://bravo-web.com/news/instagram-graph-api](https://bravo-web.com/news/instagram-graph-api) でアクセストークンと
InstagramビジネスアカウントID を取得する 。

2. [https://github.com/hiroghap1/instagram-graph-api](https://github.com/hiroghap1/instagram-graph-api) にアクセスして「get-feed.php」と「api-setting-sample.php」と「js/get-json.js」をダウンロードする。

3. 「api-setting-sample.php」に1で取得したトークンを入力し、「api-setting.php」にファイル名を変更する。

4. HTMLファイル内で「get-json.js」を呼び出すと、「id="instagram-feed"」内の要素に投稿が表示される。

## このリポジトリの構成

get-json.jsからget-feed.phpへ非同期通信し、get-feed.phpがGraphAPIからJSONデータを取得、get-json.jsがJSONデータを受け取って表示しています。  
※SSL通信が必要なので、ローカル環境の設定に注意してください。

CSSはBootStrap 5、追加のCSSはDart Sassを使用しています。

## サンプルページについて

mainブランチが更新されたら、GitHub Actionsでエックスサーバー上にパブリッシュしています。
