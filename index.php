<ifModule mod_rewriter.c>
	RewriteEngine On
	RewriteBase /
	RewriteRule	^$ public/index.php [L]
	RewriteRule ^((?!public/).*) public/$1 [L,NC]
</IfModule>