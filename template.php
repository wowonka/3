<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="news-detail">
	
 <div class="article-card__image sticky">	
	<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>" title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"/>
 </div>	
	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<div "article-card__date"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></div>
	<?endif;?>

<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<div class="article-card__title"><?=$arResult["NAME"]?></div>

	<?endif;?>
<div class="article-card__text">
            <div class="block-content" data-anim="anim-3">
		<?echo $arResult["DETAIL_TEXT"];?>
		</div>

	
<a class="article-card__button" href="#">Назад к новостям</a></div>

</div>