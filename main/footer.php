<style>
#dividerFoot {
	height: 1.125rem;
	line-height: 1.125rem;
}

#dividerFoot:before {
	width: 2%;
	border-top: solid 1px transparent;
	height: 1px;
}

#footerTextGlobal {
	text-align: center;
	color: #DCDDDE;
	font-family: 'Arimo', sans-serif;
	font-size: 0.9em;
	line-height: 1.5;
	font-weight: 400;
}
</style>

<footer id="footer">
    <p id="footerTextGlobal">Copyright &copy; <?php echo date("Y"); ?> <?php getdata('sitename');?> | Created by <a href="https://forum.cfx.re/u/msheba">Mosheba</a></p>
</footer>
<!-- © -->