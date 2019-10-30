<?php

namespace Abtc;

use PHPHtmlParser\Dom;

class Embed2Link {
    /**
     * 埋め込みURLからリンクURLに変更する
     * 
     * @param $url_src
     * @return string
     */
    public static function convert($url_src)
    {
        $url=parse_url($url_src);
        switch($url['host']){
            case 'jp.pornhub.com':
                $paths = explode('/', $url['path']);
                return 'https://jp.pornhub.com/view_video.php?viewkey='.$paths[2];
            case 'jp.tube8.com':
                return str_replace('embed/','',$url_src);
            case 'embed.redtube.com':
                parse_str($url['query'], $params);
                return 'https://jp.redtube.com/'.$params['id'];
            case 'www.youporn.com':
                return str_replace('/embed/','/watch/', $url_src);
            case 'jp.xhamster.com':
                return str_replace('/embed/','/videos/', $url_src);
            case 'www.xvideos.com':
                $paths = explode('/', $url['path']);
                return 'http://www.xvideos.com/video'.$paths[2].'/';
        }
        return null;
    }
    /**
     * 文章からから動画のURLを抜き出す
     * @param $content
     * @return string
     */
    public static function extract($content)
    {
        // テキストの一行目を取り出す
        $html = explode('\n', $content)[0];
        // DOM作成
        $dom = new Dom();
        $dom->load($html);
        // 埋め込み動画の場合
        $tag = $dom->find('iframe');
        if(count($tag) > 0){
            return Embed2Link::convert($tag[0]->src);
        }
        // リンク動画の場合
        $tag = $dom->find('a');
        if(count($tag) > 0){
            return $tag->href;
        }
        return null;
    }
}