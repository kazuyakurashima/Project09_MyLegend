課題内容（どんな作品か）
Hero Chronicle 2は、キャラクターを作成・登録できるアプリケーションです。作成したキャラクターは編集や削除が可能で、その後、ショップ機能を利用してアイテムを購入し、購入したアイテムをキャラクターに装備させることができます。

DEMO
現在準備中です。

アプリケーション用のIDまたはPassword（必要な場合）
ID: 今回はなし
PW: 今回はなし
工夫した点・こだわった点
学んだこと
共通の処理を関数化し、コードの再利用性と管理のしやすさを向上させました。
工夫したポイント
関数をフォルダで整理

データベース接続処理の関数化
データベース接続処理を関数化し、再利用性を高めるために独立したファイルに配置。
XSS対策用のエスケープ関数の作成
セキュリティ向上のため、エスケープ処理を関数として実装し、独立したファイルとして管理。
関数フォルダの作成
functions フォルダを作成し、各種関数ファイルを一元管理しました。
SQL処理の関数化
データベース操作を関数化し、コードの可読性と保守性を向上。
セッション機能の活用

前回の課題と連携し、セッションを使用してデータの受け渡しを実現しました。
難しかった点・次回トライしたいこと
苦労した点
ファイルが多くなり管理が大変
ファイル数が増えることで、管理が煩雑になり、バグの発生率が増加しました。
次回トライしたいこと
データベース管理の拡張

前回の課題で扱った項目をデータベースで一元管理するように改善予定。
ファイル構造の整理

増え続けるファイルに対応し、可読性と保守性を向上させるための構造変更を検討します。
質問・感想
感想
Progateで学んだSQLの基礎をアプリ開発で活用することで、理解が深まりました。
一見シンプルな操作にも多くの工夫や実装が必要で、プログラミングの奥深さを実感しました。
