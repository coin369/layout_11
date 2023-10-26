
<?='<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL?>
<rss version="2.0"
    xmlns:content="http:/purl.org/rss/1.0/modules/content/"
    xmlns:wfw="http:/wellformedweb.org/CommentAPI/"
    xmlns:dc="http:/purl.org/dc/elements/1.1/"
    xmlns:atom="http:/www.w3.org/2005/Atom"
    xmlns:sy="http:/purl.org/rss/1.0/modules/syndication/"
    xmlns:slash="http:/purl.org/rss/1.0/modules/slash/"
    >

<channel>
    <title>Thiết kế nội thất</title>
    <atom:link href="https:/datcanhgroup.com/feedproduct/?version=1.0" rel="self" type="application/rss+xml" />
    <link>https:/datcanhgroup.com/</link>
    <description>Đất Cảnh Group Đất Cảnh Group</description>
 
    <language>vi-VN</language>
    <sy:updatePeriod>
    hourly  </sy:updatePeriod>
    <sy:updateFrequency>
    1   </sy:updateFrequency>
    <generator>https:/datcanhgroup.com/</generator>

    <image>
        <url>https:/datcanhgroup.com/upload/banner/logo.png</url>
        <title>Thiết kế nội thất</title>
        <link>https:/datcanhgroup.com/</link>
        <width>32</width>
        <height>32</height>
    </image> 



        @foreach($product as $n)
        <?php $description=\App\MrData::subString($n->content, 200);?>
            <item>
                <title><![CDATA[{{ str_replace("&","", $n->name ) }}]]></title>
                <link>{{  route('detail',['alias'=>$n->alias]) }}</link>
                <description><![CDATA[ <img src="MY_DOMAIN/public/upload/product/big/{{$n->picture}}" class="attachment-full size-full wp-post-image" alt="" loading="lazy" style="float:left; margin:0 15px 15px 0;" /> {!! $description !!}]]></description>
                

                <?php
                    $c=strip_tags(preg_replace("/&(?!#?[a-z0-9]+;)/", "&amp;",$n->content));
                 ?>
                <content> <![CDATA[{!! $n->content !!} <h4>Cảm ơn <a target="_black" title="Thiết kế nội thất Đất Cảnh Group" href="{{  route('detail',['alias'=>$n->alias]) }}">  {{  $n->name }} </a> </h4> ]]> </content>
                   

                <category><![CDATA[  {{$n->Cate()->name}} ]]></category>
                
                <guid>{{  route('cate',['parent'=>$n->Cate()->Parent()->name ,'alias'=>$n->Cate()->alias]) }}</guid>
                <pubDate>{{ $n->created_at->toRssString() }}</pubDate>
            </item>
        @endforeach
    </channel>
</rss>