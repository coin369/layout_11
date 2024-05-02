

<urlset xmlns="https://www.sitemaps.org/schemas/sitemap/0.9" xmlns:video="https://www.google.com/schemas/sitemap-video/1.1">

	@foreach($TYoutube as $y)
	<url>
		<loc>{{route('youtube.index')}}</loc>
		<changefreq>monthly</changefreq>
		<priority>0.5</priority>
		<video:video>
			<video:player_loc allow_embed="yes">{{$y['youtube']}}</video:player_loc>
			<video:thumbnail_loc>{{$y['keyword']}}</video:thumbnail_loc>
			<video:title>{{$y['name']}}</video:title>
			<video:description>{{$y['description']}}</video:description>
			<video:tag>thiết kế nội thất</video:tag>
			<video:tag>thi công nội thất</video:tag>
			<video:category>Thiết kế nội thất Đất Cảnh Group</video:category>
		</video:video>
	</url>
	@endforeach
</urlset>