<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>

<h1>Page des ventes de <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<br>
<div>
    Vous êtes sur la page des ventes. Il vous suffit de cliquer sur l'article présent pour enregistrer une vente.
</div>
<div style="text-align:left;border:1px solide blue;">
    <?php
//affichage du compte courant
//=somme des apports - sommes des retraits + ventes
    $apports = Apport::model()->findAll();
    $totalApports = 0;
    foreach ($apports as $apport) {
        $totalApports+=$apport->montant;
    }
    echo "Apports: +" . $totalApports . "<br>";
    $retraits = Retrait::model()->findAll();
    $totalRetraits = 0;
    foreach ($retraits as $retrait) {
        $totalRetraits+=$retrait->montant;
    }
    echo "retraits: -" . $totalRetraits . "<br>";
    $articles = Article::model()->findAll();
    $totalVentes = 0;
    foreach ($articles as $article) {
        //get des ventes
        $nbventes=Vente::model()->count("article_id=".$article->id);
        $montant = $article->prix_de_vente_unitaire * $nbventes;
        $totalVentes+=$montant;
    }
    echo "ventes: +" . $totalVentes . "<br>";
    ?>
    <div style="width:100px;border:1px solid black;"></div>
    <?php
    $total = $totalApports - $totalRetraits + $totalVentes;
    echo "<b>Total: =" . $total . " €</b>";
    ?>
</div>
<div class="row">
<?php
//affichage des liens des ventes possibles
//pour chaque article affichage de lien
// trouve toutes les lignes possédant les valeurs des attributs spécifiés
$condition = 'nombre_restant > :someVarName;';
$params = array(':someVarName' => '0',);
$articles2 = Article::model()->findAll($condition, $params);
$style = "spacing:5px;width:150px;height:120px;border:1px solid #999999;text-align:center;";
$i = 0;
foreach ($articles2 as $article) {
    echo "<div class=\"span3\" style=\"" . $style  . "\">";
    echo CHtml::link($article->nom, array('site/vendre',
        'articleId' => $article->id), array("style" => "display:block;background-color:lightblue;width:100%;height:40%;"));
    echo "<span style=\"width:100%;height:40%;\"><b>Prix:" . $article->prix_de_vente_unitaire . "€</b><br>";
    echo "reste:" . $article->nombre_restant . "</span>";
    //affichage du lien pour offrir une boisson
    echo CHtml::link("Offrir ".$article->nom, array('site/offrir',
        'articleId' => $article->id), array("style" => "display:block;background-color:lightgray;width:100%;height:20%;"));
    echo "</div> ";
}
?>
    </div>

