<img src="https://github.com/user-attachments/assets/56d7f82c-1afc-4058-b077-c1c14999bc72" width="500px" height="500px">

# inspecting disire　月額課金管理アプリ
# 概要
現代社会では、IT技術の進歩により生活はかつてないほど便利になりました。しかし、その一方で、必要性を見極めずに数多くのサービスに加入し、無駄な浪費に繋がってしまうという側面も存在します。
特に、サブスクリプションサービスは、手軽に利用できる反面、月々の支出が積み重なり、その内訳が把握しづらくなるという課題がありました。気づけば、加入しているサービスすら分からなくなってしまう状況に陥ることも少なくありません。

こうした状況を打開するため、私は、サブスクリプションサービスの必要性と月々の支出を正確に管理するサービスを開発しました。本サービスは、ユーザーの加入状況を可視化し、無駄な支出を抑制することで、より計画的な消費行動を促進することを目指しています。
# 作成背景・目的
無料トライアルを利用した際に解約期間を忘れて加入する予定のない月額サービスにお金を払う経験があり解約期間をわすれないでサブスクを管理するためにアプリを開発しました。
# 使用技術スタック
| カテゴリー|　使用技術 |
| ---- | ---- |
| フロントエンド | HTML, CSS |
| バックエンド | PHP |
| フレームワーク | Laravel |
| インフラ　| ECS on fargate fargate |
| データベース |RDS(mysql) |
| 開発環境 | Docker |
| CI/CD |GitHub Actions |
| デザイン |draw.io |
| etc | Git, GitHub, Gemini 1.5 Flash  |

# 機能一覧
| ログイン画面 | 
|:----------:|
| <img src="https://github.com/user-attachments/assets/7bb7281e-af5c-48d8-8d60-2f75474f1fe5" style="width:100%; "> | 
| ゲストログイン機能があるので気軽にアプリをご利用いただけます。ログイン成功したらトップページへリダイレクト。 |

| アカウント画面 | 
|:----------:|
| <img src="https://github.com/user-attachments/assets/c7a4d7af-2584-4795-87a0-5087c69ac28f" style="width:100%; "> | 
| 名前、email、パスワードを記入していただいたらアカウント登録完了。トップページへリダイレクト |

| トップページ画面 | 
|:----------:|
| <img src="https://github.com/user-attachments/assets/669bb5ad-8769-455a-a9ae-ffe743cc3032" style="width:100%; "> | 
|　アカウント作成時は部屋の登録がないのでデフォルト画面になります。ログインされたら最初に登録された部屋の画面になります。 |

| 部屋の登録 | 
|:----------:|
| <img src="https://github.com/user-attachments/assets/484aac53-d585-4836-ad93-65d29d47283f" style="width:100%; "> | 
|部屋を登録ボタンを押して部屋の名前と画像ファイルを選択して送信ボタンを押して部屋の登録は完了　 |

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
このアプリの機能を活用して、大切な所持品や重要書類の管理を行ってください。失くしたくない物品を登録し、必要な時にアクセスできるようになります。具体的には、各アイテムの詳細情報や保存場所を記録し、デジタル化することで、物理的な紛失リスクを軽減します。さらに、検索機能を利用することで、いつでも簡単に所持品を確認でき、必要に応じて更新することが可能です。このアプリは、個人の貴重品管理を効率化し、心理的な安心感を提供する事が出来ます。

# オリジナリティ・工夫した点
既存の所持品管理アプリは、登録項目の多さから利用のハードルが高いと感じられることが多くありました。そこで本アプリでは、登録項目を最小限に絞ることで、シンプルで直感的な操作を実現しました。
さらに、Googleの画像認識APIを活用することで、ユーザーが画像をアップロードするだけで、アイテムの名前やカテゴリなどを自動で認識し登録できます。この機能により、従来の煩雑な入力作業を大幅に削減し、ユーザーエクスペリエンスの向上を図りました。
また、非同期処理を採用することで、ユーザーが登録ページに移動することなく、シームレスにアイテム登録が完了する設計となっています。これにより、スムーズで快適な操作性を実現し、ユーザーの利便性を最大限に高めています。


# 大変だった点
スマホやタブレットなど、様々な画面サイズに対応するレスポンシブデザインの実装は、開発における大きな課題の一つでした。特に、ウィンドウサイズに合わせて画像を適切に縮尺する処理は、複雑な計算が必要となり、試行錯誤を繰り返しました。
例えば、画像のアスペクト比を維持しながら、ウィンドウの幅に合わせた縮尺を行うには、画像の縦横比とウィンドウの幅を考慮した計算式が必要となります。この処理を理解し、実装できた時の達成感は、プログラミングの面白さを実感させてくれました。
開発を通じて、様々な画面サイズに対応するシステム設計の難しさ、そしてそれを克服した時にプログラミングの楽しさを再認識する事が出来ました。

# ER図
 <img src="https://github.com/user-attachments/assets/3b386ff6-3f46-47fe-b88a-8e986c7b958e" style="width:100%; ">

# インフラ図
 <img src="https://github.com/user-attachments/assets/2283d1a7-8a5c-48e8-84bc-684fdc616196" style="width:100%; ">

# 今後の展望
所持品をど探すときに2Dの画面上にドラッグしたところを探せば見つかる設計にしていますが、これを Google Earth ような3D空間表現 に進化させ、仮想現実の部屋 で所持品を管理できるようなユーザーエクスペリエンスを提供したいと考えています。





