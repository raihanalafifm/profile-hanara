<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0"
                xmlns:html="http://www.w3.org/TR/REC-html40"
                xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
                xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9"
                xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes"/>
    <xsl:template match="/">
        <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
                <title>XML Sitemap - PT Hanara Prima Solusindo</title>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <style type="text/css">
                    body {
                        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
                        font-size: 14px;
                        color: #333;
                        background: #f8f9fa;
                        margin: 0;
                        padding: 0;
                    }
                    
                    .header {
                        background: linear-gradient(135deg, #FF6B00 0%, #FF8533 100%);
                        color: white;
                        padding: 40px 0;
                        text-align: center;
                        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
                    }
                    
                    .header h1 {
                        margin: 0;
                        font-size: 28px;
                        font-weight: 600;
                    }
                    
                    .header p {
                        margin: 10px 0 0;
                        opacity: 0.9;
                    }
                    
                    .container {
                        max-width: 1200px;
                        margin: 0 auto;
                        padding: 20px;
                    }
                    
                    .info {
                        background: white;
                        border-radius: 8px;
                        padding: 20px;
                        margin: 20px 0;
                        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
                    }
                    
                    .info p {
                        margin: 5px 0;
                        line-height: 1.6;
                    }
                    
                    table {
                        width: 100%;
                        background: white;
                        border-radius: 8px;
                        overflow: hidden;
                        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
                        margin-top: 20px;
                    }
                    
                    th {
                        background: #f8f9fa;
                        padding: 15px;
                        text-align: left;
                        font-weight: 600;
                        color: #495057;
                        border-bottom: 2px solid #dee2e6;
                    }
                    
                    td {
                        padding: 15px;
                        border-bottom: 1px solid #dee2e6;
                    }
                    
                    tr:last-child td {
                        border-bottom: none;
                    }
                    
                    tr:hover {
                        background: #f8f9fa;
                    }
                    
                    a {
                        color: #FF6B00;
                        text-decoration: none;
                        transition: color 0.3s ease;
                    }
                    
                    a:hover {
                        color: #FF8533;
                        text-decoration: underline;
                    }
                    
                    .priority {
                        display: inline-block;
                        padding: 4px 8px;
                        border-radius: 4px;
                        font-size: 12px;
                        font-weight: 500;
                    }
                    
                    .priority-high {
                        background: #d4edda;
                        color: #155724;
                    }
                    
                    .priority-medium {
                        background: #fff3cd;
                        color: #856404;
                    }
                    
                    .priority-low {
                        background: #f8d7da;
                        color: #721c24;
                    }
                    
                    .footer {
                        text-align: center;
                        padding: 40px 0;
                        color: #6c757d;
                    }
                    
                    @media (max-width: 768px) {
                        .container {
                            padding: 10px;
                        }
                        
                        table {
                            font-size: 12px;
                        }
                        
                        th, td {
                            padding: 10px;
                        }
                    }
                </style>
            </head>
            <body>
                <div class="header">
                    <h1>XML Sitemap</h1>
                    <p>PT Hanara Prima Solusindo - IT Solution Provider</p>
                </div>
                
                <div class="container">
                    <div class="info">
                        <p><strong>Sitemap ini dibuat untuk mesin pencari.</strong></p>
                        <p>Total URL: <xsl:value-of select="count(sitemap:urlset/sitemap:url)"/></p>
                        <p>Untuk navigasi yang lebih mudah, silakan kunjungi <a href="/sitemap">halaman sitemap HTML</a>.</p>
                    </div>
                    
                    <table cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="50%">URL</th>
                                <th width="20%">Priority</th>
                                <th width="15%">Change Freq</th>
                                <th width="15%">Last Modified</th>
                            </tr>
                        </thead>
                        <tbody>
                            <xsl:for-each select="sitemap:urlset/sitemap:url">
                                <tr>
                                    <td>
                                        <a>
                                            <xsl:attribute name="href">
                                                <xsl:value-of select="sitemap:loc"/>
                                            </xsl:attribute>
                                            <xsl:value-of select="sitemap:loc"/>
                                        </a>
                                    </td>
                                    <td>
                                        <xsl:if test="sitemap:priority">
                                            <span>
                                                <xsl:attribute name="class">
                                                    priority
                                                    <xsl:choose>
                                                        <xsl:when test="sitemap:priority &gt;= 0.8">priority-high</xsl:when>
                                                        <xsl:when test="sitemap:priority &gt;= 0.5">priority-medium</xsl:when>
                                                        <xsl:otherwise>priority-low</xsl:otherwise>
                                                    </xsl:choose>
                                                </xsl:attribute>
                                                <xsl:value-of select="sitemap:priority"/>
                                            </span>
                                        </xsl:if>
                                    </td>
                                    <td>
                                        <xsl:value-of select="sitemap:changefreq"/>
                                    </td>
                                    <td>
                                        <xsl:if test="sitemap:lastmod">
                                            <xsl:value-of select="substring(sitemap:lastmod, 1, 10)"/>
                                        </xsl:if>
                                    </td>
                                </tr>
                            </xsl:for-each>
                        </tbody>
                    </table>
                </div>
                
                <div class="footer">
                    <p>&copy; 2025 PT Hanara Prima Solusindo. All rights reserved.</p>
                </div>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>