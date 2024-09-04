<img src="https://github.com/user-attachments/assets/56d7f82c-1afc-4058-b077-c1c14999bc72" width="500px" height="500px">

# inspecting disire　月額課金管理アプリ
# 概要
現代社会では、IT技術の進歩により生活は（）
| 開発環境 | Docker |
| CI/CD |GitHub Actions |
| デザイン |draw.io |
| etc | Git, GitHub, Gemini 1.5 Flash  |

# 機能一覧
| ログイン画面 | 
|:----------:|
| <img src="https://github.com/user-attachments/assets/7bb7281e-af5c-48d8-8d60-2f75474f1fe5" style="width:100%; "> | 
| テストユーザーを作成しています下記メールアドレス、パスワードで気軽にアプリをご利用いただけます。ログイン成功したらトップページへリダイレクト。 |
| テストユーザーメール elephant_in_forest_1173@outlook.jp |
| テストユーザーパスワード testuser|

| アカウント画面 | 
|:----------:|
| <img src="https://github.com/user-attachments/assets/992303fe-f088-4f86-9c50-32acbcc5f27e" style="width:100%; "> | 
| アカウント登録ボタンをクリックして 名前、email、パスワードを記入していただいたらアカウント登録完了。トップページへリダイレクト |

| トップページ画面 | 
|:----------:|
| <img src="https://github.com/user-attachments/assets/fc2b3b50-a17f-4917-b5f8-5c499520690a" style="width:100%; "> | 
|　赤いclick hereボタンをクリックしてサブスクリプション登録画面に！　他にも登録したサブスクリプションの一覧がトップページで表示されます。 |

| サブスクリプションの登録 | 
|:----------:|
| <img src="https://github.com/user-attachments/assets/9b231801-925d-4b83-8ab8-1332a05beb07" style="width:100%; "> | 
|サブスクリプション名、月額料金、課金日、サブスクリプションサービスの内容、URLを記入しsubmitボタンをクリックして登録完了。|
| 複数の部屋登録 | 
|:----------:|
| <img src="https://github.com/user-attachments/assets/37c273a3-d408-4072-b25a-8341eda65aee" style="width:100%; "> | 
|前ページボタン、次ページボタンを押せば複数の部屋を選択可能。 |


| アイテム登録 | 
|:----------:|
| <img src="https://github.com/user-attachments/assets/80d85066-4ce2-4748-a515-03757a171045" style="width:100%; "> | 
|アイテム登録ボタンを押して画像ファイルとアイテムに対してコメントがあれば記入して送信。数秒まつと画面右上にアイテムオブジェクトが出現するのでそれをドラッグして画面上の保管している場所にドロップしてアイテム登録完了。画面左側にアイテムリストが出て部屋に登録してあるアイテムを確認する事ができます。 |


| アイテム編集 | 
|:----------:|
| <img src="https://github.com/user-attachments/assets/8a76da09-dc8f-4b8c-876e-0305a2a2b768" style="width:100%; "> | 
|編集したいアイテムの画像をクリックして編集ページに移動する。編集ページ内の項目を変更して更新ボタンを押して編集完了|


| アイテムのアニメーション処理 | 
|:----------:|
| <img src="https://github.com/user-attachments/assets/fa47e10b-45da-4429-a3b8-cf0389ad5ec1" style="width:100%; "> | 
|左リストにあるアイテムを押すと画面上にあるアイテムが点滅するアニメーションが始まります。それでリストのアイテムの場所が確認できるようになっています。 |


| アイテムを削除| 
|:----------:|
| <img src="https://github.com/user-attachments/assets/54b94e31-b6c1-454b-8a28-89ae55c455dd" style="width:100%; "> | 
|左下のゴミ箱アイコンにアイテムをドロップするとアイテムの削除|

| アイテムを検索| 
|:----------:|
| <img src="https://github.com/user-attachments/assets/8d2a4763-fead-480a-a1b5-19e86c914d0f" style="width:100%; "> | 
|上部検索バーにアイテム名を入力したらユーザーが登録していアイテムがリストで表示される。|
# 使い方
現在利用しているサブスクリプションを登録して課金日に登録していたいだいたメールアドレスに通知されるので継続したいサービスと解約したいサービスの管理ができます。

# 大変だった点
課金日自動通知プログラムの構築において、ローカル環境とAWS本番環境における差異に起因する課題に直面しました。特に、フレームワークの挙動に関する理解を深める必要性に迫られ、試行錯誤を重ねる中で貴重な学びを得ることができました。
ローカル環境では正常に動作していたプログラムが、AWS本番環境では期待通りに動作しないという状況に遭遇し、原因究明と解決策の探索に時間を費やしました。その過程で、フレームワークの挙動や本番環境特有の制約について理解を深め、開発スキル向上に繋がりました。
今回の経験を通して、開発環境と本番環境間の差異を意識して開発する事の重要性を改めて認識しました。


# 工夫した点
サブスクリプションを


# ER図
 <img src="https://github.com/user-attachments/assets/3b386ff6-3f46-47fe-b88a-8e986c7b958e" style="width:100%; ">

# インフラ図
 <img src="https://github.com/user-attachments/assets/2283d1a7-8a5c-48e8-84bc-684fdc616196" style="width:100%; ">

# 今後の展望
所持品をど探すときに2Dの画面上にドラッグしたところを探せば見つかる設計にしていますが、これを Google Earth ような3D空間表現 に進化させ、仮想現実の部屋 で所持品を管理できるようなユーザーエクスペリエンスを提供したいと考えています。





