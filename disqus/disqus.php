<?php
// Copyright (c) 2013-2016 Datenstrom, http://datenstrom.se
// This file may be used and distributed under the terms of the public license.

// Disqus plugin
class YellowDisqus
{
	const VERSION = "0.6.2";
	var $yellow;			//access to API
	
	// Handle initialisation
	function onLoad($yellow)
	{
		$this->yellow = $yellow;
		$this->yellow->config->setDefault("disqusShortname", "Yellow");
	}
	
	// Handle page extra HTML data
	function onExtra($name)
	{
		$output = null;
		if($name=="disqus" || $name=="comments")
		{
			$shortname = $this->yellow->config->get("disqusShortname");
			$url = $this->yellow->page->get("pageRead");
			$output = "<div id=\"disqus_thread\"></div>\n";
			$output .= "<script type=\"text/javascript\">\n";
			$output .= "var disqus_shortname = '".strencode($shortname)."';\n";
			$output .= "var disqus_url = '".strencode($url)."';\n";
			$output .= "(function() {\n";
			$output .= "var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;\n";
			$output .= "dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';\n";
			$output .= "(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);\n";
			$output .= "})();\n";
			$output .= "</script>\n";
			$output .= "<noscript>Please enable JavaScript to view the <a href=\"http://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>\n";
		}
		return $output;
	}
}

$yellow->plugins->register("disqus", "YellowDisqus", YellowDisqus::VERSION);
?>