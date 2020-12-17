
<?php 

	require_once('./view/view.php');
	require_once('./model/data.php');


	

	htmlNavbar('Accueil Mangakun Blogun');

	enteteBloglist();

	

	foreach(getAllArticle() as $lRow){
	articleBlogList($lRow['ID'],$lRow['accroche'],$lRow['photo'],$lRow['date']);
	}

	footerNavbarListe();

	ScriptJS();
	

	
?>



    
   



