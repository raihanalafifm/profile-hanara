<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>'; ?>
<?php echo '<?xml-stylesheet type="text/xsl" href="/sitemap.xsl"?>'; ?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    @foreach ($urls as $url)
        <url>
            <loc>{{ $url['loc'] }}</loc>
            @if (isset($url['lastmod']))
                <lastmod>{{ $url['lastmod'] }}</lastmod>
            @endif
            @if (isset($url['changefreq']))
                <changefreq>{{ $url['changefreq'] }}</changefreq>
            @endif
            @if (isset($url['priority']))
                <priority>{{ $url['priority'] }}</priority>
            @endif
        </url>
    @endforeach
</urlset>
