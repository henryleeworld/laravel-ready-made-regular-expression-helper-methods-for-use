# Laravel 11 現成的正規表達式輔助方法

引入 hotmeteor 的 regex 套件來擴增現成的正規表達式輔助方法，正規表達式是被用來匹配字串中字元組合的模式。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/regex` 來進行正規表達式比對。

----

## 畫面截圖
![](https://i.imgur.com/pb56VQ2.png)
> 用一套簡單（但功能強大）的符號來比對字串
