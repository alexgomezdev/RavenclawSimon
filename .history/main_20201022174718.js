var max=0;
function textlist() {
    max=textlist.arguments.length;
    for (i=0; i<max; i++)
    this[i]=textlist.arguments[i];
}
tl=new textlist( 
    "GAME OVER"
);
var x=0; pos=0;
var l=tl[0].length;
function textticker() {
    document.tickform.tickfield.value=tl[x].substring(0,pos)+"_";
    if(pos++==l) { pos=0; setTimeout("textticker()",1000); x++;
    if(x==max) x=0; l=tl[x].length; } else
    setTimeout("textticker()",50);
}


</HEAD>

<BODY bgcolor="white" onLoad="textticker()">


<form name="tickform"><input type=text name="tickfield" size=40></form>

</body>
</html>
