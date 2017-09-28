<?php

/**
 * コンフィグの基底クラスです
 */
class Config
{

    /**
     * @var string $directory 対象のディレクトリ
     */
    protected static $directory;

    /**
     * 対象のディレクトリを設定します
     *
     * @param string $directory ディレクトリ
     */
    public static function setConfigDirectory($directory)
    {
        self::$directory = $directory;
    }

    /**
     * 対象のディレクトリを返却します
     *
     * @return string ディレクトリ
     */
    public static function getConfigDirectory()
    {
        return rtrim(self::$directory, '/\\');
    }

    /**
     * 設定ファイル情報を返却します
     *
     * @param string $route ファイルルート
     * @return array $config[$key] 設定情報
     */
    public static function get($route)
    {
        $values = preg_split('/\./', $route, -1, PREG_SPLIT_NO_EMPTY);

        $key = array_pop($values);
        $file = array_pop($values) . '.php';

        $path = self::getConfigDirectory() . DIRECTORY_SEPARATOR . $file;

        $config = include($path);

        return $config[$key];
    }
}
