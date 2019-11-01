<?php

use Abtc\Embed2Link;

class Embed2LinkTest extends \PHPUnit\Framework\TestCase {
    public function testPornhub(){
        $url_src = 'https://jp.pornhub.com/embed/ph5c7431c46b876';
        $url_dest = 'https://jp.pornhub.com/view_video.php?viewkey=ph5c7431c46b876';
        $this->assertEquals($url_dest, Embed2Link::convert($url_src));
    }
    public function testPornhubEmbed(){
        $html = '<iframe src="https://jp.pornhub.com/embed/ph5c7431c46b876" frameborder="0" width="560" height="315" scrolling="no" allowfullscreen></iframe>';
        $url_dest = 'https://jp.pornhub.com/view_video.php?viewkey=ph5c7431c46b876';
        $this->assertEquals($url_dest, Embed2Link::extract($html));
    }
    public function testPornhubLink(){
        $html = '<a href="https://jp.pornhub.com/view_video.php?viewkey=ph5c7431c46b876"><img/></a>';
        $url_dest = 'https://jp.pornhub.com/view_video.php?viewkey=ph5c7431c46b876';
        $this->assertEquals($url_dest, Embed2Link::extract($html));
    }
    public function testTube8(){
        $url_src = 'https://jp.tube8.com/embed/%E3%83%95%E3%82%A7%E3%83%A9/blonde-teen-wake-up-boom-heads-the-bass/60459101/';
        $url_dest = 'https://jp.tube8.com/%E3%83%95%E3%82%A7%E3%83%A9/blonde-teen-wake-up-boom-heads-the-bass/60459101/';
        $this->assertEquals($url_dest, Embed2Link::convert($url_src));
    }
    public function testTube8Embed(){
        $html = '<iframe src="https://jp.tube8.com/embed/%E3%83%95%E3%82%A7%E3%83%A9/blonde-teen-wake-up-boom-heads-the-bass/60459101/" frameborder="0" height="342" width="608" scrolling="no" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" name="t8_embed_video"></iframe>';
        $url_dest = 'https://jp.tube8.com/%E3%83%95%E3%82%A7%E3%83%A9/blonde-teen-wake-up-boom-heads-the-bass/60459101/';
        $this->assertEquals($url_dest, Embed2Link::extract($html));
    }
    public function testRedtube(){
        $url_src = 'https://embed.redtube.com/?id=18135201';
        $url_dest = 'https://jp.redtube.com/18135201';
        $this->assertEquals($url_dest, Embed2Link::convert($url_src));
    }
    public function testRedtubeEmbed(){
        $html = '<iframe src="https://embed.redtube.com/?id=18135201" frameborder="0" width="560" height="315" scrolling="no" allowfullscreen></iframe>';
        $url_dest = 'https://jp.redtube.com/18135201';
        $this->assertEquals($url_dest, Embed2Link::extract($html));
    }
    public function testYouporn(){
        $url_src = 'https://www.youporn.com/embed/15439870/yui-kyouno-got-throatfucked-hard-instead-of-going-to-school/';
        $url_dest = 'https://www.youporn.com/watch/15439870/yui-kyouno-got-throatfucked-hard-instead-of-going-to-school/';
        $this->assertEquals($url_dest, Embed2Link::convert($url_src));
    }
    public function testYoupornEmbed(){
        $html = "<iframe src='https://www.youporn.com/embed/15439870/yui-kyouno-got-throatfucked-hard-instead-of-going-to-school/' frameborder=0 height='315' width='560' scrolling=no name='yp_embed_video' allowfullscreen></iframe>";
        $url_dest = 'https://www.youporn.com/watch/15439870/yui-kyouno-got-throatfucked-hard-instead-of-going-to-school/';
        $this->assertEquals($url_dest, Embed2Link::extract($html));
    }
    public function testXhamster(){
        $url_src = 'https://jp.xhamster.com/embed/12738187';
        $url_dest = 'https://jp.xhamster.com/videos/12738187';
        $this->assertEquals($url_dest, Embed2Link::convert($url_src));
    }
    public function testXhamsterEmbed(){
        $html = '<iframe width="960" height="720" src="https://jp.xhamster.com/embed/12738187" frameborder="0" scrolling="no" allowfullscreen></iframe>';
        $url_dest = 'https://jp.xhamster.com/videos/12738187';
        $this->assertEquals($url_dest, Embed2Link::extract($html));
    }
    public function testXvideo(){
        $url_src = 'https://www.xvideos.com/embedframe/51552825';
        $url_dest = 'http://www.xvideos.com/video51552825/';
        $this->assertEquals($url_dest, Embed2Link::convert($url_src));
    }
    public function testXvideoEmbed(){
        $html = '<iframe src="https://www.xvideos.com/embedframe/51552825" frameborder=0 width=510 height=400 scrolling=no allowfullscreen=allowfullscreen></iframe>';
        $url_dest = 'http://www.xvideos.com/video51552825/';
        $this->assertEquals($url_dest, Embed2Link::extract($html));
    }
}
