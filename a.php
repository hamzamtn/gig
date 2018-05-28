<FORM name="asdf">

<P><SELECT size="1" name="firstSelect" onchange="secondSelect.selectedIndex=this.selectedIndex; return true;">
	<OPTION>Red1</OPTION>
	<OPTION>Green</OPTION>
	<OPTION>Blue</OPTION>
</SELECT>

<SELECT size="1" name="secondSelect" onchange="firstSelect.selectedIndex=this.selectedIndex; return true;">
	<OPTION>Red</OPTION>
	<OPTION>Green</OPTION>
	<OPTION>Blue</OPTION>
</SELECT>
</P>

</FORM>