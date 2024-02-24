# Rese
勤怠管理アプリ
![Rese_top.png](Rese.top.png)

## 作成した目的
外部の飲食店予約サービスは手数料を取られるので自社で予約サービスを持ちたい。

## アプリケーションURL
http://localhost/

## 機能一覧
ログイン/ログアウト機能
会員登録機能
飲食店予約機能
飲食店検索機能
飲食店お気に入り追加/削除機能

## 使用技術
- PHP 8.0
- Laravel 8.x
- MySQL 8.0

## テーブル設計
![Rese.table.png](Rese.table.png)

## ER図
![Rese_ER.png](Rese.ER.png)

## 環境構築
1. docker-compose exec php bash
2. composer install
3. .env.exampleファイルから.envを作成し、環境変数を変更
4. php artisan key:generate
5. php artisan migrate

## 備考
