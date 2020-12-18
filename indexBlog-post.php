<?php 

	require_once('./model/data.php');
	require_once('./view/view.php');


	htmlNavbar('article');

	$lNbrArticle = htmlspecialchars($_GET['article']);
	$lKey = htmlspecialchars($_GET['article']) - 1;
	$lNumArticle = getAllArticle()[$lKey];
	
	
    article($lNumArticle['accroche'],$lNumArticle['description'],$lNumArticle['photo'],$lNumArticle['date']);
	

	//vérification emplacement article dans la BDD pour proposer next ou previous ou les 2	
	if ($lNbrArticle == 1)
	{
	footerNavbarFirstArticle($lNbrArticle);
	}
	else if($lNbrArticle == count(getAllArticle()))
	{
	footerNavbarLastArticle($lNbrArticle);
	}
	else footerNavbarArticle($lNbrArticle);

	ScriptJS();
	

	
?>
