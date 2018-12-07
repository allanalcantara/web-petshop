function ctRoster(usrFirstName, usrNick)
{
	var collection = "" +usrFirstName+ " <span id=\"name2\">&quot;" +usrNick+ "&quot;</span> ";

	document.getElementById('name').innerHTML = collection;
}
function ctRosterClean()
{
	document.getElementById('name').innerHTML = "Lineage 2 Server Staff";
}

//Links - Popup
function OpenWindow(url,height,width)
{
   config=""
   config+="toolbar=0,";
   config+="titlebar=no,"
   config+="resizable=yes," 
   config+="scrollbars=yes,"
   config+="width="+width+","
   config+="height="+height
   var window=open(url,"",config);
   window.focus();
}
//Rankings
function abrir(url)
{
	window.open(url,'url','resizable=yes,menubar=no,scrollbars=yes,width=330,height=430');    
}

//Texto Rotativo
var news = new Array(
	//aqui vão as entradas e onde está o simbolo "#" você inclui o link
	[ "Allan Alcantara" , "#" ] ,
	[ "Inovação em Web's para Lineage 2" , "#" ] ,
	[ "Desenvolvida por:" , "#" ] ,
	[ "AllanAlcantara - Designer,", "#" ] ,
	[] ,
	[]
) ;

var ticker_layer = false ;
var step_time = 25 ;
var freeze_time = 2000 ;
var news_index = 0 ;
var title_index = 0 ;
var end_title = "_" ;

function begin_roll_ticker(){
	window.setTimeout( "roll_ticker()" , step_time ) ;
}
function roll_ticker(){
	var title ;
	if ( news.length > news_index + 1 && news[news_index][0].length >= title_index ){
		title = news[ news_index ] ;
		document.all('ticker_anchor').href = title[1] ;
		document.all('ticker').innerHTML = title[0].substring( 0 , title_index ) ;
		if ( title[0].length > title_index ) document.all('ticker').innerHTML += end_title ;
			title_index++ ;
			window.setTimeout( "roll_ticker()" , step_time ) ;
		}
	else{
		news.length == news_index + 2 ? news_index = 0 : news_index++ ;
		title_index = 0 ;
		window.setTimeout( "roll_ticker()" , freeze_time ) ;
	}
}
function checkform(form)
{
	if(form.usuario.value == "") {
		alert("Campo Login em branco!");
		form.usuario.focus();
		return false;
	}
	if(form.senha.value == "") {
		alert("Campo Senha em branco!");
		form.senha.focus();
		return false;
	}
	if(form.senha2.value == "") {
		alert("Campo Repetir Senha em branco!");
		form.senha2.focus();
		return false;
	}
	if(form.senha.value != form.senha2.value) {
		alert("As senhas não conhecidem!");
		form.senha.focus();
		return false;
	}
	if(form.email.value == "") {
		alert("Campo Email em branco!");
		form.email.focus();
		return false;
	}
	if(form.pergunta.value == "nd") {
		alert("Selecione uma Pergunta Secreta!");
		form.resposta.focus();
		return false;
	}
	if(form.resposta.value == "") {
		alert("Campo Resposta Secreta em branco!");
		form.resposta.focus();
		return false;
	}
	return true;
	form.submit();
}
function checkform2(form)
{
	if(form.usuario.value == "") {
		alert("Campo Login em branco!");
		form.usuario.focus();
		return false;
	}
	if(form.senha.value == "") {
		alert("Campo Senha em branco!");
		form.senha.focus();
		return false;
	}
	return true;
	form.submit();
}
function checkform3(form)
{
	if(form.titulo.value == "") {
		alert("Campo T&iacute;tulo em branco!");
		form.titulo.focus();
		return false;
	}
	if(form.texto.value == "") {
		alert("Campo Texto em branco!");
		form.texto.focus();
		return false;
	}
	return true;
	form.submit();
}