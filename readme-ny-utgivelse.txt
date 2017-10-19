__ISBN__
__I-S-B-N__
__TITTEL__
__BILDETEKST__
__FORFATTERE__
__ÅR__
__EMNEORD__
__PRIS__
__SPRÅK__
__UTGAVE__
__SIDER__

Bilde:
img/__ISBN__.jpg

#######################        inc_booklist.php      #######################
<div id="__ISBN__" class="utgivelse contain">
		<a href="utgivelse.php?isbn=__isbn__" title="les mer om utgivelsen: __TITTEL__">
			<img alt="__BILDETEKST__" src="img/__ISBN__.jpg" class="cover" height="200" width="153">
		</a>
		<h3 class="booktitle">__TITTEL__</h3>
		<ul class="bookmeta">
			<li class="authors">__FORFATTERE__</li>
			<li>Utgivelsesår: __ÅR__</li>
			<li class="keywords">Emneord: __EMNEORD__</li>
			<li>ISBN: __ISBN__</li>
			<li class="price">__PRIS__</li>
		</ul>
		<p class="more"><a href="utgivelse.php?isbn=__ISBN__">Vis mer informasjon om denne utgivelsen ...</a></p>
	</div>

#######################    inc_booklist_table.php   #######################
<tr>
		<td><a href="#__ISBN__">__TITTEL__</a></td>
		<td>__FORFATTERE__</td>
		<td class="price">__PRIS__</td>
</tr>

####################### utgivelser/isbn__ISBN__.php #######################
<div id="utgivelse">
    <div class="booktitle-wrap">
        <img alt="__BILDETEKST__" src="img/__ISBN__.jpg" style="float:right;" class="titlecover" height="150" width="110">
        <h2 class="booktitle">__TITTEL__</h2>
        <h3 class="authors">__FORFATTERE__</h3>
    </div>
    <ul class="bookmeta">
        <li><strong>ISBN: </strong>__I-S-B-N__</li>
        <li class="keywords"><strong>Emneord: </strong>__EMNEORD__</li>
        <li><strong>Språk: __SPRÅK__</strong>
        </li>
        <li><strong>Utgitt: </strong>__ÅR__</li>
        <li><strong>Forlag: </strong> ABM-media</li>
        <li><strong>Utgave: </strong>__UTGAVE__ utgave</li>
        <li><strong>Ant sider: </strong>__SIDER__</li>
        <li><strong>Pris: </strong>__PRIS__</li>
    </ul>

    <h3>Sammendrag</h3>
    <p>____</p>
	<p>____</p>
	<p>____</p>
	<p>____</p>
	<p>____</p>
    
	<h3>Om forfatterne</h3>
    
	<h4>__FORFATTER-1__</h4>
    <p>____</p>

	<h4>____</h4>
    <p>____</p>
	
	<h4>____</h4>
    <p>____</p>
	
	<h4>____</h4>
    <p>____</p>
	
	<h4>____</h4>
    <p>____</p>
    
	<h3>Omslag</h3>
    <img alt="__BILDETEKST__" src="img/__ISBN__.jpg" class="fullsizecover" height="600" width="442">
</div>