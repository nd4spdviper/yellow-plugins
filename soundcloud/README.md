Soundcloud plugin 0.6.1
=======================
Embed Soundcloud audio tracks. [See demo](https://developers.datenstrom.se/plugins/soundcloud-plugin).

[![Screenshot](soundcloud-plugin.jpg?raw=true)](https://developers.datenstrom.se/plugins/soundcloud-plugin)

How do I install this?
----------------------
1. [Download and install Yellow](https://github.com/datenstrom/yellow/).
2. [Download plugin](https://github.com/datenstrom/yellow-plugins/raw/master/zip/soundcloud.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `soundcloud.zip` into your `system/plugins` folder.

To uninstall delete the plugin files.

How to embed an audio track?
----------------------------
Create a `[soundcloud]` shortcut.
 
The following arguments are available:

`ID` = last part of a [Soundcloud](http://www.soundcloud.com/) link, e.g. `http://api.soundcloud.com/tracks/101175715`  
`STYLE` = audio track style, e.g. `left`, `center`, `right`  
`WIDTH` = audio track width, pixel or percent  
`HEIGHT` = audio track height, pixel or percent   

Example
-------
Embedding an audio track:

    [soundcloud 101175715]
    [soundcloud 101175715 left 200 166]
    [soundcloud 101175715 right 200 166]
