# Quanlynhanvien
PHP (PDO) と MySQL を使用した、シンプルかつ効率的な従業員管理システムです。このプロジェクトは、基本的な CRUD 操作、ユーザー認証、および部署/役職管理をカバーしています。

🚀 プロジェクトの目的
このプロジェクトは、以下の機能を習得するために設計されています。

PHP PDO を使用した安全な MySQL 接続

ユーザー認証とセッション管理

ページネーションとデータ検索の実装

MVC / DAO モデルに基づくディレクトリ構造の構築

🛠 技術スタック
Language: PHP 8.x

Database: MySQL (PDO 接続)

Frontend: HTML5, CSS3, Bootstrap 5.3

Security: Password Hashing (password_hash), Session Management

📋 実装状況 (Task List)
1. 基本基盤
[x] ホームページの作成

[x] MySQL データベースとの接続 (PDO)

[x] ログイン・ログアウト機能 (SESSION)

[x] 未ログインユーザーの管理者ページアクセス制限

[x] ログイン中のユーザー名の UI 表示

2. データ管理 (Employee, Department, Position)
[x] データの全件表示

[x] ページネーション (Pagination)

[ ] 名前によるデータ検索

[ ] 新規データの追加機能

3. 詳細・編集・削除
[ ] 情報の編集 (Edit)

[ ] 情報の削除 (Delete)

[ ] プロフィール画像のアップロード (従業員のみ)

[ ] 部署・役職詳細画面での所属従業員一覧表示

4. セキュリティ・高度な機能
[ ] パスワード変更 (旧パスワード確認 & メール認証)

[ ] パスワードを忘れた場合のメール認証による再設定

[ ] クッキー (Cookie) を利用したログイン状態の保持

[x] EmployeeID の自動採番 (Auto Increment)

[ ] フォームでのドロップダウン (Dropdown) 選択

