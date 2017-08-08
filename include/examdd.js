///////////disable select while drag&drop///////////
var omitformtags=["input", "textarea", "select"]
var omitformtags=omitformtags.join("|")

function disableselect(e){
if (omitformtags.indexOf(e.target.tagName.toLowerCase())==-1)
	return false
}

function reEnable(){
	return true
}


if (typeof document.onselectstart!="undefined")
	document.onselectstart=new Function ("return false")
else{
	document.onmousedown=disableselect
	document.onmouseup=reEnable
}

/////////////////////////////////////////////////////


var dragItem=null;
var dragText="";
var swapText="";

function getObj(name)
{
	if (document.getElementById)
	{
		this.obj = document.getElementById(name);
		this.style = document.getElementById(name).style;
	}
	else if (document.all)
	{
		this.obj = document.all[name];
		this.style = document.all[name].style;
	}
	else if (document.layers)
	{
		this.obj = document.layers[name];
		this.style = document.layers[name];
	}
}

function calPos(e)
{
	if (!e) var e = window.event;
	if (e.pageX || e.pageY)
	{
		posx = e.pageX;
		posy = e.pageY;
	}
	else if (e.clientX || e.clientY)
	{
		posx = e.clientX + document.body.scrollLeft;
		posy = e.clientY + document.body.scrollTop;
	}
}

function dragging(e) {
	if (!e) var e = window.event;
	calPos(e);
	var id_dragging = this.id + "_dragging";
	dragItem = new getObj(id_dragging);
	dragText = this.innerHTML;
	dragItem.style.left = posx + 10;
	dragItem.style.top = posy + 10;
	dragItem.style.visibility = "visible";
}

function dropping(e) {
	if (dragItem)
		this.value = dragText;
}

function releasing(e) {
	if(dragItem) {
		dragItem.style.visibility = "hidden";
		dragItem = null;
	}
}

function moving(e) {
	if (!e) var e = window.event;
	if(dragItem){
		if (!e) var e = window.event;
		calPos(e);
		dragItem.style.left = posx + 10;
		dragItem.style.top = posy + 10;
	}
}

function swapIn(e) {
	if (dragItem) {
		swapText=this.value;
		this.value = dragText;
	}
}

function swapOut(e) {
	if (dragItem)
		this.value = swapText;
}

window.onload=function(e) {
	////////////// for ie /////////////////
	var spanItems=document.getElementsByTagName("span");
	for(var i=0; i<spanItems.length; i++)
		if(spanItems[i].className == "dragItem") 
			spanItems[i].onmousedown=dragging;
	////////////////////////////////////////////
	
	
	////////////// for firefox /////////////////
	var dragItems=document.getElementsByName("dragItem");
	for(var i=0; i<dragItems.length; i++)
		dragItems[i].onmousedown=dragging;
	////////////////////////////////////////////
	

	var inputItems=document.getElementsByTagName("input");
	for(var i=0; i<inputItems.length; i++)
		if(inputItems[i].className == "dropItem") {
			inputItems[i].onmouseup=dropping;
			inputItems[i].onmouseover=swapIn;
			inputItems[i].onmouseout=swapOut;
		}
	
	
	document.onmousemove=moving;
	document.onmouseup=releasing;
}