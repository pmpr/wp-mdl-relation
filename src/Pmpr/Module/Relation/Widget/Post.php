<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66870835abd11             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Widget; use Pmpr\Module\Relation\Entity\Post as EntityPost; use Pmpr\Module\Relation\Manager\PostManager; class Post extends Common { const wmuqcowyusckkwwo = "\x61\165\164\x6f\x66\x69\x6c\154\x5f\x62\171\x5f\x74\x61\x78\x6f\x6e\x6f\155\x69\145\x73"; public function __construct() { parent::__construct(__("\120\157\x73\164\x20\x52\x65\154\141\x74\151\157\156\x73", PR__MDL__RELATION), __("\x44\x69\x73\160\154\141\x79\40\x74\150\x65\40\x72\x65\x6c\141\164\145\144\40\160\x6f\163\x74\163\x2e", PR__MDL__RELATION)); } public function ecwgiiuacoaokqkw() { $kuguwoaesuqsqysu = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6d\145\x74\141\144\141\x74\x61\137\x69\x74\x65\155\x73"), []); $gsgwomokyuwmqqkg = []; if (!($gsoqsicuqagoqiko = EntityPost::symcgieuakksimmu())) { goto cecuyayqoioasumi; } $gsgwomokyuwmqqkg = $gsoqsicuqagoqiko->gyykaeouuskoqiye($gsoqsicuqagoqiko::uwoqgmuqskqcqsag(), null, self::eoaiagsgqsmskugs); cecuyayqoioasumi: $this->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::qescuiwgsyuikume)->gswweykyogmsyawy(__("\x54\x69\164\154\145", PR__MDL__RELATION)))->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::ygyiacciqgemekwc)->gswweykyogmsyawy(__("\x52\x65\154\x61\164\x69\x6f\x6e", PR__MDL__RELATION))->acauweqyyugwisqc($gsgwomokyuwmqqkg))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::qiyqwyiiwykeccmo)->gswweykyogmsyawy(__("\103\x6f\x75\x6e\164", PR__MDL__RELATION))->escqqisecooswqgo()->eyygsasuqmommkua(5))->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::ckcuiukmyisueqeo)->gswweykyogmsyawy(__("\115\145\164\x61\x64\x61\x74\141", PR__MDL__RELATION))->acauweqyyugwisqc($kuguwoaesuqsqysu)->oikgogcweiiaocka()->wywmmeyauqkeskeq(!empty($kuguwoaesuqsqysu)))->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::kcgwauqkqcyuwwgs)->gswweykyogmsyawy(__("\x52\x65\x6e\x64\x65\x72\x20\x54\x65\155\x70\154\x61\x74\x65", PR__MDL__RELATION))->acauweqyyugwisqc([self::ugmwekegkosuuwii => __("\114\151\x73\x74", PR__MDL__RATING), self::ugsuecoyuqcamsac => __("\x54\141\x62\x6c\145", PR__MDL__RATING), self::iouekwycqkqiceea => __("\x53\151\x6d\160\154\145\x20\114\151\163\x74", PR__MDL__RATING)])); } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $wyoiwuqokyeeuguk = []; $meqocwsecsywiiqs = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, self::qescuiwgsyuikume); $gaeqamemwmwsyukm = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, self::qiyqwyiiwykeccmo, 5); if (!(($gwiwsycaaqgwmewg = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, self::ygyiacciqgemekwc)) && $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->cukiusasccucgwqc())) { goto qgoiooayqmqqsiok; } $gcqseksiskwueksc = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); $seauiwyeoycowegg = [self::goqgcigmiawyauai => $gaeqamemwmwsyukm, self::kcaoouwiygwwmiok => [$gcqseksiskwueksc]]; if (!($gsoqsicuqagoqiko = EntityPost::symcgieuakksimmu())) { goto qogqewiwmwiwskgm; } $ayegqaqygsqsmews = $gsoqsicuqagoqiko->ugcmciwwskkeimse($gsoqsicuqagoqiko::uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); if ($meqocwsecsywiiqs) { goto qiaqsassksqiuyae; } $meqocwsecsywiiqs = $ayegqaqygsqsmews->{self::qgwwgcuuykqagamk}; qiaqsassksqiuyae: $wyoiwuqokyeeuguk = PostManager::get($gcqseksiskwueksc, $ayegqaqygsqsmews->{self::gygsikewooaciecc}, $gwiwsycaaqgwmewg, $seauiwyeoycowegg); qogqewiwmwiwskgm: qgoiooayqmqqsiok: return [self::qwumqqyuasyskkkc => $wyoiwuqokyeeuguk, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ckcuiukmyisueqeo => $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, self::ckcuiukmyisueqeo), self::okciuaikiyaecwmy => $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, self::kcgwauqkqcyuwwgs, self::ugmwekegkosuuwii)]; } }
