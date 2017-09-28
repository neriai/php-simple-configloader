# php-simple-configloader

## 概要

- 簡易的な設定ファイルをロードするための設定ファイルローダクラスです。

## 使い方

###  設定ファイルローダクラスのロード

```php
<?php

Config::setConfigDirectory(ROOT_DIR . '/config');
```

### 設定ファイル情報を取得する

#### 取得する設定ファイル

```php
<?php

return array(
    'search_url' => array(
        'pc' => 'http://hogehoge.com/',
        'sp' => 'http://mobile.hogehoge.com/'
    ),
);
```

#### 設定ファイルのsearch_urlの中身を取得する

```php
<?php

Config::get('{設定ファイル名}.search_url');
```
