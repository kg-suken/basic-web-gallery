# 簡単なWebギャラリー

##
phpによって./img/内のファイルをスキャンしWebページを生成します
<br><img src="https://github.com/user-attachments/assets/1cd7495f-0013-461b-b37b-3a61a6b3f23f" width="500"/>



## 使いかた
phpが動作するWebサーバーをセットアップします。  
Webサーバーにphpとassetsをアップロードします。  

## その他
```
<a href='./img/$file' data-lightbox='gallery3' data-title='$Description'><img src='./img-low/$file' alt=''>
```  
に変更すること、低画質版をimg-lowディレクトリに入れ、オリジナルをimgディレクトリに入れることで、通信量を削減することができます。

デザイン  
LightBox:https://lokeshdhakar.com/projects/lightbox2/  
動くWebデザインアイディア帳:https://ugokuweb.coco-factory.jp/  

## 制作
**sskrc**

---

今後の改良に関する提案やバグ報告は、お気軽にIssueを通してご連絡ください。

