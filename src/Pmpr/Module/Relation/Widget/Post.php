<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668dabb27c22f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Widget; use Pmpr\Module\Relation\Entity\Post as EntityPost; use Pmpr\Module\Relation\Manager\PostManager; class Post extends Common { const wmuqcowyusckkwwo = "\141\165\164\157\x66\151\154\154\x5f\x62\x79\x5f\x74\x61\x78\x6f\x6e\x6f\x6d\151\x65\163"; public function __construct() { parent::__construct(__("\x50\157\x73\164\40\122\x65\x6c\x61\164\151\x6f\x6e\163", PR__MDL__RELATION), __("\104\x69\x73\160\x6c\141\x79\40\164\150\145\x20\162\145\x6c\141\x74\x65\x64\x20\160\x6f\x73\x74\x73\x2e", PR__MDL__RELATION)); } public function ecwgiiuacoaokqkw() { $kuguwoaesuqsqysu = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\155\x65\x74\x61\144\141\164\x61\137\151\x74\145\155\x73"), []); $gsgwomokyuwmqqkg = []; if (!($gsoqsicuqagoqiko = EntityPost::symcgieuakksimmu())) { goto cecuyayqoioasumi; } $gsgwomokyuwmqqkg = $gsoqsicuqagoqiko->gyykaeouuskoqiye($gsoqsicuqagoqiko::uwoqgmuqskqcqsag(), null, self::eoaiagsgqsmskugs); cecuyayqoioasumi: $this->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::qescuiwgsyuikume)->gswweykyogmsyawy(__("\124\151\x74\x6c\x65", PR__MDL__RELATION)))->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::ygyiacciqgemekwc)->gswweykyogmsyawy(__("\x52\145\x6c\141\164\x69\x6f\x6e", PR__MDL__RELATION))->acauweqyyugwisqc($gsgwomokyuwmqqkg))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::qiyqwyiiwykeccmo)->gswweykyogmsyawy(__("\103\157\x75\x6e\164", PR__MDL__RELATION))->escqqisecooswqgo()->eyygsasuqmommkua(5))->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::ckcuiukmyisueqeo)->gswweykyogmsyawy(__("\115\145\164\x61\144\141\164\141", PR__MDL__RELATION))->acauweqyyugwisqc($kuguwoaesuqsqysu)->oikgogcweiiaocka()->wywmmeyauqkeskeq(!empty($kuguwoaesuqsqysu)))->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::kcgwauqkqcyuwwgs)->gswweykyogmsyawy(__("\x52\145\x6e\x64\145\x72\x20\x54\x65\155\160\x6c\141\164\145", PR__MDL__RELATION))->acauweqyyugwisqc([self::ugmwekegkosuuwii => __("\114\151\x73\x74", PR__MDL__RATING), self::ugsuecoyuqcamsac => __("\x54\141\142\x6c\x65", PR__MDL__RATING), self::iouekwycqkqiceea => __("\123\x69\155\160\154\145\40\114\x69\163\x74", PR__MDL__RATING)])); } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $wyoiwuqokyeeuguk = []; $meqocwsecsywiiqs = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, self::qescuiwgsyuikume); $gaeqamemwmwsyukm = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, self::qiyqwyiiwykeccmo, 5); if (!(($gwiwsycaaqgwmewg = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, self::ygyiacciqgemekwc)) && $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->cukiusasccucgwqc())) { goto qgoiooayqmqqsiok; } $gcqseksiskwueksc = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); $seauiwyeoycowegg = [self::goqgcigmiawyauai => $gaeqamemwmwsyukm, self::kcaoouwiygwwmiok => [$gcqseksiskwueksc]]; if (!($gsoqsicuqagoqiko = EntityPost::symcgieuakksimmu())) { goto qogqewiwmwiwskgm; } $ayegqaqygsqsmews = $gsoqsicuqagoqiko->ugcmciwwskkeimse($gsoqsicuqagoqiko::uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); if ($meqocwsecsywiiqs) { goto qiaqsassksqiuyae; } $meqocwsecsywiiqs = $ayegqaqygsqsmews->{self::qgwwgcuuykqagamk}; qiaqsassksqiuyae: $wyoiwuqokyeeuguk = PostManager::get($gcqseksiskwueksc, $ayegqaqygsqsmews->{self::gygsikewooaciecc}, $gwiwsycaaqgwmewg, $seauiwyeoycowegg); qogqewiwmwiwskgm: qgoiooayqmqqsiok: return [self::qwumqqyuasyskkkc => $wyoiwuqokyeeuguk, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ckcuiukmyisueqeo => $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, self::ckcuiukmyisueqeo), self::okciuaikiyaecwmy => $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, self::kcgwauqkqcyuwwgs, self::ugmwekegkosuuwii)]; } }
