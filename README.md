# hello-mecab

Composer を使って https://github.com/ateliee/mecab をインストールするチュートリアル

## 対象

Mac ユーザー, PHP を使っている, まだ Composer を使ったことがない  
(Windowsでも使えると思います)

## Composer のダウンロード

PHP を使って、あなたのマシンに Composer をダウンロードします

https://getcomposer.org/download/

上のリンクを開いて、コマンドをコピーし、あなたの Mac でターミナルに貼り付けして、実行してください

> 全て終わったら、 `php composer.phar` というコマンドを実行して、ダウンロードされたことを確認します

## Composer をグローバルに設定する

ターミナル上でどのディレクトリにいても `composer` コマンドを使えるようにします

https://getcomposer.org/doc/00-intro.md#globally

上のリンクを開いて、コマンドをコピーし、あなたの Mac でターミナルに貼り付けて、実行してください

> 全て終わったら、 `composer` というコマンドを実行して、先ほどと同じ結果になることを確認します

## Composer のセットアップ（プロジェクト毎）

あなたの今作っているアプリの中で Composer を使えるように、初期設定を行います  
この操作は今後あなたが別の PHP プロジェクトを作るたびに必要になります  
初期設定というのは具体的には、 `composer.json` を作成することです  

では、ターミナルであなたが今作っているアプリのルートディレクトリに移動して、 `composer init` コマンドを実行してください

すると、あなたのプロジェクトについて、いくつか質問されるので、適当に答えていきます  
（ここで設定したことは全て `composer.json` に吐き出されるだけなので、いつでも変更できます）

> 全て終わったら、 `(あなたのアプリへのパス)/composer.json` が作られていることを確認します

## パッケージをインストール

パッケージ `ateliee/mecab` をあなたのプロジェクトにインストールします  
インストールとは具体的には Packagist というサイトにアップロードされている ateliee/mecab をあなたのプロジェクトにコピーすることです  
> 参考 Packagist
> https://packagist.org/search/?q=mecab

では、ターミナルで `composer require ateliee/mecab:dev-master` コマンドを実行してください

すると、ただちにダウンロードが始まり、 `vendor` というディレクトリと、 `package.lock` というファイルが作成されます  
また、 `package.json` の中身が書き換わっています

## パッケージを PHP から実際に使ってみる

https://github.com/teramotodaiki/hello-mecab/blob/master/index.php

まず、上のファイルの内容をそのままコピーし、あたらしく `index.php` を作成してください

次に、ターミナルで `php index.php` を実行してください

> 正しくコードが実行されていることを確認してください

## 解説

### Composer

Composer は PHP のために、 PHP で作られたパッケージ管理ツールです  
Yum や Apt とは違い、プロジェクトごとにパッケージをインストールできます

Yum: マシンの決められた場所にダウンロードする
Composer: コマンドを実行した場所の `vendor` ディレクトリにダウンロードする

> 引用
> Composer is not a package manager in the same sense as Yum or Apt are. Yes, it deals with "packages" or libraries, but it manages them on a per-project basis, installing them in a directory (e.g. vendor) inside your project. By default it does not install anything globally. Thus, it is a dependency manager. It does however support a "global" project for convenience via the global command.
> https://getcomposer.org/doc/00-intro.md#dependency-management

### index.php の中身

- `require 'vendor/autoload.php';`

この１行で、 Composer がインストールしてきた PHP を一括して require します  
`vendor/autoload.php` の中身を見てみたらピンとくるかも

- `use meCab\meCab;`

`meCab` という名前空間の `meCab` クラスを使うことを宣言します

- `$mecab = new meCab();`

`meCab` クラスのインスタンスを作り、 `$mecab` 変数に代入します

## この後のこと

どんな関数があるのかは僕もよく知りません。ソースをみて関数名を調べて、色々試すのが良さそうです

https://github.com/ateliee/mecab/blob/master/src/meCab.php



以上です。お疲れ様でした







